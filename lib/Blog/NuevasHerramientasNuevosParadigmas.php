<?php
/**
 * TrcIMPLAN Sitio Web - Nuevas herramientas para Nuevos Paradigmas
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
 * Clase NuevasHerramientasNuevosParadigmas
 */
class NuevasHerramientasNuevosParadigmas extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Nuevas herramientas para Nuevos Paradigmas';
        $this->autor                      = 'Arq. Daniela Patricia Corral Hernández';
        $this->fecha                      = '2014-09-23T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'nuevas-herramientas-nuevos-paradigmas';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion                = 'Hoy en día, con un teléfono inteligente o tablet se puede consultar la versión móvil de un SIG para recaudar información, emitir un diagnóstico y trabajar en planes programas y proyectos futuros.';
        $this->claves                     = 'IMPLAN, Torreon, Informacion, Geografica, Movil';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/NuevasHerramientasNuevosParadigmas.html';
        // Para el Organizador
        $this->categorias                 = array('Innovación');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase NuevasHerramientasNuevosParadigmas

?>
