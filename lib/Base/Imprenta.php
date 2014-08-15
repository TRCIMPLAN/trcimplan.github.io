<?php
/*
 * SMIbeta - SMI Imprenta
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

// NAMESPACE
namespace Base;

/**
 * Clase Imprenta
 */
class Imprenta extends \Configuracion\ImprentaConfig {

    // public $indicadores_directorios;
    public $mensajes = array();

    /**
     * Eliminar un directorio y sus archivos
     *
     * @param string Ruta al directorio a eliminar
     */
    protected function eliminar_directorio($in_ruta) {
        // VALIDAR PARAMETRO
        if (trim($in_ruta) == '') {
            throw new \Exception("Error en Imprenta, eliminar_directorio: Parámetro vacio.");
        }
        // ACUMULAR MENSAJE
        $this->mensajes[] = "Eliminando directorio $in_ruta...";
        // SI EXISTE ELIMINA LOS ARCHIVO Y ELIMINA EL DIRECTORIO
        if (is_dir($in_ruta)) {
            array_map('unlink', glob("$in_ruta/*"));
            if (rmdir($in_ruta) === false) {
                throw new \Exception("Error en Imprenta, eliminar_directorio: No se pudo eliminar $in_ruta.");
            }
        } else {
            $this->mensajes[] = "  No existe $in_ruta. Por lo que no hice nada.";
        }
    } // eliminar_directorio

    /**
     * Crear directorio
     *
     * @param string Ruta al directorio a crear
     */
    protected function crear_directorio($in_ruta) {
        // VALIDAR PARAMETRO
        if (trim($in_ruta) == '') {
            throw new \Exception("Error en Imprenta, crear_directorio: Parámetro vacio.");
        }
        // SI NO EXISTE LO CREA
        if (!is_dir($in_ruta)) {
            if (mkdir($in_ruta, 0755) === false) {
                throw new \Exception("Error en Imprenta, crear_directorio: No se pudo crear el directorio $in_ruta");
            }
        }
    } // crear_directorio

    /**
     * Crear archivo
     *
     * @param string Ruta al archivo a crear
     * @param mixed  Texto o arreglo con el contenido
     */
    protected function crear_archivo($in_ruta, $in_contenido) {
        // VALIDAR PARAMETROS
        if (trim($in_ruta) == '') {
            throw new \Exception("Error en Imprenta, crear_archivo: Parámetro vacío, la ruta.");
        }
        if (trim($in_contenido) == '') {
            throw new \Exception("Error en Imprenta, crear_archivo: Parámetro vacío, el contenido.");
        }
        // GRABAR
        $apuntador = fopen($in_ruta, 'w');
        if ($apuntador === false) {
            throw new \Exception("Error en Imprenta, crear_archivo: No se puede crear $archivo");
        }
        if (is_string($in_contenido)) {
            fwrite($apuntador, $in_contenido);
        } elseif (is_array($in_contenido)) {
            foreach ($in_contenido as $linea) {
                fwrite($apuntador, $in_contenido);
            }
        }
        fclose($apuntador);
    } // crear_archivo

} // Clase Imprenta

?>
