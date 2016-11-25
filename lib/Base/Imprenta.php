<?php
/**
 * Plataforma de Conocimiento - Imprenta
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
 * Clase Abstracta Imprenta
 */
abstract class Imprenta {

    /**
     * Eliminar archivo
     *
     * @param  string  Ruta al archivo a eliminar
     * @return boolean Verdadero si se ha eliminado
     */
    protected function eliminar_archivo($ruta) {
        // Validar parámetro
        if (trim($ruta) == '') {
            throw new ImprentaExceptionValidacion("Error en Imprenta, eliminar_archivo: Parámetro vacio.");
        }
        // Si existe el archivo, lo borra
        if (file_exists($ruta)) {
            return unlink($ruta);
        }
    } // eliminar_archivo

    /**
     * Eliminar un directorio y todos sus archivos
     *
     * Manda una 'r' a la terminal al eliminar
     *
     * @param string Ruta al directorio a eliminar
     */
    protected function eliminar_directorio($ruta) {
        // Validar parámetro
        if (trim($ruta) == '') {
            throw new ImprentaExceptionValidacion("Error en Imprenta, eliminar_directorio: Parámetro vacio.");
        }
        // Si existe elimina los archivos que haya en éste
        if (is_dir($ruta)) {
            array_map('unlink', glob("$ruta/*"));
            if (rmdir($ruta) === false) {
                throw new ImprentaExceptionFallo("Error en Imprenta, eliminar_directorio: No se pudo eliminar $ruta.");
            } else {
                // Poner una r en la terminal
                echo 'r';
            }
        }
    } // eliminar_directorio

    /**
     * Crear directorio
     *
     * Manda una 'd' a la terminal al crear
     *
     * @param string Ruta al directorio a crear
     */
    protected function crear_directorio($ruta) {
        // Validar parámetro
        if (trim($ruta) == '') {
            throw new ImprentaExceptionValidacion("Error en Imprenta, crear_directorio: Parámetro vacio.");
        }
        // Si no existe el directorio, lo crea
        if (!is_dir($ruta)) {
            if (mkdir($ruta, 0755) === false) {
                throw new ImprentaExceptionFallo("Error en Imprenta, crear_directorio: No se pudo crear el directorio $ruta");
            } else {
                // Poner una d en la terminal
                echo 'd';
            }
        }
    } // crear_directorio

    /**
     * Crear archivo
     *
     * Manda una '.' a la terminal al crear
     *
     * @param string Ruta al archivo a crear
     * @param mixed  Texto o arreglo con el contenido
     */
    protected function crear_archivo($ruta, $contenido) {
        // Validar parámetros
        if (trim($ruta) == '') {
            throw new ImprentaExceptionValidacion("Error en Imprenta, crear_archivo: Parámetro vacío, la ruta.");
        }
        if (trim($contenido) == '') {
            throw new ImprentaExceptionValidacion("Error en Imprenta, crear_archivo: Parámetro vacío, el contenido.");
        }
        // Crear archivo
        $apuntador = fopen($ruta, 'w');
        if ($apuntador === false) {
            throw new ImprentaExceptionFallo("Error en Imprenta, crear_archivo: No se puede crear $ruta");
        }
        if (is_string($contenido)) {
            fwrite($apuntador, $contenido);
        } elseif (is_array($contenido)) {
            foreach ($contenido as $linea) {
                fwrite($apuntador, $contenido);
            }
        }
        fclose($apuntador);
        // Poner un punto en la terminal
        echo ".";
    } // crear_archivo

    /**
     * Imprimir
     */
    abstract public function imprimir();

} // Clase Abstracta Imprenta

?>
