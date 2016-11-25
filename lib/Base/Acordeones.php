<?php
/**
 * Plataforma de Conocimiento - Acordeones
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
 * Clase Acordeones
 *
 * Sirve para organizar contenido en Accordion http://getbootstrap.com/javascript/#collapse
 *
 * Ejemplo:
 *   $acordeones = new \Base\Acordeones('QGISInstalacionDesdeFuentes');
 *   $acordeones->agregar('qgis1', 'Preámbulo', \Base\Funciones::cargar_archivo_markdown('lib/Apuntes/QGISInstalacionDesdeFuentes01.md'));
 *   $acordeones->agregar('qgis2', 'Aplicabilidad y definiciones', \Base\Funciones::cargar_archivo_markdown('lib/Apuntes/QGISInstalacionDesdeFuentes02.md'));
 *   $acordeones->agregar('qgis3', 'Copia literal', \Base\Funciones::cargar_archivo_markdown('lib/Apuntes/QGISInstalacionDesdeFuentes03.md'));
 *   $acordeones->definir_activa();
 *   $this->contenido  = $acordeones->html();
 *   $this->javascript = $acordeones->javascript();
 */
class Acordeones {

    public $identificador;             // Texto identificador de este grupo de Acordeones
    public $activa;                    // Texto, clave del Acordeon activo
    protected $acordeones   = array(); // Arreglo con instancias de Acordeon
    protected $clave_ultima;           // Última clave agregada, le sirve a agregar_javascript

    /**
     * Constructor
     *
     * @param string Opcional, texto identificador único de este Acordeón, si no se da se elabora con caracteres aleatorios
     */
    public function __construct($identificador='') {
        if ($identificador != '') {
            // Definir identificador con parámetro
            $this->identificador = $identificador;
        } else {
            // Definir identificador con caracteres aleatorios
            $primera = ord('a');
            $ultima  = ord('z');
            $c       = array();
            for ($i=0; $i<8; $i++) {
                $c[] = chr(rand($primera, $ultima));
            }
            $this->identificador = "acordeones-".implode('', $c);
        }
    } // constructor

    /**
     * Agregar un acordeón
     *
     * @param string Texto único que identifica al acordeón
     * @param string Etiqueta del acordeón
     * @param mixed  Contenido. Puede ser texto o una instancia con html(), javascript() e identificador
     * @param string Opcional. Código javascript
     */
    public function agregar($clave, $etiqueta, $contenido='', $javascript='') {
        // Si hubo una lengueta antes, ya no es la activa
        if (($this->activa != '') && is_object($this->acordeones[$this->activa])) {
            $this->acordeones[$this->activa]->es_activa = false;
        }
        // Ahora es esta
        $this->activa = $clave;
        // Acumular
        $this->acordeones[$this->activa] = new Acordeon($clave, $etiqueta, $contenido, $javascript);
        // Se pasa el identificador
        $this->acordeones[$this->activa]->padre_identificador = $this->identificador;
    } // agregar

    /**
     * Agregar Javascript
     *
     * @param string Código javascript para el último acordeón
     */
    public function agregar_javascript($javascript) {
        if (($this->activa != '') && is_string($javascript) && ($javascript != '')) {
            $this->acordeones[$this->activa]->javascript = $javascript;
        }
    } // agregar_javascript

    /**
     * Definir activa
     *
     * @param string Clave del acordeón activo. Si es nulo, se establece como el primer acordeón agregado.
     */
    public function definir_activa($clave=false) {
        // Si no se dio clave
        if ($clave === false) {
            // Se toma la última que se haya agregado
            $claves       = array_keys($this->acordeones);
            $this->activa = current($claves);
        } elseif (is_string($clave) && array_key_exists($clave, $this->acordeones)) {
            // Se cambia sólo si ha sido agregada
            $this->activa = $clave;
        }
        // Poner todas las lengüetas como inactivas
        foreach ($this->acordeones as $acordeon) {
            $acordeon->es_activa = false;
        }
        // Poner la lengüeta activa
        $this->acordeones[$this->activa]->es_activa = true;
    } // definir_activa

    /**
     * HTML
     *
     * @return string HTML
     */
    public function html() {
        // En este arreglo juntaremos el HTML
        $a = array();
        // Acumular
        $a[] = sprintf('<div class="panel-group" id="%s" role="tablist" aria-multiselectable="true">', $this->identificador);
        foreach ($this->acordeones as $acordeon) {
            $a[] = $acordeon->panel_html();
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
        // En este arreglo juntaremos el javascript
        $a = array();
        // Bucle por los acordeones
        foreach ($this->acordeones as $acordeon) {
            $javascript = $acordeon->javascript();
            if ($javascript !== false) {
                $a[] = $javascript;
            }
        }
        // Con jquery se declara que es el primer acordeón el que se muestra
        // $a[] = sprintf('$(document).ready(function(){ $(\'#%s a:first\').tab(\'show\') });', $this->identificador);
        // Entregar
        if (count($a) > 0) {
            return implode("\n", $a);
        } else {
            return false;
        }
    } // javascript

} // Clase Acordeones

?>
