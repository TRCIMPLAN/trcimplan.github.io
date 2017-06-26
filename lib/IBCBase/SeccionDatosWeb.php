<?php
/**
 * TrcIMPLAN IBCBase - SeccionDatosWeb
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
 * Clase SeccionDatosWeb
 */
class SeccionDatosWeb implements SalidaWeb {

    protected $publicacion_ficha;           // Instancia de PublicacionWeb
    protected $acordeones;                  // Instancia de AcordeonesWeb
    protected $preparado         = FALSE;   // Bandera
    const     IDENTIFICADOR      = 'Datos'; // ID único en la página web

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
            $this->acordeones = new AcordeonesWeb(self::IDENTIFICADOR);
            $this->acordeones->agregar('Demografía',                 new EjeDemografiaTablaWeb($this->publicacion_ficha), TRUE); // Acordeon abierto
        //  $this->acordeones->agregar('Educación',                  new EjeEducacionTablaWeb($this->publicacion_ficha));
            $this->acordeones->agregar('Características Económicas', new EjeCaracteristicasEconomicasTablaWeb($this->publicacion_ficha));
            $this->acordeones->agregar('Viviendas',                  new EjeViviendasTablaWeb($this->publicacion_ficha));
            $this->acordeones->agregar('Unidades Económicas',        new EjeUnidadesEconomicasTablaWeb($this->publicacion_ficha));
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
        return $this->acordeones->html();
    } // html

    /**
     * Javascript
     *
     * @return string Javascript
     */
    public function javascript() {
        $this->preparar();
        return $this->acordeones->javascript();
    } // javascript

} // Clase SeccionDatosWeb

?>
