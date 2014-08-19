<?php
/*
 * SMIbeta - DESCRIPCION
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
namespace PaginasEstaticas;

/**
 * Clase Contacto
 */
class CLASE extends \Base\Publicacion {

    // public $fecha;                     // Fecha YYYY-MM-DD
    // public $autor;                     // Autor
    // public $aparece_en_pagina_inicial; // Verdadero si aparece en la página inicial
    // public $nombre;                    // Título completo de la publicación
    // public $nombre_menu;               // Un título corto para el menú, si se omite, se copia el nombre
    // public $directorio;                // Directorio donde está guardada la publicación completa
    // public $archivo;                   // El nombre del archivo para la publicación
    // public $descripcion;               // Descripción del sitio o la página
    // public $imagen_previa;             // Ruta relativa a un archivo de imagen para la vista previa a compartir en redes sociales
    // public $claves;                    // Claves que ayuden a los buscadores
    // public $categorias;                // Arreglo con las categorías de la publicación
    // public $contenido;                 // Contenido de la publicación
    // public $javascript;                // Código Javascript. Debe estar aparte para ponerlo al final de la página.

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-08-19';
        $this->nombre        = 'Contacto';
        $this->nombre_menu   = 'Contacto';
        $this->directorio    = 'contacto';
        $this->archivo       = 'index';
        $this->descripcion   = 'Formas de comunicación con el IMPLAN Torreón.';
        $this->imagen_previa = 'imagenes/implan.jpg';
        $this->claves        = 'IMPLAN, Torren';
        $this->categorias    = array();
        $this->contenido     = <<<FINAL
<h4>Redes sociales</h4>

<ul>
    <li>Twitter <a href="http://www.twitter.com/trcimplan" target="_blank">@trcimplan</a></li>
    <li>Facebook <a href="https://facebook.com/trcimplan" target="_blank">/trcimplan</a></li>
</ul>

<h4>Correos electrónicos</h4>

<ul>
    <li>Información general:<br />
      <a href="mailto:info@trcimplan.mx">info@trcimplan.mx</a></li>
    <li>Eduardo Holguín, Director General:<br />
      <a href="mailto:eholguin@trcimplan.mx">eholguin@trcimplan.mx</a></li>
    <li>Luis Campos, Director de Planeacíon Urbana:<br />
      <a href="mailto:lcampos@trcimplan.mx">lcampos@trcimplan.mx</a></li>
    <li>Rodrigo González, Director de Investigación Estratégica:<br />
      <a href="mailto:rgonzalez@trcimplan.mx">rgonzalez@trcimplan.mx</a></li>
</ul>

<h4>Teléfono</h4>

<ul>
    <li>(871) 500 7078</li>
</ul>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase CLASE

?>
