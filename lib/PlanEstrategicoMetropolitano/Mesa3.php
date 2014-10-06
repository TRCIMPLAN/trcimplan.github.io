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
namespace PlanEstrategicoMetropolitano;

/**
 * Clase Mesa3
 */
class Mesa3 extends \Base\Publicacion {

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
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre        = 'Plan Estratégico Metropolitano - Mesa 3';
     // $this->autor         = 'Autor';
        $this->fecha         = '2014-10-06';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo       = 'mesa-3';
     // $this->imagen_previa = 'mesa-3/imagen-previa.jpg';
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="mesa-3/encabezado.jpg">';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion   = '';
        $this->claves        = 'IMPLAN, Torreon';
        $this->categorias    = array('Plan Estratégico Metropolitano');
        // El nombre del directorio en la raíz del sitio donde se escribirá el archivo HTML.
        $this->directorio    = 'plan-estrategico-metropolitano';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu   = 'Plan Estratégico Metropolitano > Mesa 3';
        // El estado ordena a Imprenta e Índice si debe 'publicar', 'revisar' o 'ignorar'
        $this->estado        = 'ignorar';
        // El contenido HTML y el JavaScript
        $this->contenido     = <<<FINAL
<h3>Proyectos Estratégicos</h3>

<p>La última mesa consiste en la elaboración de los proyectos. Se efectuará a finales del 2014.</p>
FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase Mesa3

?>
