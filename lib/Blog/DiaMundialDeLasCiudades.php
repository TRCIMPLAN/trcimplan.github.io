<?php
/**
 * TrcIMPLAN Sitio Web - DiaMundialDeLasCiudades
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
 * Clase DiaMundialDeLasCiudades
 */
class DiaMundialDeLasCiudades extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Día Mundial de las Ciudades: Actuar localmente para ser globales.';
        $this->autor                      = 'Arq. Julio Alexis Magaña Cisneros';
        $this->fecha                      = '2022-10-31T09:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'dia-mundial-de-las-ciudades-oct-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Octubre Urbano fue una iniciativa que ONU Habitat lanzó en el año de 2014, ésta buscaba que la comunidad internacional se involucrara en los retos que había que afrontar en el desarrollo urbano de las ciudades, y en el marco del desarrollo de la Nueva Agenda Urbana, que fuera aprobada en octubre de 2016.';
        $this->claves                     = 'IMPLAN, Torreon, octubre, urbano, desarrollo, ciudad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/DiaMundialDeLasCiudades.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array('ONU Habitat');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase DiaMundialDeLasCiudades

?>
