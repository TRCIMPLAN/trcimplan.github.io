<?php
/**
 * TrcIMPLAN Sitio Web - LosGrandesRetosDelFuturoDeLaCiudadDeTorreon
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
 * Clase LosGrandesRetosDelFuturoDeLaCiudadDeTorreon
 */
class LosGrandesRetosDelFuturoDeLaCiudadDeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Los Grandes Retos Del Futuro De La Ciudad De Torreón';
        $this->autor                      = 'Lic. Eduardo Holguín Zehfuss';
        $this->fecha                      = '2020-12-14T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'los-grandes-retos-del-futuro-de-la-ciudad-de-torreon-dic-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La vida de las ciudades es una ecuación que suma el presente con el pasado para obtener un resultado que hoy no conocemos, pero podemos suponer. Ponencia del Foro “El futuro de las ciudades en México:
Regeneración de entornos urbanos desintegrados”';
        $this->claves                     = 'IMPLAN, Torreon, ciudades, futuro';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LosGrandesRetosDelFuturoDeLaCiudadDeTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Bienestar', 'Población');
        $this->fuentes                    = array('Implan');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase LosGrandesRetosDelFuturoDeLaCiudadDeTorreon

?>
