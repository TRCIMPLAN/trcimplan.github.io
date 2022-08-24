<?php
/**
 * TrcIMPLAN Sitio Web - MovilidadIncluyenteParaCiudadanosDeTorreon
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
 * Clase MovilidadIncluyenteParaCiudadanosDeTorreon
 */
class MovilidadIncluyenteParaCiudadanosDeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Movilidad Incluyente para la Ciudadanía de Torreón';
        $this->autor                      = 'Arq. Olga Daniela Sánchez Valles';
        $this->fecha                      = '2022-08-22T11:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'movilidad-incluyente-para-torreon-ago-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Censo de Población y Vivienda 2020 indica que habitan 256,307 personas con alguna discapacidad o limitación para realizar sus actividades, de las cuales el 58% son limitaciones motoras, el 25% visuales, el 8% son auditivas, 5% limitaciones intelectuales y 3% limitantes del habla.';
        $this->claves                     = 'IMPLAN, Torreon, discapacidad, movilidad, incluyente';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/MovilidadIncluyenteParaCiudadanosDeTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Grupos Vulnerables');
        $this->fuentes                    = array('CNDH');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase MovilidadIncluyenteParaCiudadanosDeTorreon

?>
