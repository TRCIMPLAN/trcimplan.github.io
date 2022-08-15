<?php
/**
 * TrcIMPLAN Sitio Web - IndicadoresDeEmpleoJuvenilEnLaLaguna
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
 * Clase IndicadoresDeEmpleoJuvenilEnLaLaguna
 */
class IndicadoresDeEmpleoJuvenilEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Jóvenes de La Laguna enfrentan reto en el tema laboral.';
        $this->autor                      = 'Lic. Michelle Bañuelos Barrientos';
        $this->fecha                      = '2022-08-15T11:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'indicadores-de-empleo-juvenil-en-la-laguna-agosto-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Con datos del Instituto Mexicano del Seguro Social (IMSS), se estima que, en la Zona Metropolitana de La Laguna durante el primer trimestre del año 2022 se generaron alrededor de 3,160 empleos formales.';
        $this->claves                     = 'IMPLAN, Torreon, jovenes, empleo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/IndicadoresDeEmpleoJuvenilEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase IndicadoresDeEmpleoJuvenilEnLaLaguna

?>
