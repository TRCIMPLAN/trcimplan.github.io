<?php
/**
 * TrcIMPLAN Sitio Web - Las ciudades y el reto de su transformación
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
 * Clase CiudadesRetoTransformacion
 */
class CiudadesRetoTransformacion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Las ciudades y el reto de su transformación';
        $this->autor                      = 'Arq. Victoria Aranzábal';
        $this->fecha                      = '2014-10-28T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'ciudades-reto-transformacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El futuro de la humanidad está intrínsecamente relacionado al futuro de las ciudades. A partir de la revolución industrial hubo una movilización de personas del campo a la ciudad, lo que trajo consigo una revolución urbana.';
        $this->claves                     = 'IMPLAN, Torreon, Ciudad, Urbana, Personas';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo HTML para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_html     = 'lib/Blog/CiudadesRetoTransformacion.html';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Recursos Naturales', 'Bienestar');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase CiudadesRetoTransformacion

?>
