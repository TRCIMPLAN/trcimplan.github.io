<?php
/**
 * TrcIMPLAN Sitio Web - VialidadMayo2018
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
 * Clase VialidadMayo2018
 */
class VialidadMayo2018 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = '¿Cómo manejamos los laguneros?';
        $this->autor                      = 'Dr. Iván de Luna Aldape';
        $this->fecha                      = '2018-05-09T12:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'vialidad-mayo-2018';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El total de los accidentes reportados en el Tribunal de Justicia Municipal para el primer trimestre del 2018 es de 1,106 choques, 40 atropellos y 40 volcaduras. La mayoría de las causas son falta de precaución (60%), seguido de no respetar las señales de alto o cruceros semaforizados (30%).';
        $this->claves                     = 'IMPLAN, Torreon, vialidad, accidentes viales, manejamos ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/VialidadMayo2018.md';
        // Para el Organizador
        $this->categorias                 = array('Vialidad');
        $this->fuentes                    = array('Tribunal de Justicia Municipal','INEGI');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase VialidadMayo2018

?>
