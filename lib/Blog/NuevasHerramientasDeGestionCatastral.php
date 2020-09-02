<?php
/**
 * TrcIMPLAN Sitio Web - NuevasHerramientasDeGestionCatastral
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
 * Clase NuevasHerramientasDeGestionCatastral
 */
class NuevasHerramientasDeGestionCatastral extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Nuevas herramientas de gestión catastral';
        $this->autor                      = 'Lic. Jesús Abraham Salazar Valadez';
        $this->fecha                      = '2020-09-02T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'nuevas-herramientas-de-gestion-catastral-sep-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En pleno Siglo XXI no podemos visualizar a los catastros municipales como las oficinas que solo recaudan el impuesto predial.';
        $this->claves                     = 'IMPLAN, Torreon, impuesto predial, catastro, recaudacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/NuevasHerramientasDeGestionCatastral.md';
        // Para el Organizador
        $this->categorias                 = array('Gobierno','Finanzas Públicas');
        $this->fuentes                    = array('IMCO');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase NuevasHerramientasDeGestionCatastral

?>
