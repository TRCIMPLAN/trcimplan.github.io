<?php
/**
 * TrcIMPLAN Sitio Web - ImportanciaYCalidadDeLosParquesYPlazasEnTorreon
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
 * Clase ImportanciaYCalidadDeLosParquesYPlazasEnTorreon
 */
class ImportanciaYCalidadDeLosParquesYPlazasEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Importancia y calidad de los parques y plazas en Torreón';
        $this->autor                      = array('Arq. Cecilio Pedro Secunza Schott', 'Arq. Teresita Benítez Saludado');
        $this->fecha                      = '2017-08-09T12:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'importancia-y-calidad-de-los-parques-y-plazas-en-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Torreón cuenta actualmente con tres parques metropolitanos: el Bosque Venustiano Carranza, el Bosque Urbano F. Madero y el Metroparque Río Nazas. Como Parques Vecinales se contabilizan 563, destacando el Parque la Tortuga, la Plaza Kennedy y Plaza de Eco.';
        $this->claves                     = 'IMPLAN, Torreon, Parques, Areas Verdes';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ImportanciaYCalidadDeLosParquesYPlazasEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Infraestructura', 'Recursos Naturales');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ImportanciaYCalidadDeLosParquesYPlazasEnTorreon

?>
