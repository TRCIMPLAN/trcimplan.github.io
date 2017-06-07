<?php
/**
 * TrcIMPLAN Sitio Web - Más laguneros se unen a la reforestación
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
 * Clase MasLagunerosSeUnenALaReforestacion
 */
class MasLagunerosSeUnenALaReforestacion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Más laguneros se unen a la reforestación';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2016-05-12T09:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'mas-laguneros-se-unen-a-la-reforestacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'De 2010 a 2013 Torreón registra un aumento en sus áreas verdes urbanas al llegar a  9.35 m2  por habitante, de acuerdo con la Secretaría de Medio Ambiente en Coahuila. Sin embargo, son áreas que principalmente se concentran alrededor del primer cuadro de la ciudad.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/MasLagunerosSeUnenALaReforestacion.md';
        // Para el Organizador
        $this->categorias                 = array('Recursos Naturales');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Matamoros', 'Coahuila');
    } // constructor

} // Clase MasLagunerosSeUnenALaReforestacion

?>
