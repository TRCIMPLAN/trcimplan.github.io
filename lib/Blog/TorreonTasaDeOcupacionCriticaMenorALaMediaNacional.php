<?php
/**
 * TrcIMPLAN Sitio Web - Torreón: tasa de ocupación crítica menor a la media nacional
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
 * Clase TorreonTasaDeOcupacionCriticaMenorALaMediaNacional
 */
class TorreonTasaDeOcupacionCriticaMenorALaMediaNacional extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón: tasa de ocupación crítica menor a la media nacional';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2016-07-01T19:40';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-tasa-de-ocupacion-critica-menor-a-la-media-nacional';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En los últimos años ha aumentado la Tasa de Condiciones Críticas de Ocupación en la Comarca Lagunera. No obstante, Torreón se encuentra por debajo de la tasa estatal y nacional con un 8% del total del personal ocupado. Las personas que más se enfrentan a esta problemática cuentan con menor escolaridad.';
        $this->claves                     = 'IMPLAN, Torreon, Tasa, ocupacion, Trabajo, Trabajadores';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonTasaDeOcupacionCriticaMenorALaMediaNacional.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Empleo');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'La Laguna');
    } // constructor

} // Clase TorreonTasaDeOcupacionCriticaMenorALaMediaNacional

?>
