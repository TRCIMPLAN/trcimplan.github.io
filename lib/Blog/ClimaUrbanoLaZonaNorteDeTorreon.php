<?php
/**
 * TrcIMPLAN Sitio Web - ClimaUrbanoLaZonaNorteDeTorreon
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
 * Clase ClimaUrbanoLaZonaNorteDeTorreon
 */
class ClimaUrbanoLaZonaNorteDeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Clima Urbano: La Zona Norte de Torreón';
        $this->autor                      = 'Arq. Carla Estefanía Tovar Triana';
        $this->fecha                      = '2020-05-13T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'clima-urbano-la-zona-norte-de-torreon-mayo-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El término isla de calor fue utilizado por primera vez en 1947 para referirse a la presencia de un aumento de temperatura del aire en las zonas urbanas en comparación con la temperatura registrada en las zonas rurales de su alrededor. Desde entonces diversas investigaciones han demostrado que el clima en las ciudades tiende a ser más cálido, este fenómeno ocurre en todas las zonas urbanas sin importar la escala ni el tipo de clima.';
        $this->claves                     = 'IMPLAN, Torreon, temperatura, calor, zonas urbanas';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ClimaUrbanoLaZonaNorteDeTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Medio Ambiente');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ClimaUrbanoLaZonaNorteDeTorreon

?>
