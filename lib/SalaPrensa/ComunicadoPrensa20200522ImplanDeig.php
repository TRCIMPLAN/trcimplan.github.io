<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20200522ImplanDeig
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

namespace SalaPrensa;

/**
 * Clase ComunicadoPrensa20200522ImplanDeig
 */
class ComunicadoPrensa20200522ImplanDeig extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN y Desarrollo Económico preparan proyecto para impulsar las inversiones en Torreón';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2020-05-22T00:30';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-05-22-comunicado-implan-deig';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Instituto Municipal de Planeación y Competitividad de Torreón (IMPLAN) a través de la dirección de Investigación Estratégica y en conjunto con la Dirección General de Desarrollo Económico e Innovación Gubernamental (DEIG), realizan la investigación y diseño del documento para inversionistas denominado Brochure Invest in Torreón, así como el diseño y desarrollo de un sitio web.';
        $this->claves                     = 'IMPLAN, Torreon, desarrollo economico, inversionistas';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20200522ImplanDeig.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ComunicadoPrensa20200522ImplanDeig

?>
