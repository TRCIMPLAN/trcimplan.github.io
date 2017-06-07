<?php
/**
 * TrcIMPLAN Sitio Web - Hacia una Conurbación Sustentable de La Laguna
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
 * Clase HaciaUnaConurbacionSustentableDeLaLaguna
 */
class HaciaUnaConurbacionSustentableDeLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Hacia una Conurbación Sustentable de La Laguna';
        $this->autor                      = 'Arq. Jair Miramontes Chávez';
        $this->fecha                      = '2015-07-14T12:40';
        // El nombre del archivo a crear
        $this->archivo                    = 'hacia-una-conurbacion-sustentable-de-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Laguna presenta las problemáticas comunes que tienen la mayoría de las Zonas Metropolitanas importantes del país.';
        $this->claves                     = 'IMPLAN, Torreon, Sustentabilidad, Urbanizacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/HaciaUnaConurbacionSustentableDeLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Intraestructura', 'Recursos Naturales', 'Vivienda');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase HaciaUnaConurbacionSustentableDeLaLaguna

?>
