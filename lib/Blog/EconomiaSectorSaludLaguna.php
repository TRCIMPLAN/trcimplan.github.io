<?php
/**
 * TrcIMPLAN Sitio Web - Economía del Sector Salud en La Laguna
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
 * Clase EconomiaSectorSaludLaguna
 */
class EconomiaSectorSaludLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Economía del Sector Salud en La Laguna';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2014-10-07T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'economia-sector-salud-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El sector salud contribuye en la economía de La Laguna empleando a 8,584 locales en actividades que incluyen el cuidado y asistencia a enfermos en hospitales generales y servicios de orientación y trabajo social, entre otros.';
        $this->claves                     = 'IMPLAN, Torreon, Salud';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/EconomiaSectorSaludLaguna.html';
        // Para el Organizador
        $this->categorias                 = array('Salud', 'Empleo', 'Empresas');
        $this->fuentes                    = array('INEGI', 'Organización para la Cooperación y Desarrollo Económicos (OCDE)');
        $this->regiones                   = array('Torreón', 'La Laguna', 'Nacional');
    } // constructor

} // Clase EconomiaSectorSaludLaguna

?>
