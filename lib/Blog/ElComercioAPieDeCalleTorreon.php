<?php
/**
 * TrcIMPLAN Sitio Web - ElComercioAPieDeCalleTorreon
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
 * Clase ElComercioAPieDeCalleTorreon
 */
class ElComercioAPieDeCalleTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El comercio a pie de calle, un acercamiento al antes y el después del Paseo Morelos';
        $this->autor                      = 'Arq. José Antonio Ramírez Reyes';
        $this->fecha                      = '2018-08-29T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-comercio-a-pie-de-calle';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Para noviembre del 2017, se registraron un total de 216 unidades económicas, 34 unidades más que antes de la semi-peatonalización, lo que representa un incremento del 18.68%.';
        $this->claves                     = 'IMPLAN, Torreon, peatonalizacion, Morelos, comercio';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElComercioAPieDeCalleTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Empresas','Bienestar', 'Vialidad', 'Movilidad');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ElComercioAPieDeCalleTorreon

?>
