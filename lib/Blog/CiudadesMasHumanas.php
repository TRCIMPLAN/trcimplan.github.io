<?php
/**
 * TrcIMPLAN Sitio Web - Ciudades más Humanas
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
 * Clase CiudadesMasHumanas
 */
class CiudadesMasHumanas extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ciudades más Humanas';
        $this->autor                      = 'Arq. Ilse Ávila García';
        $this->fecha                      = '2014-12-02T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'ciudades-mas-humanas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La calidad de vida en las ciudades es la posibilidad que tiene una persona, una familia o una comunidad, de alcanzar el bienestar y la satisfacción de todas sus necesidades.';
        $this->claves                     = 'IMPLAN, Torreon, Calidad de Vida';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/CiudadesMasHumanas.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Infraestructura');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase CiudadesMasHumanas

?>
