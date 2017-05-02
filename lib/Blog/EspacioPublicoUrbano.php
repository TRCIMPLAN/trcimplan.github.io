<?php
/**
 * TrcIMPLAN Sitio Web - Espacio Público Urbano
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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
 * Clase EspacioPublicoUrbano
 */
class EspacioPublicoUrbano extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Espacio Público Urbano';
        $this->autor                      = 'Arq. Teresita Benítez Saludado';
        $this->fecha                      = '2015-03-20T14:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'espacio-publico-urbano';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Las calles son la forma más importante de espacio público. Requieren algunos cambios urbanos para que sean más seguras y amistosas para los niños y niñas; que lleguen a ser de alta calidad.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EspacioPublicoUrbano.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Infraestructura');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase EspacioPublicoUrbano

?>
