<?php
/**
 * TrcIMPLAN Sitio Web - La industria metalmecánica y La Laguna
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
 * Clase IndustriaMetalmecanicaLaLaguna
 */
class IndustriaMetalmecanicaLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La industria metalmecánica y La Laguna';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2014-11-12T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'industrial-metalmecanica-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'A diferencia del año 2013 cuando la industria metalmecánica creció 4% a nivel nacional, la directora de Fabetch México pronosticó en Julio un crecimiento de 8% para el presente año.';
        $this->claves                     = 'IMPLAN, Torreon, Industria, Metalmecánica, Empleo';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/IndustriaMetalmecanicaLaLaguna.html';
        // Para el Organizador
        $this->categorias                 = array('Empresas', 'Empleo');
        $this->fuentes                    = array('Secretaría de Economía', 'INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio');
    } // constructor

} // Clase IndustriaMetalmecanicaLaLaguna

?>
