<?php
/**
 * TrcIMPLAN Sitio Web - PorUnaInfanciaPlenaYFeliz
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

namespace Blog;

/**
 * Clase PorUnaInfanciaPlenaYFeliz
 */
class PorUnaInfanciaPlenaYFeliz extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Por una infancia plena y feliz.';
        $this->autor                      = 'Lic. Olga Alejandra Noriega Aranda';
        $this->fecha                      = '2022-05-02T09:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'por-una-infancia-plena-y-feliz-mayo-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En relación al festejo del día del niño y de la niña el 30 de abril, se hace un contexto sobre el objetivo de esta celebración. De acuerdo a la Comisión Nacional de los Derechos Humanos de México. En 1924 se inició este festejo, con la finalidad de reafirmar los derechos de los infantes y fomentar un desarrollo pleno como seres humanos, derivado de una infancia feliz.';
        $this->claves                     = 'IMPLAN, Torreon, infancia, niño, festejo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PorUnaInfanciaPlenaYFeliz.md';
        // Para el Organizador
        $this->categorias                 = array('Población');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase PorUnaInfanciaPlenaYFeliz

?>
