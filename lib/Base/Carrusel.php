<?php
/**
 * Plataforma de Conocimiento - Carrusel
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
 * Clase Carrusel
 */
class Carrusel {

    protected $id;
    protected $diapositivas;
    protected $contador = 0;

    /**
     * Constructor
     *
     * @param string ID cadena de texto que sera el ID del tag DIV
     */
    public function __construct($id) {
        $this->id = $id;
    } // constructor

    /**
     * Agregar Diapositiv
     *
     * @param string URL con la ruta a la imagen
     * @param string Texto alterno para la imagen
     * @param string Descripción opcional
     */
    public function agregar_diapositiva($url, $alt='', $descripcion='') {
        $this->diapositivas[] = array(
            'url'         => $url,
            'alt'         => $alt,
            'descripcion' => $descripcion);
        $this->contador++;
    } // agregar_diapositiva

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Validar que haya diapositivas
        if ($this->contador == 0) {
            throw new \Exception('Error en Carrusel: No hay diapositivas.');
        }
        // Acumular
        $indicators = array();
        $c          = 0;
        foreach ($this->diapositivas as $d) {
            if ($c == 0) {
                $indicators[] = "    <li data-target=\"#{$this->id}\" data-slide-to=\"$c\" class=\"active\"></li>";
            } else {
                $indicators[] = "    <li data-target=\"#{$this->id}\" data-slide-to=\"$c\"></li>";
            }
            $c++;
        }
        $carusel_indicators = implode("\n", $indicators);
        // Acumular
        $slides = array();
        $c      = 0;
        foreach ($this->diapositivas as $d) {
            if ($c == 0) {
                if ($d['descripcion'] == '') {
                    $slides[] = <<<FINAL
    <div class="item active">
      <img src="{$d['url']}" alt="{$d['alt']}">
    </div>
FINAL;
                } else {
                    $slides[] = <<<FINAL
    <div class="item active">
      <img src="{$d['url']}" alt="{$d['alt']}">
      <div class="carousel-caption">
        <p>{$d['descripcion']}</p>
      </div>
    </div>
FINAL;
                }
            } else {
                if ($d['descripcion'] == '') {
                    $slides[] = <<<FINAL
    <div class="item">
      <img src="{$d['url']}" alt="{$d['alt']}">
    </div>
FINAL;
                } else {
                    $slides[] = <<<FINAL
    <div class="item">
      <img src="{$d['url']}" alt="{$d['alt']}">
      <div class="carousel-caption">
        <p>{$d['descripcion']}</p>
      </div>
    </div>
FINAL;
                }
            }
            $c++;
        }
        $carusel_slides = implode("\n", $slides);
        // Entregar
        return <<<FINAL
<div id="{$this->id}" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
$carusel_indicators
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
$carusel_slides
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#{$this->id}" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#{$this->id}" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

FINAL;
    } // html

} // Clase Carrusel

?>
