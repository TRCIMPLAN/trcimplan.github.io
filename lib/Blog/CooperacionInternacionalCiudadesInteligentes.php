<?php
/**
 * TrcIMPLAN Sitio Web - CooperacionInternacionalCiudadesInteligentes
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
 * Clase CooperacionInternacionalCiudadesInteligentes
 */
class CooperacionInternacionalCiudadesInteligentes extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Cooperación Internacional para Convertir a Torreón en una Ciudad Inteligente.';
        $this->autor                      = 'Lic. Jesús Abraham Salazar Valadez';
        $this->fecha                      = '2023-02-13T09:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'cooperacion-internacional-ciudades-inteligentes-ene-2023';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Durante este año el Instituto Municipal de Planeación y Competitividad de Torreón recibirá un acompañamiento técnico por parte de la Fundación Friedrich Naumann para la Libertad, que es un organismo internacional de origen alemán con presencia en 60 países del mundo y entre sus objetivos se encuentra la formación democrática de ciudadanía responsable, la asesoría política de líderes y el diálogo político internacional.';
        $this->claves                     = 'IMPLAN, Torreon, internacional, ciudad, inteligente';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/CooperacionInternacionalCiudadesInteligentes.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array('Friedrich');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase CooperacionInternacionalCiudadesInteligentes

?>
