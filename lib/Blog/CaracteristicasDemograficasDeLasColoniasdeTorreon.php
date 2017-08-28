<?php
/**
 * TrcIMPLAN Sitio Web - CaracteristicasDemograficasDeLasColoniasdeTorreon
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
 * Clase CaracteristicasDemograficasDeLasColoniasdeTorreon
 */
class CaracteristicasDemograficasDeLasColoniasdeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Características demográficas de las colonias de Torreón';
        $this->autor                      = 'Lic. Luis A. Gutiérrez Arizpe';
        $this->fecha                      = '2017-08-28T15:16';
        // El nombre del archivo a crear
        $this->archivo                    = 'caracteristicas-demograficas-de-las-colonias-de-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La colonia es la forma más común en que nos referimos a algún lugar dentro de nuestras ciudades. En Torreón se contabilizan 399 colonias, de estas 247 cuentan concentran el 95.4% de la población urbana.';
        $this->claves                     = 'IMPLAN, Torreon, Caracterasticas, Demograficas, Colonias';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/CaracteristicasDemograficasDeLasColoniasdeTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Población');
        $this->fuentes                    = array('IMPLAN', 'INEGI');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase CaracteristicasDemograficasDeLasColoniasdeTorreon

?>
