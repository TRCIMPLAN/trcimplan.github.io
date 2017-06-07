<?php
/**
 * TrcIMPLAN Sitio Web - Resultados de los Censos Económicos 2014
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
 * Clase ResultadosDeLosCensosEconomicos2014
 */
class ResultadosDeLosCensosEconomicos2014 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Resultados de los Censos Económicos 2014';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2015-07-29T15:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'resultados-de-los-censos-economicos-2014';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Torreón tuvo un crecimiento mayor al de municipios como Saltillo, Querétaro y San Luis Potosí.';
        $this->claves                     = 'IMPLAN, Torreon, INEGI, Censos, Economicos, 2014, Resultados, Crecimiento, Personal, Ocupado, Produccion, Bruta';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ResultadosDeLosCensosEconomicos2014.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Empleo', 'Macroeconomía', );
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase ResultadosDeLosCensosEconomicos2014

?>
