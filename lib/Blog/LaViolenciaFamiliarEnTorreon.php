<?php
/**
 * TrcIMPLAN Sitio Web - LaViolenciaFamiliarEnTorreon
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
 * Clase LaViolenciaFamiliarEnTorreon
 */
class LaViolenciaFamiliarEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Violencia Familiar en Torreón';
        $this->autor                      = 'Lic. Iván de Luna Aldape';
        $this->fecha                      = '2019-03-19T16:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'violencia-familiar-en-torreon-marzo2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En el marco de la conmemoración del día internacional de la mujer, y como parte de las actividades que se llevan a cabo dentro del Municipio de Torreón a través del Instituto Municipal de la Mujer y el IMPLAN, se realizó el Diagnóstico sobre violencia de género contra las mujeres en Torreón, Coah..';
        $this->claves                     = 'IMPLAN, Torreon, violencia mujer, violencia genero';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaViolenciaFamiliarEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Grupos Vulnerables');
        $this->fuentes                    = array('ENDIREH');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase LaViolenciaFamiliarEnTorreon

?>
