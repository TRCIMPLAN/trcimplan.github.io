<?php
/**
 * TrcIMPLAN Sitio Web - Sistema de derecho y sociedad incluyente: indicadores de competitividad a la alza en 2014
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
 * Clase SistemaDerechoSociedadIncluyente
 */
class SistemaDerechoSociedadIncluyente extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Sistema de derecho y sociedad incluyente: indicadores de competitividad a la alza en 2014';
        $this->autor                      = 'Lic. Rodrigo González Morales';
        $this->fecha                      = '2015-04-29T09:45';
        // El nombre del archivo a crear
        $this->archivo                    = 'sistema-derecho-sociedad-incluyente';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion                = 'Los indicadores que han mostrado tendencias a aumentar o disminuir que tienen que ver con la competitividad.';
        $this->claves                     = 'IMPLAN, Torreon, Competitividad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/SistemaDerechoSociedadIncluyente.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase SistemaDerechoSociedadIncluyente

?>
