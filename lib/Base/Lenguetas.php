<?php
/**
 * Plataforma de Conocimiento - Lengüetas
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
 * Clase Lenguetas
 *
 * Sirve para organizar contenido en Toggleable Tabs http://getbootstrap.com/javascript/#tabs
 *
 * Ejemplo:
 *   $lenguetas = new \Base\Lenguetas('QGISInstalacionDesdeFuentes');
 *   $lenguetas->agregar('qgis1', 'Preámbulo', \Base\Funciones::cargar_archivo_markdown('lib/Apuntes/QGISInstalacionDesdeFuentes01.md'));
 *   $lenguetas->agregar('qgis2', 'Aplicabilidad y definiciones', \Base\Funciones::cargar_archivo_markdown('lib/Apuntes/QGISInstalacionDesdeFuentes02.md'));
 *   $lenguetas->agregar('qgis3', 'Copia literal', \Base\Funciones::cargar_archivo_markdown('lib/Apuntes/QGISInstalacionDesdeFuentes03.md'));
 *   $lenguetas->definir_activa();
 *   $this->contenido  = $lenguetas->html();
 *   $this->javascript = $lenguetas->javascript();
 */
class Lenguetas {

    public $identificador;             // Texto identificador de este grupo de Lengüetas
    public $activa;                    // Texto, clave de la Lengüeta activa
    protected $lenguetas    = array(); // Arreglo con instancias de Lengueta
    protected $clave_ultima;           // Última clave agregada, le sirve a agregar_javascript

    /**
     * Constructor
     *
     * @param string Opcional, texto identificador único de estas Lengüetas, si no se da se elabora con caracteres aleatorios
     */
    public function __construct($identificador) {
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
            $this->identificador = "lenguetas-".implode('', $c);
        }
    } // constructor

    /**
     * Agregar una pestaña
     *
     * @param string Texto único que identifica al acordeón
     * @param string Etiqueta del acordeón
     * @param mixed  Contenido. Puede ser texto o una instancia con html(), javascript() e identificador
     * @param string Opcional. Código javascript
     */
    public function agregar($clave, $etiqueta, $contenido='', $javascript='') {
        // Si hubo una lengueta antes, ya no es la activa
        if (($this->activa != '') && is_object($this->lenguetas[$this->activa])) {
            $this->lenguetas[$this->activa]->es_activa = false;
        }
        // Ahora es esta
        $this->activa = $clave;
        // Acumular
        $this->lenguetas[$this->activa] = new Lengueta($clave, $etiqueta, $contenido, $javascript);
        // Se pasa el identificador
        $this->lenguetas[$this->activa]->padre_identificador = $this->identificador;
    } // agregar

    /**
     * Agregar Javascript
     *
     * @param string Código javascript para la última lengüeta
     */
    public function agregar_javascript($javascript) {
        if (($this->activa != '') && is_string($javascript) && ($javascript != '')) {
            $this->lenguetas[$this->activa]->javascript = $javascript;
        }
    } // agregar_javascript

    /**
     * Definir activa
     *
     * @param string Clave de la lengüeta activa. Si es nulo, se establece como la primer lengüeta agregada.
     */
    public function definir_activa($clave=false) {
        // Si no se dio clave
        if ($clave === false) {
            // Se toma la primer clave
            $claves       = array_keys($this->lenguetas);
            $this->activa = current($claves);
        } elseif (is_string($clave) && array_key_exists($clave, $this->lenguetas)) {
            // Se cambia sólo si ha sido agregada
            $this->activa = $clave;
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
        // Acumular las pestañas
        $a[] = sprintf('  <ul class="nav nav-tabs lenguetas" id="%s">', $this->identificador);
        foreach ($this->lenguetas as $lengueta) {
            $a[] = $lengueta->pestana_html();
        }
        $a[] = '  </ul>';
        // Acumular los interiores
        $a[] = '  <div class="tab-content lengueta-contenido">';
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
        // En este arreglo juntaremos el javascript
        $a = array();
        // Bucle por las lenguetas
        foreach ($this->lenguetas as $lengueta) {
            $javascript = $lengueta->javascript();
            if ($javascript !== false) {
                $a[] = $javascript;
            }
        }
        // Con jquery se declara que es la primer lengüeta la que se muestra
        $a[] = sprintf('$(document).ready(function(){ $(\'#%s a:first\').tab(\'show\') });', $this->identificador);
        // Entregar
        if (count($a) > 0) {
            return implode("\n", $a);
        } else {
            return false;
        }
    } // javascript

} // Clase Lenguetas

?>
