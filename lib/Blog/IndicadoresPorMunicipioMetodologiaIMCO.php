<?php
/**
 * TrcIMPLAN Sitio Web - Indicadores por municipio construidos por el IMPLAN con la base de datos y metodología del IMCO
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
 * Clase IndicadoresPorMunicipioMetodologiaIMCO
 */
class IndicadoresPorMunicipioMetodologiaIMCO extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Indicadores por municipio construidos por el IMPLAN con la base de datos y metodología del IMCO';
        $this->autor                      = array('Lic. Rodrigo González Morales', 'Lic. Luis A. Gutiérrez Arizpe');
        $this->fecha                      = '2014-05-28T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'indicadores-por-municipio-metodologia-imco';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Índice de Competitividad Urbana de la Zona Metropolitana de la Laguna, Torreón, Gómez Palacio, Lerdo y Matamoros en 2012.';
        $this->claves                     = 'IMPLAN, Torreon, Competitividad, La Laguna, Gómez Palacio, Lerdo, Matamoros';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/IndicadoresPorMunicipioMetodologiaIMCO.html';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Empleo');
        $this->fuentes                    = array('IMCO');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase IndicadoresPorMunicipioMetodologiaIMCO

?>
