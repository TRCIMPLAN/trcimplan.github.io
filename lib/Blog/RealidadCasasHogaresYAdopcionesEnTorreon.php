<?php
/**
 * TrcIMPLAN Sitio Web - RealidadCasasHogaresYAdopcionesEnTorreon
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
 * Clase RealidadCasasHogaresYAdopcionesEnTorreon
 */
class RealidadCasasHogaresYAdopcionesEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'De la realidad de las casas hogares y las adopciones en Torreón';
        $this->autor                      = 'Arq. Alejandra Martínez Avilés';
        $this->fecha                      = '2021-02-17T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'realidad-casas-hogares-y-adopciones-en-torreon-feb-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Datos del 2015 del CAAS, registran una media de 22 menores viviendo en casas hogares, en Coahuila, señalando 37 alojamientos, albergando a 824 menores. Para Torreón, se identificaron 13 casas hogares, con 367 menores, acercándose más a la media nacional, con 28 personas por alojamiento.';
        $this->claves                     = 'IMPLAN, Torreon, menores, adopciones, casa hogar';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/RealidadCasasHogaresYAdopcionesEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array('CAAS');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase RealidadCasasHogaresYAdopcionesEnTorreon

?>
