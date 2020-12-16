<?php
/**
 * TrcIMPLAN Sitio Web - AnalisisDeLaOcupacionYElEmpleo1erTrimestre2018
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
 * Clase AnalisisDeLaOcupacionYElEmpleo1erTrimestre2018
 */
class AnalisisDeLaOcupacionYElEmpleo1erTrimestre2018 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Análisis de la ocupación y el empleo en el 1er. trimestre de 2018.';
        $this->autor                      = 'Dr. Iván de Luna Aldape';
        $this->fecha                      = '2018-05-28T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'analisis-de-la-ocupacion-y-el-empleo-1er-trimestre-2018';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'De acuerdo con los últimos datos de INEGI, en La Laguna el 12.33% de las personas ocupadas ganan hasta un salario mínimo, mientras que el 32% de la población ocupada, gana entre 1 y 2 salarios mínimos. Asimismo el comercio emplea al  21.77% de la PEA.';
        $this->claves                     = 'IMPLAN, Torreon, Empleo, Ocupacion, enoe';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/AnalisisDeLaOcupacionYElEmpleo1erTrimestre2018.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo');
        $this->fuentes                    = array('Inegi');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase AnalisisDeLaOcupacionYElEmpleo1erTrimestre2018

?>
