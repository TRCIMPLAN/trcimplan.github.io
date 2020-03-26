<?php
/**
 * TrcIMPLAN Sitio Web - CaracteristicasDeLaIndustriaEnLaLaguna
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
 * Clase CaracteristicasDeLaIndustriaEnLaLaguna
 */
class CaracteristicasDeLaIndustriaEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Características de la Industria en La Laguna';
        $this->autor                      = 'Lic. Pedro Eleazar González Valdez';
        $this->fecha                      = '2020-03-26T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'caracteristicas-de-la-industria-en-la-laguna-marzo2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Industria de la Manufactura es el sector económico más importante en la región de La Laguna, según datos del censo económico 2014 realizado por el INEGI.';
        $this->claves                     = 'IMPLAN, Torreon, manufactura, industria, sector economico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/CaracteristicasDeLaIndustriaEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad','Empleo', 'Empresas');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase CaracteristicasDeLaIndustriaEnLaLaguna

?>
