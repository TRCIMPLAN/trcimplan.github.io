<?php
/**
 * TrcIMPLAN Sitio Web - EstrategiasEmergentesEnTiemposDeCovid19
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
 * Clase EstrategiasEmergentesEnTiemposDeCovid19
 */
class EstrategiasEmergentesEnTiemposDeCovid19 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'ESTRATEGIAS EMERGENTES EN TIEMPOS DE COVID-19';
        $this->autor                      = 'Arq. José Antonio Ramírez Reyes';
        $this->fecha                      = '2020-07-20T15:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'estrategias-emergentes-en-tiempos-de-covid19-julio-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El 29 de febrero del 2020, se confirmaba el primer caso de la nueva enfermedad COVID-19 en Torreón, el 4º en México; de esta fecha al 19 de julio del mismo año, la pandemia ocasionada por el virus SARS-COV-2 ha dejado 2,733 infectados, de los cuales el 22.75% sigue con el virus activo, 7.61% están hospitalizados y 3.95% fallecieron (Secretaría de Salud de Coahuila, 2020).';
        $this->claves                     = 'IMPLAN, Torreon, covid, estrategias, vialidad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EstrategiasEmergentesEnTiemposDeCovid19.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad', 'Salud');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase EstrategiasEmergentesEnTiemposDeCovid19

?>
