<?php
/**
 * TrcIMPLAN Sitio Web - ParticipacionCiudadanaComoEjeDeLaPlaneacionUrbana
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
 * Clase ParticipacionCiudadanaComoEjeDeLaPlaneacionUrbana
 */
class ParticipacionCiudadanaComoEjeDeLaPlaneacionUrbana extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Participación Ciudadana Como Eje de la Planeación Urbana';
        $this->autor                      = 'Lic. Ana Luisa Pacheco Meraz';
        $this->fecha                      = '2020-07-14T11:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'participacion-ciudadana-como-eje-planeacion-urbana-julio-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El modelo de planeación urbana que sigue cada institución es el que define el grado de participación ciudadana que se fomenta. El IMPLAN desde sus inicios, ha tenido como eje la gobernanza, y se trabaja en definir estrategias de participación que permitan construir en colaboración, programas y planes incluyentes, que busquen el bienestar colectivo y el desarrollo urbano integral.';
        $this->claves                     = 'IMPLAN, Torreon, planeacion, urbana, participacion, ciudadana, gobernanza';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ParticipacionCiudadanaComoEjeDeLaPlaneacionUrbana.md';
        // Para el Organizador
        $this->categorias                 = array('Participación Ciudadana', 'Bienestar');
        $this->fuentes                    = array('Ley de asentamientos humanos');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ParticipacionCiudadanaComoEjeDeLaPlaneacionUrbana

?>
