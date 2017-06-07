<?php
/**
 * TrcIMPLAN Sitio Web - Zona Metropolitana de La Laguna
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
 * Clase ZonaMetropolitanaLaguna
 */
class ZonaMetropolitanaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Zona Metropolitana de La Laguna';
        $this->autor                      = 'Arq. Teresita Benítez Saludado';
        $this->fecha                      = '2015-05-26T13:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'zona-metropolitana-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion                = 'La Zona Metropolitana de La Laguna está conformada por los municipios de Torreón, Matamoros en el estado de Coahuila, Gómez Palacio y Lerdo en Durango.';
        $this->claves                     = 'IMPLAN, Torreon, Zona, Metropolitana, Laguna';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ZonaMetropolitanaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Gobierno');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase ZonaMetropolitanaLaguna

?>
