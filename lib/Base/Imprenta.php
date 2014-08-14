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
     * Validar directorio destino
     */
    protected function validar_directorio_destino() {
        $this->mensajes[] = "Validando que exista {$this->destino_directorio}.";
        if (!is_dir($this->destino_directorio)) {
            throw new \Exception("Error en Imprenta: No existe el directorio del sitio web {$this->destino_directorio}");
        }
    } // validar_directorio_destino

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
        // DETERMINAR DIRECTORIO
        $dir = sprintf('%s/%s', $this->sitio_web_directorio, $in_ruta);
        // ACUMULAR MENSAJE
        $this->mensajes[] = "Eliminando directorio $dir...";
        // SI EXISTE ELIMINA LOS ARCHIVO Y ELIMINA EL DIRECTORIO
        if (is_dir($dir)) {
            array_map('unlink', glob("{$dir}/*"));
            if (rmdir($dir) === false) {
                throw new \Exception("Error en Imprenta, eliminar_directorio: No se pudo eliminar $dir.");
            }
        } else {
            $this->mensajes[] = "  No existe $dir. Por lo que no hice nada.";
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
        // DETERMINAR DIRECTORIO
        $dir = sprintf('%s/%s', $this->sitio_web_directorio, $in_ruta);
        // SI NO EXISTE LO CREA
        if (!is_dir($dir)) {
            if (mkdir($dir, 0755) === false) {
                throw new \Exception("Error en Imprenta, crear_directorio: No se pudo crear el directorio $dir");
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
        $archivo   = sprintf('%s/%s', $this->sitio_web_directorio, $in_ruta);
        $apuntador = fopen($archivo, 'w');
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
