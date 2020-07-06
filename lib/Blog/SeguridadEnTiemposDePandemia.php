<?php
/**
 * TrcIMPLAN Sitio Web - SeguridadEnTiemposDePandemia
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
 * Clase SeguridadEnTiemposDePandemia
 */
class SeguridadEnTiemposDePandemia extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La seguridad en tiempos de Pandemia';
        $this->autor                      = 'Lic. Pedro Eleazar González Valdez';
        $this->fecha                      = '2020-07-06T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-seguridad-en-tiempos-de-pandemia-julio-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Mientras que la pandemia generada por el COVID-19 ha traído consecuencias duras para el mundo, no todo ha sido desfavorable, tal es el caso de la seguridad, la cual ha reflejado un efecto positivo a causa de las acciones preventivas.';
        $this->claves                     = 'IMPLAN, Torreon, seguridad, pandemia, covid-19';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/SeguridadEnTiemposDePandemia.md';
        // Para el Organizador
        $this->categorias                 = array('Seguridad', 'Población');
        $this->fuentes                    = array('SESNSP');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase SeguridadEnTiemposDePandemia

?>
