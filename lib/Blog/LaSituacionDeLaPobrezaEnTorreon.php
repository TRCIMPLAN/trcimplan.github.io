<?php
/**
 * TrcIMPLAN Sitio Web - LaSituacionDeLaPobrezaEnTorreon
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
 * Clase LaSituacionDeLaPobrezaEnTorreon
 */
class LaSituacionDeLaPobrezaEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La situación de la pobreza en Torreón.';
        $this->autor                      = 'Lic. Miriam Janeth González Quintana';
        $this->fecha                      = '2019-07-03T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-situacion-de-la-pobreza-en-torreon-julio2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En cuanto al municipio de Torreón, el porcentaje de población en pobreza extrema disminuyó en 2015 respecto al 2010 pasando de 3.7 a 2.8%, sin embargo, de los cuatro municipios de la zona conurbada de la Laguna, Gómez Palacio disminuyó el 5% de su población en pobreza extrema al pasar de 5.9% en 2010 a 0.8% en 2015.';
        $this->claves                     = 'IMPLAN, Torreon, Pobreza';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaSituacionDeLaPobrezaEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar');
        $this->fuentes                    = array('CONEVAL');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase LaSituacionDeLaPobrezaEnTorreon

?>
