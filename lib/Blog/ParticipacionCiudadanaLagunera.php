<?php
/**
 * TrcIMPLAN Sitio Web - ParticipacionCiudadanaLagunera
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
 * Clase ParticipacionCiudadanaLagunera
 */
class ParticipacionCiudadanaLagunera extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Participación Ciudadana Lagunera “De habitantes a Ciudadanía”';
        $this->autor                      = 'Jorge Ángel Olvera Morales';
        $this->fecha                      = '2022-09-06T14:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'participacion-ciudadana-lagunera-sep-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En la Zona Metropolitana de La Laguna (ZML) existen un total de 716 Organizaciones de la Sociedad Civil, 425 realizan actividades en el municipio de Torreón, 232 en Gómez Palacio y 59 en Ciudad Lerdo.';
        $this->claves                     = 'IMPLAN, Torreon, ciudadania, habitantes, participacion, actividades';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ParticipacionCiudadanaLagunera.md';
        // Para el Organizador
        $this->categorias                 = array('Participación Ciudadana');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ParticipacionCiudadanaLagunera

?>
