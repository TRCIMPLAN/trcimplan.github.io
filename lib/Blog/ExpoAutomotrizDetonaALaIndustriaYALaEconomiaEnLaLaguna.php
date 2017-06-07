<?php
/**
 * TrcIMPLAN Sitio Web - Expo Automotriz detona a la industria y a la economía en La Laguna
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
 * Clase ExpoAutomotrizDetonaALaIndustriaYALaEconomiaEnLaLaguna
 */
class ExpoAutomotrizDetonaALaIndustriaYALaEconomiaEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Expo Automotriz detona a la industria y a la economía en La Laguna';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2016-05-12T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'expo-automotriz-detona-a-la-industria-y-a-la-economia-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Expo Congreso Automotriz Laguna 2016, dejó una derrama de más de 700 mil pesos en la región, contó con la participación de casi 70 empresarios como expositores. El resultado fueron importantes perspectivas de negocio y la necesidad de contar en La Laguna con un Centro de Manufactura Avanzada.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ExpoAutomotrizDetonaALaIndustriaYALaEconomiaEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo', 'Empresas');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ExpoAutomotrizDetonaALaIndustriaYALaEconomiaEnLaLaguna

?>
