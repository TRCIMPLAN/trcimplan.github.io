<?php
/**
 * TrcIMPLAN Sitio Web - Por un crecimiento ordenado en Torreón
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
 * Clase PorUnCrecimientoOrdenadoEnTorreon
 */
class PorUnCrecimientoOrdenadoEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Por un crecimiento ordenado en Torreón';
        $this->autor                      = 'Arq. Jair Miramontes Chávez';
        $this->fecha                      = '2015-10-20T14:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'por-un-crecimiento-ordenado-en-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Plan de Desarrollo Urbano propone la figura de los Polígonos de Actuación, para que la ciudad transite hacia un modelo de desarrollo urbano sustentable, integral e inteligente.';
        $this->claves                     = 'IMPLAN, Torreon, Plan, Desarrollo, Urbano';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PorUnCrecimientoOrdenadoEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase PorUnCrecimientoOrdenadoEnTorreon

?>
