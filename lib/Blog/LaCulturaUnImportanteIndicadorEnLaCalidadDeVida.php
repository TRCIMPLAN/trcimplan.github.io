<?php
/**
 * TrcIMPLAN Sitio Web - La Cultura: un importante indicador en la calidad de vida
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
 * Clase LaCulturaUnImportanteIndicadorEnLaCalidadDeVida
 */
class LaCulturaUnImportanteIndicadorEnLaCalidadDeVida extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Cultura: un importante indicador en la calidad de vida';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2015-09-03T15:22';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-cultura-un-importante-indicador-en-la-calidad-de-vida';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Laguna tiene un promedio muy bajo de espacios culturales por cada mil habitantes. A favor, hay un renovado impulso a la cultura gracias a iniciativas independientes, colectivos y programas de gobierno.';
        $this->claves                     = 'IMPLAN, Torreon, Espacio, Cultural, Cultura';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/LaCulturaUnImportanteIndicadorEnLaCalidadDeVida.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Cultura');
        $this->fuentes                    = array('IMPLAN', 'IMCO', 'Instituto Nacional de Bellas Artes (INBA)', 'Instituto Nacional de Antropología e Historia (INAH)');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaCulturaUnImportanteIndicadorEnLaCalidadDeVida

?>
