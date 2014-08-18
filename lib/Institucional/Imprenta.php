<?php
/*
 * SMIbeta - DESCRIPCION
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
namespace Institucional;

/**
 * Clase Institucional
 */
class Institucional extends \Base\Imprenta {

    // public $mensajes;
    public $clases_directorio = 'Institucional';

    /**
     * Imprimir
     *
     * @return string Mensajes para la terminal
     */
    public function imprimir() {
        // Preparar el menu principal
        $menu_principal = new \Base\MenuPrincipal();
        // Preparar la plantilla
        $plantilla                 = new \Base\Plantilla();
        $plantilla->menu_principal = $menu_principal;
        // Bucle con las clases recolectadas
        foreach ($this->recolectar_clases($this->clases_directorio) as $clase) { // Puede causar una excepción
            // Definir instancia
            $publicacion = new $clase();
            // Definir la ruta de destino (archivo HTML)
            $destino = "{$publicacion->directorio}/{$publicacion->archivo}.html";
            // Pasar propiedades del Indicador a la Plantilla
            $plantilla->titulo      = $publicacion->nombre;
            $plantilla->autor       = $publicacion->autor;
            $plantilla->descripcion = $publicacion->descripcion;
            $plantilla->claves      = $publicacion->claves;
            $plantilla->ruta        = $destino;
            $plantilla->contenido   = $publicacion->contenido;
            $plantilla->javascript  = $publicacion->javascript;
            // Escribir el archivo HTML
            $this->crear_directorio($publicacion->directorio);  // Puede causar una excepción
            $this->crear_archivo($destino, $plantilla->html()); // Puede causar una excepción
            // Agregar mensaje
            $this->mensajes[] = "  Listo {$publicacion->nombre}";
        }
        // Entregar mensajes
        return implode("\n", $this->mensajes);
    } // imprimir

} // Clase Institucional

?>
