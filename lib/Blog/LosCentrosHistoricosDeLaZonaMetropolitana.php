<?php
/**
 * TrcIMPLAN Sitio Web - LosCentrosHistoricosDeLaZonaMetropolitana
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
 * Clase LosCentrosHistoricosDeLaZonaMetropolitana
 */
class LosCentrosHistoricosDeLaZonaMetropolitana extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Los Centros Históricos de la Zona Metropolitana';
        $this->autor                      = 'Arq. Jair Miramontes Chávez';
        $this->fecha                      = '2018-02-21T11:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'los-centros-historicos-de-la-zona-metropolitana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En la Zona Metropolitana de la Laguna es necesario reforzar la identidad y la importancia de los centros históricos, actualmente sólo Torreón cuenta con decreto oficial para este perímetro de la ciudad y en Gómez Palacio este año en Cabildo se aprobó la declaratoria de Centro Histórico de la ciudad.';
        $this->claves                     = 'IMPLAN, Torreon, Zona Metropolitana, Centro, Historico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LosCentrosHistoricosDeLaZonaMetropolitana.md';
        // Para el Organizador
        $this->categorias                 = array('Cultura', 'Infraestructura');
        $this->fuentes                    = array('INAH');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LosCentrosHistoricosDeLaZonaMetropolitana

?>
