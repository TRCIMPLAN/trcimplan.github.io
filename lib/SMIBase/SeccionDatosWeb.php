<?php
/**
 * TrcIMPLAN SMIBase - SeccionDatosWeb
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
 * Clase SeccionDatosWeb
 */
class SeccionDatosWeb implements SalidaWeb {

    protected $publicacion;       // Instancia de PublicacionWeb
    protected $tabla;             // Instancia de TablaWeb
    protected $preparado = FALSE; // Bandera

    /**
     * Constructor
     *
     * @param mixed Instancia de PublicacionWeb
     */
    public function __construct(PublicacionWeb $publicacion) {
        $this->publicacion = $publicacion;
    } // constructor

    /**
     * Preparar
     */
    private function preparar() {
        if (!$this->preparado) {
            // Definir identificador único para la tabla web
            $identificador = UtileriasParaFormatos::caracteres_para_clase('SMI Datos '.$this->publicacion->nombre);
            // Preparar tabla web
            $this->tabla = new TablaWeb($identificador);
            $this->tabla->definir_estructura($this->publicacion->datos_estructura());
            $this->tabla->definir_panal($this->publicacion->datos());
            // Levantar la bandera
            $this->preparado = TRUE;
        }
    } // preparar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        $this->preparar();
        return $this->tabla->html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        $this->preparar();
        return $this->tabla->javascript();
    } // javascript

} // Clase SeccionDatosWeb

?>
