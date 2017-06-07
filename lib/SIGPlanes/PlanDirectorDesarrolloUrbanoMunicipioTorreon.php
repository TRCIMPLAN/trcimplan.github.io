<?php
/**
 * TrcIMPLAN Sitio Web - PlanDirectorDesarrolloUrbanoMunicipioTorreon
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

namespace SIGPlanes;

/**
 * Clase PlanDirectorDesarrolloUrbanoMunicipioTorreon
 */
class PlanDirectorDesarrolloUrbanoMunicipioTorreon extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Plan Director de Desarrollo Urbano de Torreón Coahuila';
        $this->fecha                     = '2015-01-01T08:00';
        // El nombre del archivo a crear
        $this->archivo                   = ''; // No hay archivo HTML a crear, porque es un vínculo de descarga
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Establecer una metrópoli articulada y coherente con equipamiento e infraestructura para la regeneración urbana.';
        $this->claves                    = 'IMPLAN, Torreon, Plan, Director, Desarrollo, Urbano, Municipio';
        // Para el Organizador
        $this->categorias                = array('Gobierno', 'Infraestructura');
        $this->fuentes                   = array('IMPLAN');
        $this->regiones                  = array('Torreón');
        // Imágenes
        $this->imagen                    = 'plan-director-de-desarrollo-urbano-de-municipio-de-torreon/imagen.png';
        $this->imagen_previa             = 'plan-director-de-desarrollo-urbano-de-municipio-de-torreon/imagen-previa.png';
        // URL de destino
        $this->url                       = 'http://www.trcimplan.gob.mx/sig-planes/plan-director-de-desarrollo-urbano-de-municipio-de-torreon.pdf';
        $this->url_etiqueta              = 'Descargar PDF 4.1 MB';
    } // constructor

} // Clase PlanDirectorDesarrolloUrbanoMunicipioTorreon

?>
