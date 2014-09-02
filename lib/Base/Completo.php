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
     * Formato fecha
     *
     * @param  string Fecha en el formato de la base de datos YYYY-MM-DD
     * @return string Fecha en el formato DD/MM/YYYY
     */
    protected function formato_fecha($fecha) {
        $a = explode('-', $fecha);
        return sprintf('%02d/%02d/%04d', $a[2], $a[1], $a[0]);
    } // formato_fecha

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
        $a[] = "    <p class=\"autor-fecha\">Por {$this->publicacion->autor}, ".$this->formato_fecha($this->publicacion->fecha)."</p>";
        $a[] = '  </header>';
        $a[] = $this->publicacion->contenido;
        $a[] = '</article>';
        // Agregar botones para compartir en redes sociales
        $a[] = '<div class="contenido-social">';
        $a[] = '  <a href="https://twitter.com/share" class="twitter-share-button" data-via="trcimplan" data-lang="es">Twittear</a>';
     // $a[] = '  <iframe src="//www.facebook.com/plugins/like.php?href=---urlencode(link)---&amp;width=300&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=false&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:21px;" allowTransparency="true"></iframe>';
        $a[] = '</div>';
        // Entregar
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // Javascript para compartir en redes sociales
        return '!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");';
    } // javascript

} // Clase Completo

?>
