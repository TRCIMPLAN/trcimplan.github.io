<?php
/**
 * Plataforma de Conocimiento - Acordeon
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
 * Clase Acordeon
 */
class Acordeon {

    public $clave;                          // Texto único que identifica a la lengüeta
    public $padre_identificador;            // Texto único que identifica al grupo de lengüetas
    public $etiqueta;                       // Texto que va a aparecer en la lengüeta
    public $contenido;                      // Mixto, puede ser texto, un objeto o un arreglo de objetos
    public $javascript;                     // Texto, javascript
    public $es_activa              = true;  // Booleano, verdadero si es la pestaña activa
    public $necesita_activador     = false; // Booleano, es visto por el metodo javascript en Acordeones, cuando el contenido es una instancia y tiene un identificador es verdadero
    protected $digerido_di;                 // Si contenido es o son objetos, acumularemos los identificadores
    protected $digerido_html;               // Si contenido es o son objetos, acumularemos el HTML
    protected $digerido_javascript;         // Si contenido es o son objetos, acumularemos el javascript
    protected $he_digerido         = false; // Bandera

    /**
     * Constructor
     *
     * @param string Clave
     * @param string Etiqueta
     * @param mixed  Contenido, opcional
     * @param string Javascript, opcional
     */
    public function __construct($clave, $etiqueta, $contenido='', $javascript='') {
        // Parámetros
        $this->clave      = $clave;
        $this->etiqueta   = $etiqueta;
        $this->contenido  = $contenido;
        $this->javascript = $javascript;
    } // constructor

    /**
     * Digerir
     *
     * Como el contenido puede ser uno o más instancias, éstas son ejecutadas para obtener su HTML y Javascript
     */
    protected function digerir() {
        // Si ya ha digerido, no hace nada
        if ($this->he_digerido) {
            return;
        }
        // Inicializar las propiedades
        $this->digerido_di         = array();
        $this->digerido_html       = array();
        $this->digerido_javascript = array();
        // Si es arreglo de instancias o es una instancia
        if (is_array($this->contenido) && (count($this->contenido) > 0)) {
            foreach ($this->contenido as $instancia) {
                $this->digerido_html[]       = $instancia->html();
                $this->digerido_javascript[] = $instancia->javascript();
                if ($instancia->identificador != '') {
                    $this->digerido_di[]      = $instancia->identificador;
                    $this->necesita_activador = true;
                }
            }
        } elseif (is_object($this->contenido)) {
            $this->digerido_html[]       = $this->contenido->html();
            $this->digerido_javascript[] = $this->contenido->javascript();
            if ($this->contenido->identificador != '') {
                $this->digerido_di[]      = $this->contenido->identificador;
                $this->necesita_activador = true;
            }
        }
        // Cambiar bandera
        $this->he_digerido = true;
    } // digerir

    /**
     * Panel HTML
     *
     * @return string Código HTML
     */
    public function panel_html() {
        // Digerir
        $this->digerir();
        // Acumularemos el HTML en este arreglo
        $a = array();
        // Pendiente validar si no hay clave
        // Pendiente validar si no hay etiqueta
        // Definir variables
        $heading  = "heading{$this->clave}";
        $collapse = "collapse{$this->clave}";
        // Acumular
        $a[] = '  <div class="panel panel-default">';
        $a[] = sprintf('    <div class="panel-heading" role="tab" id="%s">', $heading); // headingOne
        $a[] = '      <h4 class="panel-title">';
        if ($this->es_activa) {
            $a[] = sprintf('        <a                   role="button" data-toggle="collapse" data-parent="#accordion" href="#%s" aria-expanded="true"  aria-controls="%s">', $collapse, $collapse);
        } else {
            $a[] = sprintf('        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#%s" aria-expanded="false" aria-controls="%s">', $collapse, $collapse);
        }
        $a[] = '          '.$this->etiqueta;
        $a[] = '        </a>';
        $a[] = '      </h4>';
        $a[] = '    </div>';
        if ($this->es_activa) {
            $a[] = sprintf('    <div id="%s" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="%s">', $collapse, $heading);
        } else {
            $a[] = sprintf('    <div id="%s" class="panel-collapse collapse"    role="tabpanel" aria-labelledby="%s">', $collapse, $heading);
        }
        $a[] = '      <div class="panel-body">';
        if (count($this->digerido_html) > 0) {
            $a[] = '        '.implode("\n", $this->digerido_html);
        } elseif (is_string($this->contenido) && ($this->contenido != '')) {
            $a[] = '        '.$this->contenido;
        } else {
            $a[] = '        <p><b>Aviso:</b> Este acordión NO tiene contenido.</p>';
        }
        $a[] = '      </div>';
        $a[] = '    </div>';
        $a[] = '  </div>';
        // Entregar HTML
        return implode("\n", $a);
    } // panel_html

    /**
     * Javascript
     *
     * @return string Javascript
     */
    public function javascript() {
        // Digerir
        $this->digerir();
        // Acumularemos el javascript en este arreglo
        $a = array();
        // Si hay javascript
        foreach ($this->digerido_javascript as $javascript) {
            if ($javascript !== false) {
                $a[] = $javascript;
            }
        }
        if ($this->javascript != '') {
            $a[] = $this->javascript;
        }
        // Entregar javascript
        if (count($a) > 0) {
            // Si está definido padre_identificador
            if (is_string($this->padre_identificador) && ($this->padre_identificador != '')) {
                // Se encapsulará el javascript en un proceso jquery para que se ejecute cuando se le de clic a la lengüeta
                return sprintf('$(\'#%s a[href="#%s"]\').on(\'shown.bs.tab\', function (e) { %s });',
                    $this->padre_identificador,
                    $this->clave,
                    implode("\n", $a));
            } else {
                // NO está definido padre_identificador así que se entrega tal cual
                return implode("\n", $a);
            }
        } else {
            return false;
        }
    } // javascript

} // Clase Acordeon

?>
