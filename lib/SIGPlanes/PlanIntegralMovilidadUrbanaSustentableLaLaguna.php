<?php
/**
 * TrcIMPLAN Sitio Web - PlanIntegralMovilidadUrbanaSustentableLaLaguna
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
 * Clase PlanIntegralMovilidadUrbanaSustentableLaLaguna
 */
class PlanIntegralMovilidadUrbanaSustentableLaLaguna extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Plan Integral de Movilidad Urbana Sustentable de La Laguna';
        $this->fecha                     = '2015-03-01T08:00';
        // El nombre del archivo a crear
        $this->archivo                   = ''; // No hay archivo HTML a crear, porque es un vínculo de descarga
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Conjunto de acciones para implementar las distintas formas de transporte sustentable: a pie, bicicleta y transporte público.';
        $this->claves                    = 'IMPLAN, Torreón, Plan, Movilidad, Urbana, Sustentable, La Laguna';
        // Para el Organizador
        $this->categorias                = array('Gobierno', 'Movilidad');
        $this->fuentes                   = array('IMPLAN');
        $this->regiones                  = array('Torreón');
        // Imágenes
        $this->imagen                    = 'estudio-plan-integral-movilidad-urbana-sustentable-laguna/imagen.png';
        $this->imagen_previa             = 'estudio-plan-integral-movilidad-urbana-sustentable-laguna/imagen-previa.png';
        // URL de destino
        $this->url                       = 'http://www.torreon.gob.mx/pdf/PIMUS_LAGUNA.pdf';
        $this->url_etiqueta              = 'Descargar PDF 33.7 MB';
    } // constructor

} // Clase PlanIntegralMovilidadUrbanaSustentableLaLaguna

?>
