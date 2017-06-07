<?php
/**
 * TrcIMPLAN Sitio Web - SostienenReunionDeTrabajoIMPLANYConsejoCivicoDeLasInstituciones
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

namespace SalaPrensa;

/**
 * Clase SostienenReunionDeTrabajoIMPLANYConsejoCivicoDeLasInstituciones
 */
class SostienenReunionDeTrabajoIMPLANYConsejoCivicoDeLasInstituciones extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Sostienen reunión de trabajo IMPLAN y Consejo Cívico de las Instituciones';
        $this->fecha                      = '2017-05-04T15:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2017-05-04-sostienen-reunion-de-trabajo-implan-y-consejo-civico-de-las-instituciones';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El IMPLAN Torreón sostuvo una reunión con el Consejo Cívico de las Instituciones A.C., creadores del Observatorio de La Laguna, para intercambiar experiencias.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/SostienenReunionDeTrabajoIMPLANYConsejoCivicoDeLasInstituciones.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase SostienenReunionDeTrabajoIMPLANYConsejoCivicoDeLasInstituciones

?>
