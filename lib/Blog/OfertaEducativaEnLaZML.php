<?php
/**
 * TrcIMPLAN Sitio Web - OfertaEducativaEnLaZML
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
 * Clase OfertaEducativaEnLaZML
 */
class OfertaEducativaEnLaZML extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Se registra ligero aumento en la oferta educativa de la ZML.';
        $this->autor                      = 'Lic. Olga Alejandra Noriega Aranda';
        $this->fecha                      = '2022-01-07T15:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'oferta-educativa-en-la-zml-ene-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'De acuerdo con el Anuario Estadístico de la Asociación Nacional de Universidades e Instituciones de Educación Superior (ANUIES) correspondiente al ciclo escolar 2020 -2021, la Zona Metropolitana de La Laguna (ZML) tiene un total de 62 instituciones de educación superior, 42 en Torreón, 2 en Matamoros, 11 en Gómez Palacio y 7 en Lerdo. De las cuales 48 son instituciones privadas, y representan el 30% sobre la matrícula de la ZML.';
        $this->claves                     = 'IMPLAN, Torreon, universidades, educacion, laguna';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/OfertaEducativaEnLaZML.md';
        // Para el Organizador
        $this->categorias                 = array('Educación');
        $this->fuentes                    = array('ANUIES');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase OfertaEducativaEnLaZML

?>
