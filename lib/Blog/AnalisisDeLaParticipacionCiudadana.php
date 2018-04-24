<?php
/**
 * TrcIMPLAN Sitio Web - AnalisisDeLaParticipacionCiudadana
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
 * Clase AnalisisDeLaParticipacionCiudadana
 */
class AnalisisDeLaParticipacionCiudadana extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Análisis de la participación ciudadana en Coahuila y La Laguna';
        $this->autor                      = 'Lic. Miriam Janeth González Quintana';
        $this->fecha                      = '2018-04-23T13:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'analisis-de-la-participacion-ciudadana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Existen 698 asociaciones civiles en la zona metropolitana: 224 en Gómez Palacio, 58 en Lerdo, 12 en Matamoros, 404 en Torreón. De estos registros 588 están activas, 142 en Gómez Palacio, 37 en Lerdo, 5 en Matamoros y 219 en Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/AnalisisDeLaParticipacionCiudadana.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Participación Ciudadana');
        $this->fuentes                    = array('Censo Nacional de Gobiernos Municipales y Delegaciones');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase AnalisisDeLaParticipacionCiudadana

?>
