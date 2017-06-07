<?php
/**
 * TrcIMPLAN Sitio Web - Urbanismo Participativo
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
 * Clase UrbanismoParticipativo
 */
class UrbanismoParticipativo extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Urbanismo Participativo';
        $this->autor                      = 'Arq. Jair Miramontes Chávez';
        $this->fecha                      = '2014-12-16T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'urbanismo-participativo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Es un concepto de corresponsabilidad que se forma entre el Estado y la sociedad dentro de un modelo de gobernanza, en donde los ciudadanos aportan ideas y evalúan los procesos de planeación del territorio y de los espacios públicos urbanos que lo conforman.';
        $this->claves                     = 'IMPLAN, Torreon, Infraestructura, Urbanismo, Gobernanza, Territorio';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/UrbanismoParticipativo.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase UrbanismoParticipativo

?>
