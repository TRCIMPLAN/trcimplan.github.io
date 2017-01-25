<?php
/**
 * Plataforma de Conocimiento - Schema
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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
 * @package PlataformaDeConocimiento
 */

namespace Base;

/**
 * Clase Abstracta Schema
 */
abstract class Schema {

    public $onTypeProperty; // Text. Use when this item is part of another one.
    public $identation;     // Integer. Level of identation (beautiful code).
    public $id_property;    // Text. id property for article/div tag. Use to aply a unique CSS style.
    public $class_property; // Text. class property for div tag. Use to aply a general CSS style.
    public $is_article;     // Boolean. Use true for enclose with <article>.
    public $is_visible;     // Boolean. Use true for use invisible meta tags.

    /**
     * Constructor
     */
    public function __construct() {
        $this->identation = 2;
        $this->is_article = TRUE;
        $this->is_visible = TRUE;
    } // constructor

    /**
     * Itemscope start
     *
     * @param  string Itemscope
     * @return string Código HTML
     */
    protected function itemscope_start($itemscope) {
        if ($this->id_property != '') {
            $id = " id=\"{$this->id_property}\"";
        }
        // Si es visible
        if ($this->is_visible) {
            if ($this->class_property != '') {
                $class = " class=\"{$this->class_property}\"";
            } else {
                $class = "";
            }
            $style = "";
        } else {
            $class = "";
            $style = " style=\"display:none\"";
            $this->is_article = FALSE; // Si es invisible, NO será un artículo
        }
        // Si está anidado
        if ($this->onTypeProperty != '') {
            if ($this->is_article) {
                return "<article{$id}><div{$class}{$style} itemprop=\"{$this->onTypeProperty}\" {$itemscope}>";
            } else {
                return "<div{$id}{$class}{$style} itemprop=\"{$this->onTypeProperty}\" {$itemscope}>";
            }
        } else {
            $spaces = str_repeat('  ', $this->identation);
            if ($this->is_article) {
                return "<article{$id}><div{$class}{$style} {$itemscope}>";
            } else {
                return "<div{$id}{$class}{$style} {$itemscope}>";
            }
        }
    } // itemscope_start

    /**
     * Itemscope end
     *
     * @return string Código HTML
     */
    protected function itemscope_end() {
        if ($this->is_article) {
            return '</div></article>';
        } else {
            return '</div>';
        }
    } // itemscope_end

    /**
     * Clean HTML
     *
     * A partir de un arreglo de códigos HTML elimina los vacíos
     *
     * @param  array  Arreglo con códigos HTML
     * @return string Código HTML
     */
    protected function clean_html($in_arreglo) {
        // Si NO hay código HTML
        if (count($in_arreglo) == 0) {
            return '<!-- AVISO: Schema sin contenido HTML --';
        }
        // Retirar los elementos vacíos
        $a = array();
        foreach ($in_arreglo as $c) {
            if (is_string($c) && (trim($c) != '')) {
                $a[] = $c;
            }
        }
        // Si NO hay código HTML
        if (count($a) == 0) {
            return '<!-- AVISO: Schema sin contenido HTML --';
        }
        // Entregar
        $spaces = str_repeat('  ', $this->identation + 1);
        return $spaces.implode("\n$spaces", $a);
    } // clean_html

    /**
     * HTML
     *
     * @return string Código HTML
     */
    abstract function html();

    /**
     * Javascript
     *
     * @return String Texto vacío porque no hay Javascript
     */
    public function javascript() {
        return '';
    } // javascript

} // Clase Abstracta Schema

?>
