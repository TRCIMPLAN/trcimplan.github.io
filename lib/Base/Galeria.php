<?php
/*
 * SMIbeta - Galería
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
 * Clase Galeria
 */
class Galeria {

    public $encabezado;    // Opcional. Código HTML, por ejemplo con un tag img, para mostrar en la parte superior.
    public $titulo;        // Título de la página
    public $publicaciones; // Arreglo con instancias de Publicacion

    /**
     * Constructor
     */
    public function __construct($publicaciones) {
        $this->publicaciones = $publicaciones;
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Validar
        if (!is_array($this->publicaciones)) {
            throw new \Exception("Error en Indice, html: La propiedad publicaciones no es un arreglo.");
        }
        if (count($this->publicaciones) == 0) {
            throw new \Exception("Error en Indice, html: La propiedad publicaciones no tiene datos.");
        }
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Encabezado y título
        if ($this->encabezado != '') {
            $a[] = $this->encabezado;
            if ($this->titulo != '') {
                $a[] = "        <h1 style=\"display:none;\">{$this->titulo}</h1>";
            }
        } elseif ($this->titulo != '') {
            $a[] = "        <h1>{$this->titulo}</h1>";
        }
        // Tabla inicia
        $a[] = '<div class="row">';
        // Bucle por Publicaciones
        foreach ($this->publicaciones as $p) {
            $a[] = '  <div class="col-xs-6 col-md-4 col-lg-3">';
            // Validar
            if (!is_object($p)) {
                throw new \Exception("Error en Indice, html: Una publicación no es una instancia.");
            }
            if (!($p instanceof Publicacion)) {
                throw new \Exception("Error en Indice, html: Una publicación no es una instancia de Publicacion.");
            }
            // Si el estado no es 'publicar', se salta
            if ($p->estado != 'publicar') {
                continue;
            }
            // Acumular
            $a[] = '            <div class="thumbnail galeria-thumbnail">';
            if ($p->imagen_previa != '') {
                $a[] = "              <a href=\"{$p->url()}\"><img class=\"img-thumbnail imagen-previa\" src=\"{$p->imagen_previa}\" alt=\"{$p->nombre}\"></a>";
            } elseif ($p->icono != '') {
                $a[] = "              <a class=\"{$p->icono} galeria-icono\" href=\"{$p->url()}\"></a>";
            }
            $a[] = '              <div class="caption">';
            $a[] = "                <p class=\"galeria-nombre\"><a href=\"{$p->url()}\">{$p->nombre}</a></p>";
            $a[] = '              </div>';
            $a[] = '            </div>';
            $a[] = '  </div>'; // col
        }
        // Tabla termina
        $a[] = '</div>'; // row
        // Entregar
        return implode("\n", $a)."\n";
    } // html

} // Clase Galeria

?>
