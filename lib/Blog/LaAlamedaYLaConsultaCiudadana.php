<?php
/**
 * TrcIMPLAN Sitio Web - La Alameda y la consulta ciudadana
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
 * Clase LaAlamedaYLaConsultaCiudadana
 */
class LaAlamedaYLaConsultaCiudadana extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Alameda y la consulta ciudadana';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2016-07-06T13:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-alameda-y-la-consulta-ciudadana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Ciudadanos y líderes representantes de diversos sectores, se expresaron sobre la necesidad de mejorar diversos aspectos de este parque público en los temas: historia y patrimonio, medio ambiente, servicios públicos, entorno social, movilidad y vialidad.';
        $this->claves                     = 'IMPLAN, Torreon, Parque, Alameda, Rescate';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaAlamedaYLaConsultaCiudadana.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Cultura', 'Recursos Naturales');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase LaAlamedaYLaConsultaCiudadana

?>
