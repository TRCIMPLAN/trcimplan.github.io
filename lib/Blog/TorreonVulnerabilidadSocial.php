<?php
/**
 * TrcIMPLAN Sitio Web - Torreón y la Vulnerabilidad Social
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
 * Clase TorreonVulnerabilidadSocial
 */
class TorreonVulnerabilidadSocial extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón y la Vulnerabilidad Social';
        $this->autor                      = 'Lic. Luis A. Gutiérrez Arizpe';
        $this->fecha                      = '2014-06-13T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-vulnerabilidad-social';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Análisis de los indicadores sobre la infancia, alimentación, educación, maternidad adolescente, adultos mayores, vulnerabilidad por la delincuencia y discapacidad.';
        $this->claves                     = 'IMPLAN, Torreon, Infancia, Alimentacion, Educacion, Maternidad Adolescente, Adultos Mayores, Vulnerabilidad, Delincuencia, Discapacidad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/TorreonVulnerabilidadSocial.html';
        // Para el Organizador
        $this->categorias                 = array('Grupos Vulnerables', 'Población');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase TorreonVulnerabilidadSocial

?>
