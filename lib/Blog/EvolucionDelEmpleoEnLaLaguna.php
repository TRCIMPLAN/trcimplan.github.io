<?php
/**
 * TrcIMPLAN Sitio Web - EvolucionDelEmpleoEnLaLaguna
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
 * Clase EvolucionDelEmpleoEnLaLaguna
 */
class EvolucionDelEmpleoEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Evolución del empleo en La Laguna';
        $this->autor                      = 'Lic. Daniel López Murga';
        $this->fecha                      = '2018-08-20T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'evolucion-del-empleo-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La población ocupada de la ciudad está compuesta en un 74.81% por trabajadores subordinados y remunerados, 17.43% por trabajadores por cuenta propia, 8.82% por empleadores y en un 2.19% por trabajadores no remunerados.';
        $this->claves                     = 'IMPLAN, Torreon, empleo en la laguna, empleo torreon';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EvolucionDelEmpleoEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase EvolucionDelEmpleoEnLaLaguna

?>
