<?php
/**
 * Plataforma de Conocimiento - Lengüeta
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
 * Clase Lengueta
 */
class Lengueta {

    public $clave;                          // Texto único que identifica a la lengüeta
    public $padre_identificador;            // Texto único que identifica al grupo de lengüetas
    public $etiqueta;                       // Texto que va a aparecer en la lengüeta
    public $contenido;                      // Mixto, puede ser texto, un objeto o un arreglo de objetos
    public $javascript;                     // Texto, javascript
    public $es_activa              = true;  // Booleano, verdadero si es la pestaña activa
    public $necesita_activador     = false; // Booleano, es visto por el metodo javascript en Acordiones, cuando el contenido es una instancia y tiene un identificador es verdadero
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
     * Pestaña HTML
     *
     * @return string HTML
     */
    public function pestana_html() {
        // Digerir
        $this->digerir();
        // Pendiente validar si no hay clave
        // Pendiente validar si no hay etiqueta
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
        return sprintf('    %s<a href="#%s" data-toggle="tab"%s>%s</a></li>', $li_tag, $this->clave, $data_identifier, $this->etiqueta);
    } // pestana_html

    /**
     * Interior HTML
     *
     * @return string HTML
     */
    public function interior_html() {
        // Digerir
        $this->digerir();
        // Inicializar las propiedades
        $this->digerido_di         = array();
        $this->digerido_html       = array();
        $this->digerido_javascript = array();
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
            // NO hay javascript, entregar falso
            return false;
        }
    } // javascript

} // Clase Lengueta

?>
