<?php
/**
 * TrcIMPLAN Sitio Web - MovilidadInclusivaParaVivirYConvivir
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
 * Clase MovilidadInclusivaParaVivirYConvivir
 */
class MovilidadInclusivaParaVivirYConvivir extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Movilidad Inclusiva para Vivir y Convivir.';
        $this->autor                      = 'Lic. Cecilia Cardiel Escamilla';
        $this->fecha                      = '2022-10-17T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'movilidad-inclusiva-para-vivir-y-convivir-oct-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '"Movilidad Inclusiva para vivir y convivir en un entorno accesible de todos los miembros de la Familia Humana con una Visión Metropolitana”';
        $this->claves                     = 'IMPLAN, Torreon, movilidad, vulnerables, grupos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/MovilidadInclusivaParaVivirYConvivir.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad','Grupos Vulnerables');
        $this->fuentes                    = array('CNDH');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase MovilidadInclusivaParaVivirYConvivir

?>
