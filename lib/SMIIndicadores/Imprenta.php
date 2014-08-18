<?php
/*
 * SMIbeta - SMI Indicadores Imprenta
 *
 * Copyright (C) 2014 Guillermo Valdés Lozano
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
 */

// Namespace
namespace SMIIndicadores;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\Imprenta {

    // public $mensajes;
    public $indicadores_directorios = array(
        'SMIIndicadoresTorreon',
        'SMIIndicadoresGomezPalacio',
        'SMIIndicadoresLerdo',
        'SMIIndicadoresMatamoros',
        'SMIIndicadoresLaLaguna');

    /**
     * Imprimir
     *
     * @return string Mensajes para la terminal
     */
    public function imprimir() {
        // Preparar el menu principal
        $menu_principal = new \Base\MenuPrincipal();
        // Preparar el menu izquierdo
        $menu_izquierdo = new \Base\MenuIzquierdo();
        // Preparar la plantilla
        $plantilla                 = new \Base\Plantilla();
        $plantilla->menu_principal = $menu_principal;
        $plantilla->menu_izquierdo = $menu_izquierdo;
        // Bucle en los directorios
        foreach ($this->indicadores_directorios as $dir) {
            // Directorio de donde tomar los archivos
            $directorio = "lib/$dir";
            // Si no existe
            if (!is_dir($directorio)) {
                $this->mensajes[] = "  No existe el directorio $directorio.";
                continue;
            }
            // Obtener el listado con los archivos PHP
            $archivos = glob("$directorio/*.php");
            if ($archivos === false) {
                $this->mensajes[] = "  Falló la obtención de archivos PHP en el directorio $directorio.";
                continue;
            }
            if (count($archivos) == 0) {
                $this->mensajes[] = "  No hay archivos PHP en el directorio $directorio.";
                continue;
            }
            // Bucle en los archivos encontrados
            foreach ($archivos as $archivo) {
                // Definir la ruta a la clase
                $clase_ruta = $dir.'\\'.basename($archivo, '.php');
                // Definir la instancia de la publicación con el Indicador
                $indicador  = new $clase_ruta();
                // Definir la ruta de destino (archivo HTML)
                $destino    = "{$indicador->directorio}/{$indicador->archivo}.html";
                // Pasar propiedades del Indicador a la Plantilla
                $plantilla->titulo      = $indicador->nombre;
                $plantilla->autor       = $indicador->autor;
                $plantilla->descripcion = $indicador->descripcion;
                $plantilla->claves      = $indicador->claves;
                $plantilla->ruta        = $destino;
                $plantilla->contenido   = $indicador->contenido;
                $plantilla->javascript  = $indicador->javascript;
                // Escribir el archivo HTML
                $this->crear_directorio($indicador->directorio);    // Puede causar una excepción
                $this->crear_archivo($destino, $plantilla->html()); // Puede causar una excepción
                // Agregar mensaje
                $this->mensajes[] = "  Listo $destino";
            } // Bucle en los archivos encontrados
        } // Bucle en los directorios
        // Entregar mensajes
        return implode("\n", $this->mensajes);
    } // imprimir

} // Clase Imprenta

?>
