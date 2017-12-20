<?php
/**
 * TrcIMPLAN Sitio Web - ProblematicaDelAguaEnLaComarcaLagunera
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
 * Clase ProblematicaDelAguaEnLaComarcaLagunera
 */
class ProblematicaDelAguaEnLaComarcaLagunera extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Problemática del agua en la Comarca Lagunera';
        $this->autor                      = array('Arq. Cecilio Pedro Secunza Schott', 'Lic. Adriana Vargas Flores');
        $this->fecha                      = '2017-10-25T14:55';
        // El nombre del archivo a crear
        $this->archivo                    = 'problematica-del-agua-en-la-comarca-lagunera';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '¿De dónde viene el agua que utilizamos en la Zona Metropolitana? Son las cuencas de los ríos Nazas y Aguanaval las que irrigan nuestra región, sin embargo al llegar al área urbana existen una serie de desequilibrios en el uso de este vital recurso.';
        $this->claves                     = 'IMPLAN, Torreon, Agua';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ProblematicaDelAguaEnLaComarcaLagunera.md';
        // Para el Organizador
        $this->categorias                 = array('Medio Ambiente', 'Recursos Naturales');
        $this->fuentes                    = array('CONAGUA');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ProblematicaDelAguaEnLaComarcaLagunera

?>
