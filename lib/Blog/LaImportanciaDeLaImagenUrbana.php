<?php
/**
 * TrcIMPLAN Sitio Web - La Importancia de la Imagen Urbana
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
 * Clase LaImportanciaDeLaImagenUrbana
 */
class LaImportanciaDeLaImagenUrbana extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Importancia de la Imagen Urbana';
        $this->autor                      = 'Arq. Teresita Benítez Saludado';
        $this->fecha                      = '2015-09-15T20:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-importancia-de-la-imagen-urbana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Al darle a la ciudad una buena calidad visual, los usuarios son capaces de desarrollar conductas y comportamientos dignos y creativos. Sin embargo en Torreón el distrito del Centro Histórico sufre un deterioro en su imagen urbana.';
        $this->claves                     = 'IMPLAN, Torreon, Imagen, Urbana, Visual, Centro Historico';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/LaImportanciaDeLaImagenUrbana.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Infraestructura');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase LaImportanciaDeLaImagenUrbana

?>
