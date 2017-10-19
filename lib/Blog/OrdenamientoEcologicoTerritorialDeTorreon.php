<?php
/**
 * TrcIMPLAN Sitio Web - OrdenamientoEcologicoTerritorialDeTorreon
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
 * Clase OrdenamientoEcologicoTerritorialDeTorreon
 */
class OrdenamientoEcologicoTerritorialDeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ordenamiento Ecológico Territorial de Torreón';
        $this->autor                      = 'Q.F.B. Susana Estens de la Garza';
        $this->fecha                      = '2017-10-19T16:40';
        // El nombre del archivo a crear
        $this->archivo                    = 'ordenamiento-ecologico-territorial-de-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Ordenamiento Ecológico Territorial es un instrumento de política ambiental que le permitirá al municipio de Torreón calificar para futuros proyectos financiados por el gobierno federal.';
        $this->claves                     = 'IMPLAN, Torreon, Ordenamiento, Ecologico, Territorial';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/OrdenamientoEcologicoTerritorialDeTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Gobierno', 'Recursos Naturales');
        $this->fuentes                    = array('SEMARNAT');
        $this->regiones                   = array('Torreón', 'La Laguna');
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
    } // constructor

} // Clase OrdenamientoEcologicoTerritorialDeTorreon

?>
