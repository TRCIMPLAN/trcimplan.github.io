<?php
/**
 * TrcIMPLAN Sitio Web - ComposicionEconomicaDeLaLaguna
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
 * Clase ComposicionEconomicaDeLaLaguna
 */
class ComposicionEconomicaDeLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Composición económica de La Laguna a través del tiempo';
        $this->autor                      = 'Lic. Pedro Eleazar González Valdez';
        $this->fecha                      = '2020-10-22T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'composicion-economica-de-la-laguna-oct-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Por simple observación resulta sencillo deducir la estructura económica de una ciudad: a qué se dedican las empresas que se ubican en el territorio, cuál es la producción que se genera en mayor medida o en qué actividades los ciudadanos se emplean comunmente.';
        $this->claves                     = 'IMPLAN, Torreon, economia, produccion, actividades';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ComposicionEconomicaDeLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad','Finanzas Públicas');
        $this->fuentes                    = array('Inegi');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComposicionEconomicaDeLaLaguna

?>
