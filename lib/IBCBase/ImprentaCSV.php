<?php
/**
 * TrcIMPLAN IBCBase - ImprentaCSV
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package PlataformaDeConocimiento
 */

namespace IBCBase;

/**
 * Clase ImprentaCSV
 */
class ImprentaCSV extends \Base\Imprenta {

    public    $directorio;               // Texto, nombre del directorio en raíz donde se guardarán los archivos
    public    $publicaciones_directorio; // Texto, nombre del directorio dentro de lib que contiene los archivos con las publicaciones
    protected $archivo_ruta;             // Texto opcional, ruta al archivo index
    protected $recolector;               // Instancia de \Base\Recolector
    public    $contador = 0;             // Entero, cantidad de publicaciones producidas
    protected $columnas = array(
        'Demografía' => array(
            'Población total',
            'Porcentaje de población masculina',
            'Porcentaje de población femenina',
            'Porcentaje de población de 0 a 14 años',
            'Porcentaje de población de 15 a 64 años',
            'Porcentaje de población de 65 y más años',
            'Porcentaje de población no especificada',
            'Fecundidad promedio',
            'Porcentaje de población con discapacidad'),
        'Características Económicas' => array(
            'Población Económicamente Activa',
            'Población Económicamente Activa masculina',
            'Población Económicamente Activa femenina',
            'Población Ocupada',
            'Población Ocupada masculina',
            'Población Ocupada femenina',
            'Población Desocupada',
            'Derechohabiencia'),
        'Viviendas' => array(
            'Hogares',
            'Ocupación por Vivienda',
            'Viviendas con Electricidad',
            'Viviendas con Agua',
            'Viviendas con Drenaje',
            'Viviendas con Televisión',
            'Viviendas con Automóvil',
            'Viviendas con Computadora'),
        'Unidades Económicas' => array(
            'Total Actividades Económicas',
            'Primer actividad nombre',
            'Primer actividad porcentaje',
            'Segunda actividad nombre',
            'Segunda actividad porcentaje',
            'Tercera actividad nombre',
            'Tercera actividad porcentaje',
            'Cuarta actividad nombre',
            'Cuarta actividad porcentaje',
            'Quinta actividad nombre',
            'Quinta actividad porcentaje'));

    /**
     * Constructor
     */
    public function __construct() {
        $this->recolector = new \Base\Recolector();
    } // constructor

    /**
     * Validar
     */
    protected function validar() {
        // Validar publicaciones_directorio
        if (!is_string($this->publicaciones_directorio) || ($this->publicaciones_directorio == '')) {
            throw new \Exception("Falló la validación en ImprentaCSV: No se ha definido el directorio de publicaciones.");
        }
        $lib_dir = sprintf('%s/%s', \Base\Recolector::LIB_DIR, $this->publicaciones_directorio);
        if (!is_dir($lib_dir)) {
            throw new \Exception("Falló la validación en ImprentaCSV: No existe el directorio $lib_dir");
        }
        // Validar directorio
        if (!is_string($this->directorio) || ($this->directorio == '')) {
            $this->directorio = \Base\Funciones::caracteres_para_web($this->publicaciones_directorio);
        }
        // Validar archivo_ruta
        if (!is_string($this->archivo_ruta) || ($this->archivo_ruta == '')) {
            $this->archivo_ruta = "{$this->directorio}/{$this->directorio}.csv";
        }
    } // validar

    /**
     * Encabezados CSV
     *
     * @return string Texto con los encabezados
     */
    protected function encabezados_csv() {
        // Primer columna es la colonia
        $b = array("\"Colonia\"");
        // Bucle por las columnas para crear encabezados
        foreach ($this->columnas as $eje => $indicadores) {
            foreach ($indicadores as $indicador) {
                $b[] = "\"$indicador\"";
            }
        }
        // Entregar
        return implode(",", $b)."\n";
    } // encabezados_csv

    /**
     * Elaborar contenido CSV
     *
     * @return string Texto con el contenido, entragará FALSO si no hay
     */
    protected function csv() {
        // Iniciar arreglo donde acumularemos el contenido
        $a = array();
        // Bucle por las publicaciones
        foreach ($this->recolector->obtener_publicaciones() as $publicacion) {
            // Debe tener el método datos
            if (method_exists($publicacion, 'datos')) {
                $datos = $publicacion->datos();
                // Primer columna es el nombre de la colonia
                $b = array("\"{$publicacion->nombre}\"");
                // Bucle por las columnas
                foreach ($this->columnas as $eje => $indicadores) {
                    foreach ($indicadores as $indicador) {
                        // Si existe ese dato se pone, de lo contrario va vacio
                        if (isset($datos[$eje][Eje::FECHA][$indicador])) {
                            // Si tiene una coma su pone entre comillas dobles
                            $dato = $datos[$eje][Eje::FECHA][$indicador];
                            if (is_int($dato) || is_float($dato)) {
                                $b[] = $dato;
                            } else {
                                $b[] = "\"$dato\"";
                            }
                        } else {
                            $b[] = '';
                        }
                    }
                }
                $a[] = implode(",", $b);
            }
        }
        // Entregar
        if (count($a) > 0) {
            return implode("\n", $a)."\n";
        } else {
            return FALSE;
        }
    } // csv

    /**
     * Imprimir
     */
    public function imprimir() {
        echo "ImprentaCSV: ";
        $this->validar();
        $this->recolector->agregar_publicaciones_en($this->publicaciones_directorio, $this);
        $this->crear_directorio($this->directorio);
        // Validar que haya publicaciones
        if ($this->recolector->obtener_cantidad_de_publicaciones() == 0) {
            throw new \Exception("Aviso en ImprentaCSV: No hay publicaciones para crear los archivos JSON.");
        }
        // Si hay contenido se crea el archivo, de lo contrario se elimina
        $csv = $this->csv();
        if (is_string($csv)) {
            $this->crear_archivo($this->archivo_ruta, $this->encabezados_csv().$csv);
            $this->contador++;
        } else {
            $this->eliminar_archivo($this->archivo_ruta);
        }
        // Mostrar mensaje
        echo sprintf(" %s\n", $this->archivo_ruta);
    } // imprimir

} // Clase ImprentaCSV

?>
