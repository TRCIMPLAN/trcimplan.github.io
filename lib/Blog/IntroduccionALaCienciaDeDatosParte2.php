<?php
/**
 * TrcIMPLAN Sitio Web - Introducción a la Ciencia de Datos Parte 2
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
 * Clase IntroduccionALaCienciaDeDatosParte2
 */
class IntroduccionALaCienciaDeDatosParte2 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Introducción a la Ciencia de Datos (parte 2)';
        $this->autor                      = 'Ing. Guillermo Valdés Lozano';
        $this->fecha                      = '2015-09-22T10:25';
        // El nombre del archivo a crear
        $this->archivo                    = 'introduccion-a-la-ciencia-de-datos-parte-2';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Ejemplo práctico de cómo bajar datos abiertos sobre escuelas y realizar un análisis de los mismos.';
        $this->claves                     = 'IMPLAN, Torreon, Ciencia, Científico, Datos';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/IntroduccionALaCienciaDeDatosParte2.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Gobierno Digital', 'Innovación');
        $this->fuentes                    = array('SEP', 'Gobierno de la República');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase IntroduccionALaCienciaDeDatosParte2

?>
