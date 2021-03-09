<?php
/**
 * TrcIMPLAN Sitio Web - CrecimientoPoblacionalEnTorreonMedicionYResultados
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
 * Clase CrecimientoPoblacionalEnTorreonMedicionYResultados
 */
class CrecimientoPoblacionalEnTorreonMedicionYResultados extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Crecimiento de la población en Torreón: Medición y Resultados';
        $this->autor                      = 'Lic. Pedro Eleazar González Valdez';
        $this->fecha                      = '2021-03-09T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'Crecimiento-de-la-poblacion-en-torreon-med-y-res-mar2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El primer censo en incluir información de la población de Torreón dentro de los reportes publicados en el portal del INEGI data de 1900. Para este año la población se ubicaría en 23,190 habitantes. Para 1910, la población se vería casi duplicada, creciendo 87.07%, pasando a 43,382 habitantes. La marca de 100 mil habitantes sería alcanzada en 1950 y los 500 mil serían registrados en el año 2000.';
        $this->claves                     = 'IMPLAN, Torreon, poblacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/CrecimientoPoblacionalEnTorreonMedicionYResultados.md';
        // Para el Organizador
        $this->categorias                 = array('Población');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase CrecimientoPoblacionalEnTorreonMedicionYResultados

?>
