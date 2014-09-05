<?php
/*
 * SMIbeta - Zonificación Secundaria
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
namespace SIG;

/**
 * Clase ZonificacionSecundaria
 */
class ZonificacionSecundaria extends \Base\Publicacion {

    // public $fecha;                     // La fecha en forma de YYYY-MM-DD HH:MM, siendo así se ordena cronológicamente
    // public $autor;                     // El nombre o apodo a quien se le atribuye
    // public $aparece_en_pagina_inicial; // Verdadero si va aparecer en la página de inicio
    // public $imagen_previa;             // Ruta relativa a un archivo de imagen para la vista previa
    // public $nombre;                    // Título completo
    // public $nombre_menu;               // Un título corto. Debe coincidir con la etiqueta usada en Navegacion
    // public $directorio;                // Directorio donde se guardará la publicación completa
    // public $archivo;                   // El nombre del archivo para la publicación
    // public $descripcion;               // Descripción del sitio o la página
    // public $claves;                    // Claves que ayuden a los buscadores
    // public $categorias;                // Arreglo con las categorías de la publicación
    // public $encabezado;                // Opcional. Código HTML, por ejemplo con un tag img, para mostrar en la parte superior.
    // public $contenido;                 // Contenido código HTML de la publicación
    // public $javascript;                // Opcional. Código Javascript. Debe estar aparte para ponerlo al final de la página.
    // public $en_raiz;                   // Verdadero si el archivo va a la raiz del sitio web. Debe ser verdadero cuando se hacen las páginas de inicio.
    // public $en_otro;                   // Verdadero si el archivo va a OTRO lugar como al directorio autores, categorias, etc.

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-09-05';
     // $this->autor         = 'TrcIMPLAN';
        $this->nombre        = 'Zonificación Secundaria';
        $this->nombre_menu   = 'Zonificación Secundaria';
        $this->directorio    = 'sig';
        $this->archivo       = 'zonificacion-secundaria';
        $this->descripcion   = 'Mapa de la Zonificación Secundaria de Torreón Coahuila.';
        $this->claves        = 'IMPLAN, Torreon, Zonificación, SIG, GIS';
     // $this->imagen_previa = 'directorio/imagen-previa.jpg';
        $this->categorias    = array('SIG');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="directorio/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<iframe width='100%' height='520' frameborder='0' src='https://saemapas.cartodb.com/viz/e22ebd7e-2ee9-11e4-9351-0e230854a1cb/embed_map' allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase ZonificacionSecundaria

?>
