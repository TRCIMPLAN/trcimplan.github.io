<?php
/**
 * Plataforma de Conocimiento - Recolector
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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

namespace Base;

/**
 * Clase Recolector
 *
 * Su función es recolectar las Publicaciones
 */
class Recolector {

    const LIB_DIR            = 'lib';             // Directorio que contiene los namespaces de donde se recolectarán las clases
    protected $publicaciones = array();           // Arreglo con instancias de Publicacion
    protected $estados       = array('publicar'); // Arreglo con los estados de las publicaciones a recolectar

    /**
     * Definir modo para crear archivos
     */
    public function definir_modo_crear_archivos() {
        $this->estados = array('publicar', 'revisar');
    } // definir_modo_crear_archivos

    /**
     * Definir modo para leer archivos públicos
     */
    public function definir_modo_leer_archivos_publicos() {
        $this->estados = array('publicar');
    } // definir_modo_leer_archivos_publicos

    /**
     * Obtener clases en directorio
     *
     * @param  string Nombre del directorio en LIB_DIR de donde se recolectarán los archivos PHP
     * @return array  Arreglo con textos de la forma Directorio\Clase
     */
    protected function obtener_clases_en($dir) {
        // Validar parámetro
        if (!is_string($dir) || (trim($dir) == '')) {
            throw new \Exception("Error en Recolector: Parámetro incorrecto.");
        }
        // Si no existe
        $lib_dir = sprintf('%s/%s', self::LIB_DIR, $dir);
        if (!is_dir($lib_dir)) {
            throw new \Exception("Error en Recolector: No existe el directorio $lib_dir");
        }
        // Obtener el listado con los archivos PHP
        $archivos = glob("$lib_dir/*.php");
        if ($archivos === false) {
            throw new \Exception("Error en Recolector: Falló la obtención de archivos PHP en el directorio $lib_dir");
        }
        if (count($archivos) == 0) {
            throw new RecolectorExceptionVacio("Aviso en Recolector: No hay archivos PHP en el directorio $lib_dir");
        }
        // Bucle en los archivos encontrados
        $a = array();
        foreach ($archivos as $archivo) {
            // Definir la ruta a la clase
            $a[] = $dir.'\\'.basename($archivo, '.php');
        }
        // Entregar
        return $a;
    } // obtener_clases_en

    /**
     * Ordenar por directorio y nombre de forma ascendente
     */
    public function ordenar_por_directorio_nombre_asc() {
        $temporal = array();
        foreach ($this->publicaciones as $publicacion) {
            $clave = Funciones::caracteres_para_web(sprintf('%s-%s', $publicacion->directorio, $publicacion->nombre));
            $temporal[$clave] = $publicacion;
        }
        ksort($temporal);
        $this->publicaciones = $temporal;
    } // ordenar_por_directorio_nombre_asc

    /**
     * Ordenar por tiempo de forma descendente (más nuevo a más antiguo)
     */
    public function ordenar_por_tiempo_desc() {
        $temporal = array();
        foreach ($this->publicaciones as $publicacion) {
            $clave = Funciones::caracteres_para_web(sprintf('%s-%s', $publicacion->tiempo_creado(), $publicacion->nombre));
            $temporal[$clave] = $publicacion;
        }
        ksort($temporal);
        $this->publicaciones = $temporal;
    } // ordenar_por_tiempo_desc

    /**
     * Obtener cantidad de publicaciones
     *
     * Entrega un número entero con la cantidad de publicaciones recolectadas
     *
     * @return integer Cantidad de publicaciones
     */
    public function obtener_cantidad_de_publicaciones() {
        return count($this->publicaciones);
    } // obtener_cantidad_de_publicaciones

    /**
     * Obtener publicaciones
     *
     * Obtener las instancias de las publicaciones recolectadas
     *
     * @param  integer Opcional, entero cantidad límite
     * @return array   Arreglo con instancias de publicaciones
     */
    public function obtener_publicaciones($limite = NULL) {
        if (is_int($limite) && ($limite > 0)) {
            return array_slice($this->publicaciones, 0, $limite, true);
        } else {
            return $this->publicaciones;
        }
    } // obtener_publicaciones

    /**
     * Agregar publicaciones en
     *
     * Agregar las publicaciones que se encuentran en un directorio
     *
     * @param string Nombre del directorio en LIB_DIR de donde se recolectarán las publicaciones
     * @param mixed  Opcional, instancia de Imprenta para pasar variables
     */
    public function agregar_publicaciones_en($lib_dir, $imprenta = NULL) {
        // Bucle con las clases recolectadas
        foreach ($this->obtener_clases_en($lib_dir) as $clase) {
            // Cargar
            $publicacion = new $clase();
            // Si es instancia de Publicacion, se acumula
            if ($publicacion instanceof Publicacion) {
                // Si el estado está en estados (vea los métodos definir modo)
                if (in_array(strtolower($publicacion->estado), $this->estados)) {
                    // Si viene una instancia de Imprenta
                    if ($imprenta instanceof ImprentaPublicaciones) {
                        $publicacion->definir_encabezado($imprenta->encabezado);
                        $publicacion->definir_encabezado_color($imprenta->encabezado_color);
                        $publicacion->definir_encabezado_icono($imprenta->encabezado_icono);
                        $publicacion->definir_claves($imprenta->claves);
                        $publicacion->definir_directorio($imprenta->directorio);
                        $publicacion->definir_nombre_menu($imprenta->nombre_menu);
                        $publicacion->definir_imprenta_titulo($imprenta->titulo);
                    }
                    // Acumular
                    $this->publicaciones[] = $publicacion;
                }
            }
        }
    } // agregar_publicaciones_en

    /**
     * Agregar publicaciones de imprentas
     *
     * Agregar las publicaciones que una o más imprentas tienen en su información
     *
     * @param  mixed   Texto (ruta a ImprentaPublicaciones), Arreglo de textos (rutas a ImprentaPublicaciones)
     * @return boolean Verdadero encuentra publicaciones, falso si no hay
     */
    public function agregar_publicaciones_de_imprentas($entrada) {
        // Definir rutas siempre como un arreglo
        if (is_string($entrada) && ($entrada != '')) {
            $rutas = array($entrada);
        } elseif (is_array($entrada) && (count($entrada) > 0)) {
            $rutas = $entrada;
        } else {
            return false;
        }
        // Bucle por las rutas
        foreach ($rutas as $clase) {
            // Iniciar instancia
            $imprenta_publicaciones = new $clase();
            // Si es ImprentaPublicaciones se agrega
            if ($imprenta_publicaciones instanceof ImprentaPublicaciones) {
                $this->agregar_publicaciones_en($imprenta_publicaciones->publicaciones_directorio, $imprenta_publicaciones);
            }
        }
        // Entregar verdadero si se encontraron publicaciones
        return ($this->obtener_cantidad_de_publicaciones() > 0);
    } // agregar_publicaciones_de_imprentas

} // Clase Recolector

?>
