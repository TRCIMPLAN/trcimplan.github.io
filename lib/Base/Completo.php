<?php
/*
 * SMIbeta - Completo
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
 * Clase Completo
 */
class Completo {

    public $publicacion; // Instancia de Publicacion

    /**
     * Constructor
     *
     * @param mixed Instancia de Publicacion
     */
    public function __construct($publicacion) {
        $this->publicacion = $publicacion;
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Validar
        if (!is_object($this->publicacion)) {
            throw new \Exception("Error en Completo, html: La propiedad publicacion no es una instancia.");
        }
        if (!($this->publicacion instanceof Publicacion)) {
            throw new \Exception("Error en Completo, html: La propiedad publicacion no es instancia de Publicacion.");
        }
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '<article>';
        $a[] = '  <header>';
        if ($this->publicacion->encabezado != '') {
            $a[] = $this->publicacion->encabezado;
            if ($this->publicacion->nombre != '') {
                $a[] = "    <h1 style=\"display:none;\">{$this->publicacion->nombre}</h1>";
            }
        } elseif ($this->publicacion->nombre != '') {
            $a[] = "    <h1>{$this->publicacion->nombre}</h1>";
        }
        $a[] = "    <p class=\"autor-fecha\">Por {$this->publicacion->autor}, {$this->publicacion->fecha}</p>";
        $a[] = '  </header>';
        $a[] = $this->publicacion->contenido;
        $a[] = '</article>';
        // Entregar
        return implode("\n", $a);
    } // html

} // Clase Completo

?>
