<?php
/**
 * TrcIMPLAN IBCBase - SeccionMapasWeb
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

namespace IBCBase;

/**
 * Clase SeccionMapasWeb
 */
class SeccionMapasWeb implements SalidaWeb {

    protected $publicacion_ficha;           // Instancia de PublicacionWeb
    protected $mapas;                       // Instancia de GeoLimitesMapaWeb
    protected $preparado         = FALSE;   // Bandera
    const     IDENTIFICADOR      = 'Mapas'; // ID único en la página web

    /**
     * Constructor
     *
     * @param mixed Instancia de PublicacionWeb
     */
    public function __construct(PublicacionWeb $publicacion_ficha) {
        $this->publicacion_ficha = $publicacion_ficha;
    } // constructor

    /**
     * Preparar
     */
    private function preparar() {
        if (!$this->preparado) {
            $this->mapas     = new GeoLimitesMapaWeb($this->publicacion_ficha);
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
        return $this->mapas->html();
    } // html

    /**
     * Javascript
     *
     * @return string Javascript
     */
    public function javascript() {
        $this->preparar();
        return $this->mapas->javascript();
    } // javascript

} // Clase SeccionMapasWeb

?>
