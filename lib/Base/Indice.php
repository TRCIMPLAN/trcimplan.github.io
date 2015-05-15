<?php
/*
 * TrcIMPLAN Sitio Web - Índice
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
 * Clase Indice
 */
class Indice extends Pagina {

    // public $encabezado;       // Opcional. Código HTML, por ejemplo con un tag img, para mostrar en la parte superior.
    // public $encabezado_color; // Opcional. Color de fondo del encabezado en Hex, por ejemplo: #008000
    // public $titulo;           // Título de la página
    // public $publicaciones;    // Arreglo con instancias de Publicacion

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Agregar el código HTML del encabezado
        $a[] = $this->encabezado_html();
        // Acumular
        foreach ($this->publicaciones as $p) {
            // Acumular
            $a[] = '      <div class="media breve">';
            // Si tiene imagen previa
            if ($p->imagen_previa != '') {
                $a[] = "        <a class=\"pull-left\" href=\"{$p->url()}\"><img class=\"media-object\" src=\"{$p->imagen_previa}\"></a>";
            } elseif ($p->icono != '') {
                // Tiene icono Font Awsome
                $a[] = "        <a class=\"pull-left {$p->icono} indice-icono\" href=\"{$p->url()}\"></a>";
            }
            $a[] = '        <div class="media-body">';
            $a[] = "          <h3 class=\"media-heading\"><a href=\"{$p->url()}\">{$p->nombre}</a></h3>";
            $a[] = "          <p>{$p->descripcion}</p>";
            $a[] = "          <p class=\"pull-left autor-fecha\">Por {$p->autor}, {$p->fecha_con_formato_humano()}</p>";
            $a[] = "          <p class=\"pull-right leer-mas\"><a href=\"{$p->url()}\">Leer más</a></p>";
            $a[] = '        </div>';
            $a[] = '      </div>';
        }
        // Entregar
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        return '';
    } // javascript

} // Clase Indice

?>
