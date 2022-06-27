<?php
/**
 * TrcIMPLAN Sitio Web - EdoActualDeLaIndustriaEnLaLaguna
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
 * Clase EdoActualDeLaIndustriaEnLaLaguna
 */
class EdoActualDeLaIndustriaEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Estado actual de la industria en La Laguna';
        $this->autor                      = 'Lic. Pedro Eleazar González Valdez';
        $this->fecha                      = '2022-06-27T13:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'edo-actual-de-la-industria-junio-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Plan director de Desarrollo Urbano (PDDU) a través de su eje de desarrollo económico busca impulsar los diferentes sectores económicos de la ciudad y uno de ellos es la Industria de la Manufactura.';
        $this->claves                     = 'IMPLAN, Torreon, plan, director, desarrollo, economico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EdoActualDeLaIndustriaEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Empresas');
        $this->fuentes                    = array('DENUE');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase EdoActualDeLaIndustriaEnLaLaguna

?>
