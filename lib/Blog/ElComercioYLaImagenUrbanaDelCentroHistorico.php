<?php
/**
 * TrcIMPLAN Sitio Web - ElComercioYLaImagenUrbanaDelCentroHistorico
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
 * Clase ElComercioYLaImagenUrbanaDelCentroHistorico
 */
class ElComercioYLaImagenUrbanaDelCentroHistorico extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El comercio y la imagen urbana del Centro Histórico';
        $this->autor                      = 'Arq. Julio Alexis Magaña Cisneros';
        $this->fecha                      = '2017-08-08T05:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-comercio-y-la-imagen-urbana-del-centro-historico';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En el Centro Histórico el comercio es el protagonista principal de la imagen urbana, misma que en muchos de los casos  genera una contaminación visual, luciendo excesivos anuncios publicitarios, sin orden y uniformidad.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElComercioYLaImagenUrbanaDelCentroHistorico.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ElComercioYLaImagenUrbanaDelCentroHistorico

?>
