<?php
/**
 * TrcIMPLAN Sitio Web - La Laguna: Metrópoli del Conocimiento
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
 * Clase LaLagunaMetropoliDelConocimiento
 */
class LaLagunaMetropoliDelConocimiento extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Laguna: Metrópoli del Conocimiento';
        $this->autor                      = 'Lic. Eduardo Holguín Zehfuss';
        $this->fecha                      = '2014-04-28T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-laguna-metropoli-del-conocimiento';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Las mega tendencias del Tercer Milenio nos indican la necesidad de integrar a La Laguna a la economía del conocimiento.';
        $this->claves                     = 'IMPLAN, Torreon, Conocimiento, Tecnologias, Informacion, Comunicacion, TICs';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/LaLagunaMetropoliDelConocimiento.html';
        // Para el Organizador
        $this->categorias                 = array('Innovación', 'Empresas');
        $this->fuentes                    = array();
        $this->regiones                   = array('La Laguna');
    } // constructor

} // Clase LaLagunaMetropoliDelConocimiento

?>
