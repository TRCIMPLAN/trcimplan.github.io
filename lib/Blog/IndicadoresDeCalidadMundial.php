<?php
/**
 * TrcIMPLAN Sitio Web - Indicadores de Calidad Mundial
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
 * Clase IndicadoresDeCalidadMundial
 */
class IndicadoresDeCalidadMundial extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
      // Título, autor y fecha
        $this->nombre                     = 'Indicadores de Calidad Mundial';
        $this->autor                      = 'Lic. Luis A. Gutiérrez Arizpe';
        $this->fecha                      = '2017-03-01T16:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'indicadores-de-calidad-mundial';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Torreón está en proceso de certificación de la norma ISO 37120:2014 Desarrollo Sostenible de Ciudades por parte del Consejo Mundial de Información de las Ciudades (WCCD). Nuestra ciudad se medirá con los estándares internacionales que buscan elevar la calidad de vida de la población.';
        $this->claves                     = 'IMPLAN, Torreon, Certificacion, Ciudades, WCCD';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/IndicadoresDeCalidadMundial.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar');
        $this->fuentes                    = array('IMCO', 'IMPLAN', 'ONU-Habitat');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase IndicadoresDeCalidadMundial

?>
