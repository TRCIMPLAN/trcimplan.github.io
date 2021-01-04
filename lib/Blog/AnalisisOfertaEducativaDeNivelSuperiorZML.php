<?php
/**
 * TrcIMPLAN Sitio Web - AnalisisOfertaEducativaDeNivelSuperiorZML
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
 * Clase AnalisisOfertaEducativaDeNivelSuperiorZML
 */
class AnalisisOfertaEducativaDeNivelSuperiorZML extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Análisis de la oferta educativa de nivel superior en la Zona Metropolitana de La Laguna.';
        $this->autor                      = 'Lic. Olga Alejandra Noriega Aranda';
        $this->fecha                      = '2021-01-04T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'analisis-oferta-educativa-de-nivel-superior-zml-enero-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'De acuerdo con el Anuario Estadístico de la Asociación Nacional de Universidades e Instituciones de Educación Superior (ANUIES) correspondiente al ciclo escolar 2019 -2020, la Zona Metropolitana de La Laguna (ZML) tiene un total de 62 instituciones de educación superior, 40 en Torreón, 3 en Matamoros, 12 en Gómez Palacio y 7 en Lerdo. De las cuales 47 son instituciones privadas, y representan el 29% sobre la matrícula de la ZML.';
        $this->claves                     = 'IMPLAN, Torreon, educacion, nivel superior, oferta educativa';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/AnalisisOfertaEducativaDeNivelSuperiorZML.md';
        // Para el Organizador
        $this->categorias                 = array('Educación', 'Grupos Vulnerables');
        $this->fuentes                    = array('ANUIES');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase AnalisisOfertaEducativaDeNivelSuperiorZML

?>
