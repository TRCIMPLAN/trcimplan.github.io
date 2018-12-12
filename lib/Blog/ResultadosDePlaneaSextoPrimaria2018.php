<?php
/**
 * TrcIMPLAN Sitio Web - ResultadosDePlaneaSextoPrimaria2018
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
 * Clase ResultadosDePlaneaSextoPrimaria2018
 */
class ResultadosDePlaneaSextoPrimaria2018 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La ZML obtiene bajos resultados en la prueba Planea Educación Básica 2018.';
        $this->autor                      = 'Lic. Iván de Luna Aldape';
        $this->fecha                      = '2018-12-12T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'resultados-de-planea-sexto-primaria-2018-dic2018';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'A comparación con otras entidades federativas, Coahuila se encuentra en el 7° lugar en cuanto a LC (Lenguaje y Comunicación) y Durango en 26° y mientras que en la prueba de MAT (Matemáticas), Coahuila se ubica en 8° y Durango en el lugar 22°.';
        $this->claves                     = 'IMPLAN, Torreon, planea, educacion basica';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ResultadosDePlaneaSextoPrimaria2018.md';
        // Para el Organizador
        $this->categorias                 = array('Educación');
        $this->fuentes                    = array('SEP');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ResultadosDePlaneaSextoPrimaria2018

?>
