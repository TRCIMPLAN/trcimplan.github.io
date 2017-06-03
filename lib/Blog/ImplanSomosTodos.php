<?php
/**
 * TrcIMPLAN Sitio Web - El IMPLAN somos todos
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
 * Clase ImplanSomosTodos
 */
class ImplanSomosTodos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El IMPLAN somos todos';
    //~ $this->autor                      = '';
        $this->fecha                      = '2014-10-08T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'implan-somos-todos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Al iniciar este año se puso en marcha las labores del IMPLAN Torreón, con la firme intención de brindar a la ciudad y su zona metropolitana la posibilidad de crecer de manera ordenada.';
        $this->claves                     = 'IMPLAN, Torreon, Crecimiento, Ordenado';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/ImplanSomosTodos.html';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Gobierno', 'Participación Ciudadana');
        $this->fuentes                    = array();
        $this->regiones                   = array('La Laguna');
    } // constructor

} // Clase ImplanSomosTodos

?>
