<?php
/**
 * TrcIMPLAN Sitio Web - TallerProgramaParcialDesarrolloUrbanoCentroHistorico5Oct18
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
 * Clase TallerProgramaParcialDesarrolloUrbanoCentroHistorico5Oct18
 */
class TallerProgramaParcialDesarrolloUrbanoCentroHistorico5Oct18 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN brinda taller sobre el Programa Parcial De Desarrollo Urbano Del Centro Histórico.';
        $this->autor                      = 'Implan';
        $this->fecha                      = '2018-10-08T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2018-10-05-programa-parcial-desarrollo-urbano-centro-historico';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Instituto Municipal de Planeación y Competitividad de Torreón, ofreció un taller para promover la participación ciudadana, el tema fue el Programa Parcial de Desarrollo Urbano del Centro Histórico.';
        $this->claves                     = 'IMPLAN, Torreon, Centro Historico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/TallerProgramaParcialDesarrolloUrbanoCentroHistorico5Oct18.md';
        // Para el Organizador
        $this->categorias                 = array('Cultura','Infraestructura');
        $this->fuentes                    = array('Implan');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase TallerProgramaParcialDesarrolloUrbanoCentroHistorico5Oct18

?>
