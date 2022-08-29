<?php
/**
 * TrcIMPLAN Sitio Web - LasCiudadesTambienSePlaneanParaLaNoche
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
 * Clase LasCiudadesTambienSePlaneanParaLaNoche
 */
class LasCiudadesTambienSePlaneanParaLaNoche extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Las ciudades también se planean para la noche';
        $this->autor                      = 'Lic. Miriam Janeth González Quintana';
        $this->fecha                      = '2022-08-29T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'las-ciudades-tambien-se-planean-para-la-noche-agosto-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En Torreón, la gestión nocturna se atiende a través de cuadrillas de limpieza, cuadrillas de alumbrado, personal fijo en Plaza de Armas, Alameda, Paseo Morelos, Bosque Urbano y Bosque Venustiano Carranza administrado por Servicios Públicos Municipales.';
        $this->claves                     = 'IMPLAN, Torreon, noche, ciudades, planeacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LasCiudadesTambienSePlaneanParaLaNoche.md';
        // Para el Organizador
        $this->categorias                 = array('Servicios Públicos');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase LasCiudadesTambienSePlaneanParaLaNoche

?>
