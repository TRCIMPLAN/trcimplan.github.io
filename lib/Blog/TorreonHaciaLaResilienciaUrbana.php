<?php
/**
 * TrcIMPLAN Sitio Web - TorreonHaciaLaResilienciaUrbana
 *
 * Copyright (C) 2016 IMPLAN Torreón
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
 * Clase TorreonHaciaLaResilienciaUrbana
 */
class TorreonHaciaLaResilienciaUrbana extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Torreón, hacia la resiliencia urbana';
        $this->autor                      = 'Ing. Luis Campos Hinojosa';
        $this->fecha                      = '2017-02-13T14:02';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-hacia-la-resiliencia-urbana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Cada vez más ciudades en el mundo han comenzado a transitar hacia la resiliencia y la reducción de riesgos como una estrategia urbana para lograr un desarrollo sostenible. El Plan de Resiliencia Urbana debe de ser un proyecto prioritario para Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, Ciudad, Resiliencia, Urbana, Plan';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonHaciaLaResilienciaUrbana.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Seguridad');
        $this->fuentes                    = array('Secretaría de Hacienda y Crédito Público (SHCP)', 'Centro Nacional de Prevención de Desastres (CENAPRED)');
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase TorreonHaciaLaResilienciaUrbana

?>
