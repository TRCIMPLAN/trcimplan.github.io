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

    // public $indicadores_directorios;
    // public $mensajes;

    /**
     * Imprimir
     *
     * @return string Mensajes para la terminal
     */
    public function imprimir() {
        // Bucle en los directorios
        foreach ($this->indicadores_directorios as $dir) {
            $directorio = "lib/$dir";
            // Si no existe el directorio en turno
            if (!is_dir($directorio)) {
                $this->mensajes[] = "  No existe el directorio $directorio.";
                continue;
            }
            // Obtener los archivos PHP
            $archivos = glob("$directorio/*.php");
            if ($archivos === false) {
                $this->mensajes[] = "  Falló la obtención de archivos PHP en el directorio $dir.";
                continue;
            }
            if (count($archivos) == 0) {
                $this->mensajes[] = "  No hay archivos PHP en el directorio $dir.";
                continue;
            }
            // Bucle en los archivos encontrados
            foreach ($archivos as $archivo) {
                // Definir la instancia con el indicador
                $clase_ruta = $dir.'\\'.basename($archivo, '.php');
                $indicador  = new $clase_ruta();
                // Definir la ruta de destino
                $destino = "{$indicador->directorio}/{$indicador->archivo}.html";
                // Definir la instancia con la clase
                $plantilla              = new \Base\PlantillaHTML();
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
                // Mensaje
                $this->mensajes[] = "  Listo $destino";
            } // Bucle en los archivos encontrados
        } // Bucle en los directorios
        // Entregar mensajes
        return implode("\n", $this->mensajes);
    } // imprimir

} // Clase Imprenta

?>
