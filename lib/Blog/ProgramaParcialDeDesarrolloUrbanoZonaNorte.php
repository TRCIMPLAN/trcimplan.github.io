<?php
/**
 * TrcIMPLAN Sitio Web - ProgramaParcialDeDesarrolloUrbanoZonaNorte
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
 * Clase ProgramaParcialDeDesarrolloUrbanoZonaNorte
 */
class ProgramaParcialDeDesarrolloUrbanoZonaNorte extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Propuesta de Programa Parcial de Desarrollo Urbano de la Zona Norte de Torreón';
        $this->autor                      = 'Arq. José Antonio Ramírez Reyes';
        $this->fecha                      = '2020-03-30T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'programa-parcial-desarrollo-urbano-torreon-zona-norte-marzo2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '“El norte de Torreón tiene un 41.6% de zona urbanizada, pasando de 59.54 hectáreas en el año 2000 a 882.26 hectáreas al año 2018, y pasando de 6,130 habitantes en el 2000 a 29,161 habitantes en 2015”.';
        $this->claves                     = 'IMPLAN, Torreon, zona norte, desarrollo urbano';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ProgramaParcialDeDesarrolloUrbanoZonaNorte.md';
        // Para el Organizador
        $this->categorias                 = array('Población','Infraestructura','Vivienda');
        $this->fuentes                    = array('Urbis','Conagua','Implan');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ProgramaParcialDeDesarrolloUrbanoZonaNorte

?>
