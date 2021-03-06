<?php
/**
 * TrcIMPLAN Sitio Web - Torreón y su riqueza industrial
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
 * Clase TorreonYSuRiquezaIndustrial
 */
class TorreonYSuRiquezaIndustrial extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón y su riqueza industrial';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2016-04-25T09:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-y-su-riqueza-industrial';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Dirección de Desarrollo Económico y el IMPLAN han lanzado la Guía de Parques Industriales, que contiene información sobre la infraestructura que posee Torreón para recibir inversiones de clase mundial. Incluye además los principales indicadores económicos, demográficos y sociales de la región lagunera.';
        $this->claves                     = 'IMPLAN, Torreon, Zonas, Industriales, Parques, Guia, Desarrollo Economico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonYSuRiquezaIndustrial.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo', 'Empresas', 'Infraestructura', 'Sector Automotriz');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase TorreonYSuRiquezaIndustrial

?>
