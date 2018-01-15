<?php
/**
 * TrcIMPLAN Sitio Web - TorreonHaciaUnaSociedadDeLaInformacion
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
 * Clase TorreonHaciaUnaSociedadDeLaInformacion
 */
class TorreonHaciaUnaSociedadDeLaInformacion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón hacia una Sociedad de la Información';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2018-01-15T12:40';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-hacia-una-sociedad-de-la-informacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En Torreón y su área metropolitana 53% de los hogares cuentan con computadora, mientras a nivel nacional la cobertura es de 46% de los hogares. Sin embargo, la ciudad aún enfrenta retos para considerarse una Sociedad de la Información.';
        $this->claves                     = 'IMPLAN, Torreon, Población, Internet, Sociedad de la Información';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonHaciaUnaSociedadDeLaInformacion.md';
        // Para el Organizador
        $this->categorias                 = array('Innovacion', 'Educación','Competitividad','Infraestructura');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase TorreonHaciaUnaSociedadDeLaInformacion

?>
