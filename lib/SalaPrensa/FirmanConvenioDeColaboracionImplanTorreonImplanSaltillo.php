<?php
/**
 * TrcIMPLAN Sitio Web - FirmanConvenioDeColaboracionImplanTorreonImplanSaltillo
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

namespace SalaPrensa;

/**
 * Clase FirmanConvenioDeColaboracionImplanTorreonImplanSaltillo
 */
class FirmanConvenioDeColaboracionImplanTorreonImplanSaltillo extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Firman convenio de colaboración IMPLAN Torreón – IMPLAN Saltillo';
        $this->fecha                      = '2017-07-18T13:20';
        // El nombre del archivo a crear
        $this->archivo                    = '2017-07-18-firman-convenio-de-colaboracion-implan-torreon-implan-saltillo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'IMPLAN Torreón recibió la visita de personal de IMPLAN Saltillo, además de la D.G. de Medio Ambiente de Torreón y firmaron convenios de colaboración para hacer el Atlas de Riesgo y otros proyectos más.';
        $this->claves                     = 'IMPLAN, Torreon, Saltillo, Colaboración, Atlas de Riesgos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/FirmanConvenioDeColaboracionImplanTorreonImplanSaltillo.md';
        // Para el Organizador
        $this->categorias                 = array('Seguridad', 'Recursos Naturales');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase FirmanConvenioDeColaboracionImplanTorreonImplanSaltillo

?>
