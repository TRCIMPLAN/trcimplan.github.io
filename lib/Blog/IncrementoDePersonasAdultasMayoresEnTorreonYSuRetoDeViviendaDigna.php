<?php
/**
 * TrcIMPLAN Sitio Web - IncrementoDePersonasAdultasMayoresEnTorreonYSuRetoDeViviendaDigna
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
 * Clase IncrementoDePersonasAdultasMayoresEnTorreonYSuRetoDeViviendaDigna
 */
class IncrementoDePersonasAdultasMayoresEnTorreonYSuRetoDeViviendaDigna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Incremento de las Personas Adultas Mayores en Torreón y su reto de vivienda digna.';
        $this->autor                      = 'Arq. Cecilio Pedro Secunza Schott';
        $this->fecha                      = '2019-01-07T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'incremento-de-personas-adultas-mayores-en-torreon-y-su-reto-de-vivienda-digna-ene2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En Torreón, se estima que para mediados de 2018, habitaban más de 53 mil personas mayores de 65 años (CONAPO); es decir 7.4% de la población total torreonense. Esta cifra aumentará para 2030 a más de 84,000 (10.6%).';
        $this->claves                     = 'IMPLAN, Torreon, Adultos mayores, Vivienda Digna';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/IncrementoDePersonasAdultasMayoresEnTorreonYSuRetoDeViviendaDigna.md';
        // Para el Organizador
        $this->categorias                 = array('Grupos Vulnerables', 'Vivienda');
        $this->fuentes                    = array('INAPAM', 'CONAVI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase IncrementoDePersonasAdultasMayoresEnTorreonYSuRetoDeViviendaDigna

?>
