<?php
/*
 * SMIbeta - SMI Publicacion
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
 * Clase Publicacion
 */
class Publicacion extends \Configuracion\PublicacionConfig {

    // public $fecha;
    // public $autor;
    // public $aparece_en_pagina_inicial;
    public $nombre;               // Título completo de la publicación
    public $nombre_menu;          // Un título corto para el menú, si se omite, se copia el nombre
    public $directorio;           // Directorio donde está guardada la publicación completa
    public $archivo;              // El nombre del archivo para la publicación
    public $descripcion;          // Descripción del sitio o la página
    public $imagen_previa;        // Ruta relativa a un archivo de imagen para la vista previa a compartir en redes sociales
    public $claves;               // Claves que ayuden a los buscadores
    public $categorias = array(); // Arreglo con las categorías de la publicación.
    public $contenido;            // Contenido de la publicación. Puede tener una línea con <!-- break --> para separar la parte breve.
    public $javascript;           // Código Javascript. Debe estar aparte para ponerlo al final de la página.
    public $en_raiz = false;      // Verdadero si el archivo va a la raiz del sitio web. Debe ser verdadero cuando se hacen las páginas de inicio.
    public $en_otro = false;      // Verdadero si el archivo va a OTRO lugar como al directorio autores, categorias, etc.

    /**
     * Breve Raíz HTML
     *
     * @return string Código HTML
     */
    public function breve_raiz_html() {
    } // breve_raiz_html

    /**
     * Breve Otro HTML
     *
     * @return string Código HTML
     */
    public function breve_otro_html() {
    } // breve_otro_html

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '<article>';
        $a[] = '  <header>';
        $a[] = "    <h1>{$this->nombre}</h1>";
        $a[] = "    <p class=\"autor-fecha\">Por {$this->autor}, {$this->fecha}</p>";
        $a[] = '  </header>';
        $a[] = $this->contenido;
        $a[] = '</article>';
        // Entregar
        return implode("\n", $a);
    } // html

} // Clase Publicacion

?>
