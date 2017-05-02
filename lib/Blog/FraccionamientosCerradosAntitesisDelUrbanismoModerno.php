<?php
/**
 * TrcIMPLAN Sitio Web - Fraccionamientos cerrados: antítesis del urbanismo moderno
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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
 * Clase FraccionamientosCerradosAntitesisDelUrbanismoModerno
 */
class FraccionamientosCerradosAntitesisDelUrbanismoModerno extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Fraccionamientos cerrados: antítesis del urbanismo moderno';
        $this->autor                      = array('Arq. Teresita Benítez Saludado', 'Ing. Luis Campos Hinojosa');
        $this->fecha                      = '2016-10-20T09:40';
        // El nombre del archivo a crear
        $this->archivo                    = 'fraccionamientos-cerrados-antitesis-del-urbanismo-moderno';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Los fraccionamientos cerrados incentivan la segmentación, la fragmentación y el resentimiento social. De los conglomerados habitacionales desarrollados entre 2005 y 2013, casi 70% son de acceso cerrado o controlado.';
        $this->claves                     = 'IMPLAN, Torreon, Fraccionamientos Cerrados, Urbanismo';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/FraccionamientosCerradosAntitesisDelUrbanismoModerno.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Vivienda');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase FraccionamientosCerradosAntitesisDelUrbanismoModerno

?>
