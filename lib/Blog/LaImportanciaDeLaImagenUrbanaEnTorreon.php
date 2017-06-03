<?php
/**
 * TrcIMPLAN Sitio Web - LaImportanciaDeLaImagenUrbanaEnTorreon
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
 * Clase LaImportanciaDeLaImagenUrbanaEnTorreon
 */
class LaImportanciaDeLaImagenUrbanaEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La importancia de la imagen urbana en Torreón';
        $this->autor                      = 'Arq. Teresita Benítez Saludado';
        $this->fecha                      = '2017-01-31T10:35';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-importancia-de-la-imagen-urbana-en-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El deterioro de la imagen urbana, principalmente en el perímetro del Centro Histórico, se debe en buena medida a la irregularidad de los anuncios que los comerciantes ubican en la fachadas de sus negocios. Se deben aplicar mayores reglas para armonizar el diseño de la ciudad.';
        $this->claves                     = 'IMPLAN, Torreon, Imagen, Urbana, Centro, Historico, Publicidad';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaImportanciaDeLaImagenUrbanaEnTorreon.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Gobierno', 'Infraestructura');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase LaImportanciaDeLaImagenUrbanaEnTorreon

?>
