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
class Indice {

    public $encabezado;       // Opcional. Código HTML, por ejemplo con un tag img, para mostrar en la parte superior.
    public $encabezado_color; // Opcional. Color de fondo del encabezado en Hex, por ejemplo: #008000
    public $titulo;           // Título de la página
    public $publicaciones;    // Arreglo con instancias de Publicacion

    /**
     * Constructor
     *
     * @param array Arreglo con instancias de Publicacion
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
        // Si el encabezado está definido
        if ($this->encabezado != '') {
            // Se pone el código HTML del encabezado
            $a[] = $this->encabezado;
            // Y el título de la página es invisible
            if ($this->titulo != '') {
                $a[] = "      <h1 style=\"display:none;\">{$this->titulo}</h1>";
            }
        } elseif ($this->titulo != '') {
            // Hay título. Si hay icono definido en Navegación
            $navegacion_config = new \Configuracion\NavegacionConfig();
            if (array_key_exists($this->titulo, $navegacion_config->iconos)) {
                $encabezado = sprintf('<i class="%s encabezado-icono"></i> %s', $navegacion_config->iconos[$this->titulo], $this->titulo);
            } else {
                $encabezado = $this->titulo;
            }
            // Acumular
            if ($this->encabezado_color != '') {
                $a[] = "      <div class=\"encabezado\" style=\"background-color:{$this->encabezado_color};\">";
            } else {
                $a[] = '      <div class="encabezado">';
            }
            $a[] = "        <span><h1>$encabezado</h1></span>";
            $a[] = '      </div>';
        }
        // Acumular
        foreach ($this->publicaciones as $p) {
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
            $a[] = '            <div class="media breve">';
            if ($p->imagen_previa != '') {
                $a[] = "              <a class=\"pull-left\" href=\"{$p->url()}\"><img class=\"media-object\" src=\"{$p->imagen_previa}\"></a>";
            } elseif ($p->icono != '') {
                $a[] = "              <a class=\"pull-left {$p->icono} indice-icono\" href=\"{$p->url()}\"></a>";
            }
            $a[] = '              <div class="media-body">';
            $a[] = "                <h3 class=\"media-heading\"><a href=\"{$p->url()}\">{$p->nombre}</a></h3>";
            $a[] = "                <p>{$p->descripcion}</p>";
            $a[] = "                <p class=\"pull-left autor-fecha\">Por {$p->autor}, {$p->fecha_con_formato_humano()}</p>";
            $a[] = "                <p class=\"pull-right leer-mas\"><a href=\"{$p->url()}\">Leer más</a></p>";
            $a[] = '              </div>';
            $a[] = '            </div>';
        }
        // Entregar
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        return false;
    } // javascript

} // Clase Indice

?>
