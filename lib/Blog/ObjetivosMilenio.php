<?php
/**
 * TrcIMPLAN Sitio Web - La Zona Metropolitana de La Laguna y los Objetivos del Milenio
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
 * Clase ObjetivosMilenio
 */
class ObjetivosMilenio extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Zona Metropolitana de La Laguna y los Objetivos del Milenio';
        $this->autor                      = 'Lic. Luis A. Gutiérrez Arizpe';
        $this->fecha                      = '2015-01-27T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'objetivos-milenio';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En septiembre del año 2000 fue celebrada la Cumbre del Milenio de las Naciones Unidas, durante la cual 147 jefes de estado firman y 189 países aprueban uno de los retos consensuados más ambicioso de las últimas décadas.';
        $this->claves                     = 'IMPLAN, Torreon, Cumbre, Milenio, Naciones Unidas, ONU, Retos, Objetivos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ObjetivosMilenio.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Educación', 'Salud', 'Recursos Naturales');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase ObjetivosMilenio

?>
