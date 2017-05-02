<?php
/**
 * TrcIMPLAN Sitio Web - Experiencias sobre Datos Abiertos en México
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
 * Clase ExperienciasSobreDatosAbiertosEnMexico
 */
class ExperienciasSobreDatosAbiertosEnMexico extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Experiencias sobre Datos Abiertos en México';
        $this->autor                      = 'Ing. Guillermo Valdés Lozano';
        $this->fecha                      = '2015-06-03T14:25';
        // El nombre del archivo a crear
        $this->archivo                    = 'experiencias-sobre-datos-abiertos-en-mexico';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Representantes del gobierno del estado de Puebla y del municipio de Xalapa, Veracruz compartieron sus experiencias en materia de Datos Abiertos.';
        $this->claves                     = 'IMPLAN, Datos Abiertos, Mexico, Puebla, Xalapa, Veracruz, Red Mexico Abierto, Estrategia Digital Nacional';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ExperienciasSobreDatosAbiertosEnMexico.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Gobierno Digital', 'Innovación', 'Transparencia');
        $this->fuentes                    = array('Gobierno de la República');
        $this->regiones                   = array('Nacional');
    } // constructor

} // Clase ExperienciasSobreDatosAbiertosEnMexico

?>
