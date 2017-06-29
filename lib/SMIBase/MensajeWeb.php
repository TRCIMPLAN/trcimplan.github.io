<?php
/**
 * TrcIMPLAN SMIBase - MensajeWeb
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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
 * @package TrcIMPLANSitioWeb
 */

namespace SMIBase;

/**
 * Clase MensajeWeb
 */
class MensajeWeb implements SalidaWeb {

    protected $encabezado;
    protected $contenido;
    protected $tipo;

    /**
     * Definir mensaje aviso
     *
     * @param string Encabezado
     * @param string Contenido
     */
    public function definir_mensaje_aviso($encabezado, $contenido) {
        $this->encabezado = $encabezado;
        $this->contenido  = $contenido;
        $this->tipo       = 'aviso';
    } // definir_mensaje_aviso

    /**
     * Definir mensaje error
     *
     * @param string Encabezado
     * @param string Contenido
     */
    public function definir_mensaje_error($encabezado, $contenido) {
        $this->encabezado = $encabezado;
        $this->contenido  = $contenido;
        $this->tipo       = 'error';
    } // definir_mensaje_error

    /**
     * Definir mensaje info
     *
     * @param string Encabezado
     * @param string Contenido
     */
    public function definir_mensaje_info($encabezado, $contenido) {
        $this->encabezado = $encabezado;
        $this->contenido  = $contenido;
        $this->tipo       = 'info';
    } // definir_mensaje_info

    /**
     * Definir mensaje tip
     *
     * @param string Encabezado
     * @param string Contenido
     */
    public function definir_mensaje_tip($encabezado, $contenido) {
        $this->encabezado = $encabezado;
        $this->contenido  = $contenido;
        $this->tipo       = 'tip';
    } // definir_mensaje_tip

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumular
        $a = array();
        switch ($this->tipo) {
            case 'error':
                $a[] = '<div class="alert alert-danger">';
                break;
            case 'aviso':
                $a[] = '<div class="alert alert-warning">';
                break;
            case 'info':
                $a[] = '<div class="alert alert-success">';
                break;
            case 'tip':
                $a[] = '<div class="alert alert-info">';
        }
        if (is_string($this->encabezado) && ($this->encabezado != '')) {
            $a[] = "  <h4>{$this->encabezado}</h4>";
        }
        if (is_object($this->contenido) && ($this->contenido instanceof SalidaWeb)) {
            $a[] = $this->contenido->html();
        } elseif (is_string($this->contenido) && ($this->contenido != '')) {
            $a[] = $this->contenido;
        }
        $a[] = "</div>";
        // Entregar
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        if (is_object($this->contenido) && ($this->contenido instanceof SalidaWeb)) {
            return $this->contenido->html();
        } else {
            return NULL;
        }
    } // javascript

} // Clase MensajeWeb

?>
