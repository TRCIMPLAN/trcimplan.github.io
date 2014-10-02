<?php
/*
 * SMIbeta - Lengüetas
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
 * Clase Lenguetas
 */
class Lenguetas {

    public $identificador;             // Texto identificador de este grupo de lengüetas
    public $activa;                    // Texto, clave de la lengüeta activa
    protected $lenguetas    = array(); // Arreglo con los contenidos
    protected $clave_ultima;           // Última clave agregada, le sirve a agregar_javascript

    /**
     * Constructor
     */
    public function __construct() {
        // Tomar del url 'accion' es la lengüeta activa
        if ($_GET['accion'] != '') {
            $this->activa = $_GET['accion'];
        }
        // Definir caracteres al azar
        $primera = ord('a');
        $ultima  = ord('z');
        $c = array();
        for ($i=0; $i<$in_cantidad; $i++) {
            $c[] = chr(rand($primera, $ultima));
        }
        // Definir identificador
        $this->identificador = "lenguetas-".implode('', $c);
    } // constructor

    /**
     * Agregar una pestaña
     *
     * @param string Clave. Si contiene el texto 'Mapa' se agregará javascript para tal.
     * @param string Etiqueta
     * @param mixed  Contenido. Puede ser texto o una instancia con html(), javascript() e identificador
     */
    public function agregar($in_clave, $in_etiqueta, $in_contenido) {
        // Si hubo una lengueta antes, ya no es la activa
        if (($this->activa != '') && is_object($this->lenguetas[$this->activa])) {
            $this->lenguetas[$this->activa]->es_activa = false;
        }
        // Ahora es esta
        $this->activa = $in_clave;
        // Acumular
        $this->lenguetas[$this->activa] = new Lengueta($in_clave, $in_etiqueta, $in_contenido);
        // Se pasa el identificador
        $this->lenguetas[$this->activa]->padre_identificador = $this->identificador;
    } // agregar

    /**
     * Agregar Javascript
     *
     * @param string Javascript
     */
    public function agregar_javascript($in_js) {
        // A la lengüeta activa se le pasa el javascript
        if (is_string($in_js) && ($in_js != '')) {
            $this->lenguetas[$this->activa]->js = $in_js;
        }
    } // agregar_javascript

    /**
     * Definir activa
     *
     * @param string Clave de la lengüeta activa. Si es nulo, se establece como la última lengüeta agregada.
     */
    public function definir_activa($in_clave=false) {
        // Si no se dio clave
        if ($in_clave === false) {
            // Se toma la última que se haya agregado
            $claves       = array_keys($this->lenguetas);
            $this->activa = end($claves);
        } elseif (is_string($in_clave) && array_key_exists($in_clave, $this->lenguetas)) {
            // Se cambia sólo si ha sido agregada
            $this->activa = $in_clave;
        }
        // Poner todas las lengüetas como inactivas
        foreach ($this->lenguetas as $lengueta) {
            $lengueta->es_activa = false;
        }
        // Poner la lengüeta activa
        $this->lenguetas[$this->activa]->es_activa = true;
    } // definir_activa

    /**
     * HTML
     *
     * @return string HTML
     */
    public function html() {
        // En este arreglo juntaremos el HTML
        $a = array();
        // Pestañas
        $a[] = "  <ul class=\"nav nav-tabs lenguetas\" id=\"{$this->identificador}\">";
        foreach ($this->lenguetas as $lengueta) {
            $a[] = $lengueta->pestana_html();
        }
        $a[] = '  </ul>';
        // Interiores
        $a[] = '  <div class="tab-content">';
        foreach ($this->lenguetas as $lengueta) {
            $a[] = $lengueta->interior_html();
        }
        $a[] = '  </div>';
        // Entregar
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Javascript
     */
    public function javascript() {
        // De inicio sin activador
        $necesita_activador = false;
        // En este arreglo juntaremos el javascript
        $a = array();
        // Javascript de Twitter Bootstrap Tabs
        $a[] = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#{$this->identificador} a:first').tab('show')
});
FINAL;
        // Bucle por las lenguetas
        foreach ($this->lenguetas as $lengueta) {
            // Agregar javascript
            $js = $lengueta->javascript();
            if ($js !== false) {
                $a[] = $js;
            }
            // Si hay identificadores
            if ($lengueta->necesita_activador) {
                $necesita_activador = true;
            }
        }
        // Si una o más lenguetas necesitan el javascript activador
        if ($necesita_activador) {
            $a[] = <<<FINAL
FINAL;
        }
        // Entregar
        if (count($a) > 0) {
            return implode("\n", $a);
        } else {
            return false;
        }
    } // javascript

} // Clase Lenguetas

?>
