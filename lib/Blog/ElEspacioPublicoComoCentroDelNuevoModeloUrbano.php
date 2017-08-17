<?php
/**
 * TrcIMPLAN Sitio Web - ElEspacioPublicoComoCentroDelNuevoModeloUrbano
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
 * Clase ElEspacioPublicoComoCentroDelNuevoModeloUrbano
 */
class ElEspacioPublicoComoCentroDelNuevoModeloUrbano extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El espacio público como centro del nuevo modelo urbano';
        $this->autor                      = 'Ing. Luis Campos Hinojosa';
        $this->fecha                      = '2017-08-17T15:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-espacio-publico-como-centro-del-nuevo-modelo-urbano';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La nueva Ley de Asentamientos Humanos define el diseño del espacio público como un elemento fundamental en la planeación de las ciudades para la vida comunitaria, la imagen e identidad de barrios, ciudades y metrópolis.';
        $this->claves                     = 'IMPLAN, Torreon, Bosque, Venustiano Carranza, Alameda, Parques, Espacio Publico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElEspacioPublicoComoCentroDelNuevoModeloUrbano.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Infraestructura', 'Recursos Naturales');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ElEspacioPublicoComoCentroDelNuevoModeloUrbano

?>
