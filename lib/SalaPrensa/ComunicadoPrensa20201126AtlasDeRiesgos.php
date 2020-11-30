<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20201126AtlasDeRiesgos
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
 * Clase ComunicadoPrensa20201126AtlasDeRiesgos
 */
class ComunicadoPrensa20201126AtlasDeRiesgos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN presenta el “Atlas Municipal de Riesgos de Torreón y Plataforma Digital del Sistema Municipal de Protección Civil”.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2020-11-27T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-11-27-atlas-de-riesgos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Instituto Municipal de Planeación y Competitividad de Torreón (IMPLAN), la consultora Soluciones SIG y la Coordinación Municipal de Protección Civil y Bomberos presentaron el “Atlas Municipal de Riesgos de Torreón y la Plataforma Digital del Sistema Municipal de Protección Civil”.';
        $this->claves                     = 'IMPLAN, Torreon, Atlas de riesgos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20201126AtlasDeRiesgos.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ComunicadoPrensa20201126AtlasDeRiesgos

?>
