<?php
/**
 * TrcIMPLAN Sitio Web - ParticipacionCiudadanaJuvenilEnLaPlaneacionMunicipal
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
 * Clase ParticipacionCiudadanaJuvenilEnLaPlaneacionMunicipal
 */
class ParticipacionCiudadanaJuvenilEnLaPlaneacionMunicipal extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La participación ciudadana juvenil, en la planeación municipal.';
        $this->autor                      = 'Lic. Frida García Gutiérrez';
        $this->fecha                      = '2020-07-29T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'participacion-ciudadana-juvenil-en-la-planeacion-municipal-julio-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En febrero de 2019, el IMPLAN Torreón a través de la Dirección de Proyectos Estratégicos, incorpora en su estructura, una plataforma de participación juvenil permanente, el Consejo Visión Metrópoli.';
        $this->claves                     = 'IMPLAN, Torreon, juvenil, plataforma, planeacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ParticipacionCiudadanaJuvenilEnLaPlaneacionMunicipal.md';
        // Para el Organizador
        $this->categorias                 = array('Participación Ciudadana');
        $this->fuentes                    = array('Implan');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ParticipacionCiudadanaJuvenilEnLaPlaneacionMunicipal

?>
