<?php
/**
 * TrcIMPLAN Sitio Web - El papel de la educación en el desarrollo económico
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
 * Clase PapelEducacionDesarrolloEconomico
 */
class PapelEducacionDesarrolloEconomico extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El papel de la educación en el desarrollo económico';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2015-04-14T13:25';
        // El nombre del archivo a crear
        $this->archivo                    = 'papel-educacion-desarrollo-economico';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Cómo la educación contribuye al crecimiento económico y la importancia de implementar políticas públicas para incrementar su calidad.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PapelEducacionDesarrolloEconomico.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Educación');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase PapelEducacionDesarrolloEconomico

?>
