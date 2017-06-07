<?php
/**
 * TrcIMPLAN Sitio Web - MODULO LaGranOportunidadDelGobiernoAbierto
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
 * Clase LaGranOportunidadDelGobiernoAbierto
 */
class LaGranOportunidadDelGobiernoAbierto extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Gran Oportunidad del Gobierno Abierto';
        $this->autor                      = 'Ing. Guillermo Valdés Lozano';
        $this->fecha                      = '2015-07-08T17:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-gran-oportunidad-del-gobierno-abierto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Nos encontramos frente a la posibilidad del mayor grado de cooperación que haya existido entre la sociedad y el gobierno.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaGranOportunidadDelGobiernoAbierto.md';
        // Para el Organizador
        $this->categorias                 = array('Gobierno Digital', 'Transparencia');
        $this->fuentes                    = array('Gobierno de la República');
        $this->regiones                   = array();
    } // constructor

} // Clase LaGranOportunidadDelGobiernoAbierto

?>
