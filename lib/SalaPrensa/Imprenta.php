<?php
/*
 * SMIbeta - Sala de Prensa Imprenta
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
namespace SalaPrensa;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    // public $plantilla;
    // public $mensajes;
    // protected $publicaciones;
    // protected $plantillas;
    // protected $publicaciones_directorio; // Nombre del directorio dentro de lib que contiene los archivos con las publicaciones
    // protected $titulo;                   // Título a usar en la página con el índice
    // protected $descripcion;              // Descripción a usar en la página con el índice
    // protected $claves;                   // Claves a usar en la página con el índice
    // protected $directorio;               // Nombre del directorio en la raíz del sitio
    // protected $ruta;                     // Ruta al archivo HTML para el índice, por ejemplo 'eventos/index.html'
    // protected $nombre_menu;              // Etiqueta del menú que pondrá como opción activa

    /**
     * Constructor
     */
    public function __construct() {
        $this->publicaciones_directorio = 'SalaPrensa';
        $this->titulo                   = 'Sala de Prensa';
        $this->descripcion              = 'Comunicados de Prensa del IMPLAN Torreón.';
        $this->claves                   = 'IMPLAN, Torreon, Comunicados, Prensa, Sala';
        $this->directorio               = 'sala-prensa';
        $this->ruta                     = 'sala-prensa/index.html';
        $this->nombre_menu              = 'Sala de Prensa';
    } // constructor

} // Clase Imprenta

?>
