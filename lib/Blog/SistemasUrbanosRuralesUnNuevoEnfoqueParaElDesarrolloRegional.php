<?php
/**
 * TrcIMPLAN Sitio Web - Sistemas Urbanos Rurales: un nuevo enfoque para el desarrollo regional
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
 * Clase SistemasUrbanosRuralesUnNuevoEnfoqueParaElDesarrolloRegional
 */
class SistemasUrbanosRuralesUnNuevoEnfoqueParaElDesarrolloRegional extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Sistemas Urbanos Rurales: un nuevo enfoque para el desarrollo regional';
        $this->autor                      = array('Lic. Luis A. Gutiérrez Arizpe', 'Lic. Rodrigo González Morales');
        $this->fecha                      = '2016-08-09T11:35';
        // El nombre del archivo a crear
        $this->archivo                    = 'sistemas-urbanos-rurales-un-nuevo-enfoque-para-el-desarrollo-regional';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Este enfoque permite analizar la influencia de las ciudades al desarrollo de una región para elaborar diagnósticos y políticas más certeros acorde a las necesidades del país.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/SistemasUrbanosRuralesUnNuevoEnfoqueParaElDesarrolloRegional.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Macroeconomía', 'Población');
        $this->fuentes                    = array('INEGI', 'Secretaría de Desarrollo Urbano Territorial y Urbano (SEDATU)');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase SistemasUrbanosRuralesUnNuevoEnfoqueParaElDesarrolloRegional

?>
