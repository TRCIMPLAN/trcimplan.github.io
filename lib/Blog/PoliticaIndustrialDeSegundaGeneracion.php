<?php
/**
 * TrcIMPLAN Sitio Web - PoliticaIndustrialDeSegundaGeneracion
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
 * Clase PoliticaIndustrialDeSegundaGeneracion
 */
class PoliticaIndustrialDeSegundaGeneracion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Política Industrial de segunda generación';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2019-08-21T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'politica-industrial-de-segunda-generacion-agosto2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En la Zona Metropolitana de La Laguna, la Industria manufacturera aporta más del 70% de la producción bruta total, más de 50% del valor agregado y alrededor de 30% del empleo.';
        $this->claves                     = 'IMPLAN, Torreon, Industria';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PoliticaIndustrialDeSegundaGeneracion.md';
        // Para el Organizador
        $this->categorias                 = array('Empresas','Competitividad');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase PoliticaIndustrialDeSegundaGeneracion

?>
