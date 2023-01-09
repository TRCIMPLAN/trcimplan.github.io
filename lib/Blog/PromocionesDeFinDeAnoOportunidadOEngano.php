<?php
/**
 * TrcIMPLAN Sitio Web - PromocionesDeFinDeAnoOportunidadOEngano
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
 * Clase PromocionesDeFinDeAnoOportunidadOEngano
 */
class PromocionesDeFinDeAnoOportunidadOEngano extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Promociones de fin de año, oportunidad o engaño.';
        $this->autor                      = 'Lic. Pedro Eleazar González Valdez';
        $this->fecha                      = '2022-12-16T11:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'promociones-de-fin-de-ano-oportunidad-o-engano-dic-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Cámara de Comercio, Servicios y Turismo de Torreón (CANACO) estima un aproximado de 1,600 millones de pesos en ventas, presentando una oportunidad de ventas para los 15,490 negocios de comercio y servicios que existen en la ciudad.';
        $this->claves                     = 'IMPLAN, Torreon, comercio, ventas';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PromocionesDeFinDeAnoOportunidadOEngano.md';
        // Para el Organizador
        $this->categorias                 = array('Población');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase PromocionesDeFinDeAnoOportunidadOEngano

?>
