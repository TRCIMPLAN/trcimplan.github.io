<?php
/**
 * TrcIMPLAN Sitio Web - SalvavidasParaLasOrganizaciones
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
 * Clase SalvavidasParaLasOrganizaciones
 */
class SalvavidasParaLasOrganizaciones extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Salvavidas para las organizaciones';
        $this->autor                      = 'Lic. Miriam Janeth González Quintana';
        $this->fecha                      = '2021-07-12T00:15';
        // El nombre del archivo a crear
        $this->archivo                    = 'salvavidas-para-las-organizaciones-jul-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La procuración de fondos se puede entender como el conjunto de herramientas que permiten financiar las actividades de una organización, generalmente, organizaciones no gubernamentales. Para construir una bolsa financiera diversificada es necesaria la participación de actores como personas físicas, personas morales, gobierno, agencias de cooperación internacional, fundaciones y empresas que compartan una causa en común.';
        $this->claves                     = 'IMPLAN, Torreon, organizacion, financiero';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/SalvavidasParaLasOrganizaciones.md';
        // Para el Organizador
        $this->categorias                 = array('Empresas');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase SalvavidasParaLasOrganizaciones

?>
