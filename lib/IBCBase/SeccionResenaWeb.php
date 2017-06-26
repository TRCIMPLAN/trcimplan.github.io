<?php
/**
 * TrcIMPLAN IBCBase - SeccionResenaWeb
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
 * Clase SeccionResenaWeb
 */
class SeccionResenaWeb implements SalidaWeb {

    protected $publicacion_ficha;            // Instancia de PublicacionWeb
    protected $resena_html;                  // Código HTML
    protected $preparado         = FALSE;    // Bandera
    const     IDENTIFICADOR      = 'Resena'; // ID único en la página web

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
            if ($this->publicacion_ficha->resena() == '') {
                $this->resena_html = '';
            } else {
                // Convertir markdown a HTML, poner clases en tablas y poner clases en imágenes
                $primero           = \Michelf\MarkdownExtra::defaultTransform($this->publicacion_ficha->resena());
                $segundo           = str_replace('<table>', '<table class="table table-hover table-bordered">', $primero);
                $this->resena_html = str_replace('<img src="', '<img class="img-responsive" src="', $segundo);
            }
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
        return $this->resena_html;
    } // html

    /**
     * Javascript
     *
     * @return string Javascript
     */
    public function javascript() {
        return '';
    } // javascript

} // Clase SeccionResenaWeb

?>
