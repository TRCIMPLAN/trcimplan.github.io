<?php
/**
 * TrcIMPLAN Sitio Web - ElPeriodismoAPesarDeLaCovid19
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
 * Clase ElPeriodismoAPesarDeLaCovid19
 */
class ElPeriodismoAPesarDeLaCovid19 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El Periodismo a pesar de la COVID-19';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2021-07-05T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-periodismo-a-pesar-de-la-covid19-jul-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Con la llegada de la enfermedad por el coronavirus del 2019 (COVID-19), se modificaron totalmente la forma de vida, laboral, familiar y profesional de todas las personas, incluyendo a los medios de comunicación, que, como todas las dependencias, instituciones, comercios y ciudadanía en general, tuvieron que adaptarse a la nueva normalidad.';
        $this->claves                     = 'IMPLAN, Torreon, covid, coronavirus, normalidad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElPeriodismoAPesarDeLaCovid19.md';
        // Para el Organizador
        $this->categorias                 = array('Salud', 'Empleo', 'Bienestar');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ElPeriodismoAPesarDeLaCovid19

?>
