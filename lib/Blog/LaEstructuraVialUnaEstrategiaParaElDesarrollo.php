<?php
/**
 * TrcIMPLAN Sitio Web - LaEstructuraVialUnaEstrategiaParaElDesarrollo
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
 * Clase LaEstructuraVialUnaEstrategiaParaElDesarrollo
 */
class LaEstructuraVialUnaEstrategiaParaElDesarrollo extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La estructura vial, una estrategia para el desarrollo.';
        $this->autor                      = 'Arq. Jair Miramontes Chávez';
        $this->fecha                      = '2022-05-23T10:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-estructura-vial-una-estrategia-para-el-desarrollo-mayo-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El tipo de una calle se categoriza a través de la jerarquía vial. En México, esta jerarquía se usa cotidianamente en la planeación vial y urbana (SCT, 2016; Sedesol, 2001) que divide la forma de las calles en tres categorías: vías primarias, vías secundarias o colectoras y vías terciarias o locales.';
        $this->claves                     = 'IMPLAN, Torreon, vial, planeacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaEstructuraVialUnaEstrategiaParaElDesarrollo.md';
        // Para el Organizador
        $this->categorias                 = array('Vialidad');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaEstructuraVialUnaEstrategiaParaElDesarrollo

?>
