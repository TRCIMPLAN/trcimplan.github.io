<?php
/*
 * SMIbeta - Lengüeta
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
 * Clase Lengueta
 */
class Lengueta {

    public $clave;                        // Texto único que identifica a la lengüeta
    public $padre_identificador;          // Texto único que identifica al grupo de lengüetas
    public $etiqueta;                     // Texto que va a aparecer en la lengüeta
    public $contenido;                    // Mixto, puede ser texto, un objeto o un arreglo de objetos
    public $js;                           // Texto, javascript
    public $es_activa          = true;    // Booleano, verdadero si es la pestaña activa
    public $necesita_activador = false;   // Booleano, es visto por el metodo javascript en Lenguetas
    protected $digerido_di     = array(); // Si contenido es o son objetos, acumularemos los identificadores
    protected $digerido_html   = array(); // Si contenido es o son objetos, acumularemos el HTML
    protected $digerido_js     = array(); // Si contenido es o son objetos, acumularemos el javascript
    protected $he_digerido     = false;   // Bandera

    /**
     * Constructor
     *
     * @param string Clave
     * @param string Etiqueta
     * @param mixed  Contenido, opcional
     * @param string Javascript, opcional
     */
    public function __construct($in_clave, $in_etiqueta, $in_contenido='', $in_javascript='') {
        // Parámetros
        $this->clave     = $in_clave;
        $this->etiqueta  = $in_etiqueta;
        $this->contenido = $in_contenido;
        $this->js        = $in_js;
    } // constructor

    /**
     * Digerir
     */
    protected function digerir() {
        // Si ya ha digerido, no hace nada
        if ($this->he_digerido) {
            return;
        }
        // Si es arreglo de instancias o es una instancia
        if (is_array($this->contenido) && (count($this->contenido) > 0)) {
            foreach ($this->contenido as $instancia) {
                $this->digerido_html[] = $instancia->html();
                $this->digerido_js[]   = $instancia->javascript();
                if ($instancia->identificador != '') {
                    $this->digerido_di[]      = $instancia->identificador;
                    $this->necesita_activador = true;
                }
            }
        } elseif (is_object($this->contenido)) {
            $this->digerido_html[] = $this->contenido->html();
            $this->digerido_js[]   = $this->contenido->javascript();
            if ($this->contenido->identificador != '') {
                $this->digerido_di[]      = $this->contenido->identificador;
                $this->necesita_activador = true;
            }
        }
        // Cambiar bandera
        $this->he_digerido = true;
    } // digerir

    /**
     * Pestaña HTML
     *
     * @return string HTML
     */
    public function pestana_html() {
        // Digerir
        $this->digerir();
        // Si no hay clave
        // Si no hay etiqueta
        // Si es la activa
        if ($this->es_activa) {
            $li_tag = '<li class="active">';
        } else {
            $li_tag = '<li>';
        }
        // Si hay identificadores
        if (count($this->digerido_di) > 0) {
            $data_identifier = sprintf(' data-identifier="%s"', implode(',', $this->digerido_di));
        } else {
            $data_identifier = '';
        }
        // Entregar
        return "    $li_tag<a href=\"#{$this->clave}\" data-toggle=\"tab\"{$data_identifier}>{$this->etiqueta}</a></li>";
    } // pestana_html

    /**
     * Interior HTML
     *
     * @return string HTML
     */
    public function interior_html() {
        // Digerir
        $this->digerir();
        // En este arreglo acumularemos la entrega
        $a = array();
        // Si es la activa
        if ($this->es_activa) {
            $a[] = sprintf('    <div class="tab-pane active" id="%s">', $this->clave);
        } else {
            $a[] = sprintf('    <div class="tab-pane" id="%s">', $this->clave);
        }
        // Si no hay contenido
        if (count($this->digerido_html) > 0) {
            $a[] = '      '.implode("\n      ", $this->digerido_html);
        } elseif (is_string($this->contenido) && ($this->contenido != '')) {
            $a[] = '      '.$this->contenido;
        } else {
            $a[] = '      <p><b>Aviso:</b> Esta lengüeta NO tiene contenido.</p>';
        }
        $a[] = '    </div>';
        // Entregar HTML
        return implode("\n", $a);
    } // interior_html

    /**
     * Javascript
     *
     * @return string Javascript
     */
    public function javascript() {
        // Acumularemos el javascript en este arreglo
        $a = array();
        // Si hay javascript
        foreach ($this->digerido_js as $js) {
            if ($js !== false) {
                $a[] = $js;
            }
        }
        if ($this->js != '') {
            $a[] = $this->js;
        }
        // Entregar javascript
        if (count($a) > 0) {
            $todo = implode("\n", $a);
            return <<<FINAL
// LENGUETA
$('#{$this->padre_identificador} a[href="#{$this->clave}"]').on('shown.bs.tab', function (e) {
$todo
});
FINAL;
        } else {
            return false;
        }
    } // javascript

} // Clase Lengueta

?>
