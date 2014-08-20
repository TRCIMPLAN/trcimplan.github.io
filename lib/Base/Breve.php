<?php
/*
 * SMIbeta - Breve
 *
 * Copyright (C) 2014 IMPLAN Torreón
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
namespace Base;

/**
 * Clase Breve
 */
class Breve {

    public $publicacion; // Instancia de Publicacion

    /**
     * Constructor
     *
     * @param mixed Instancia de Publicacion
     */
    public function __construct($in_publicacion=false) {
        $this->publicacion = $in_publicacion;
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Validar
        if (!is_object($this->publicacion)) {
            throw new \Exception("Error en Plantilla, incorporar_publicacion: No es una instancia.");
        }
        if (!($this->publicacion instanceof Publicacion)) {
            throw new \Exception("Error en Plantilla, incorporar_publicacion: No es instancia de Publicacion.");
        }
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '            <div class="media breve">';
        if ($this->publicacion->imagen_previa != '') {
            $a[] = '              <a class="pull-left" href="'.$this->publicacion->url()."\"><img src=\"{$this->publicacion->imagen_previa}\" class=\"breve-imagen\"></a>";
        }
        $a[] = '              <div class="media-body">';
        $a[] = '                <h4><a href="'.$this->publicacion->url()."\">{$this->publicacion->nombre}</a></h4>";
        $a[] = "                <p>{$this->publicacion->descripcion}</p>";
        $a[] = "                <p class=\"pull-left autor\">{$this->publicacion->autor}</p>";
        $a[] = '                <p class="pull-right leer-mas"><a href="'.$this->publicacion->url().'">Leer más</a></p>';
        $a[] = '              </div>';
        $a[] = '            </div>';
        // Entregar
        return implode("\n", $a);
    } // html

} // Clase Breve

?>
