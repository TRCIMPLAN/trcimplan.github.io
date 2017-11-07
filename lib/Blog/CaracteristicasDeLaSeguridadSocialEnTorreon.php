<?php
/**
 * TrcIMPLAN Sitio Web - CaracteristicasDeLaSeguridadSocialEnTorreon
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
 * Clase CaracteristicasDeLaSeguridadSocialEnTorreon
 */
class CaracteristicasDeLaSeguridadSocialEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Características de la Seguridad Social en Torreón';
        $this->autor                      = 'Lic. Frida García Gutiérrez';
        $this->fecha                      = '2017-11-07T11:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'caracteristicas-de-la-seguridad-social-en-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '¿A cuánto asciende la población asegurada en Torreón? ¿En qué ramas de la economía trabajan los asegurados? ¿De qué tamaño  son los registros patronales?  Estas preguntas y sus respuestas, son parte de la realidad económica y laboral de Torreón y La Laguna.';
        $this->claves                     = 'IMPLAN, Torreon, Salud, Población Asegurada, Asegurados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/CaracteristicasDeLaSeguridadSocialEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Salud');
        $this->fuentes                    = array('IMSS');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase CaracteristicasDeLaSeguridadSocialEnTorreon

?>
