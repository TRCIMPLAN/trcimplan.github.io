<?php
/**
 * TrcIMPLAN Sitio Web - ZML Vencimos Nos Adaptamos Al Desierto
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
 * Clase ZMLVencimosNosAdaptamosAlDesierto
 */
class ZMLVencimosNosAdaptamosAlDesierto extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'ZML: <del>Vencimos</del> / Nos adaptamos al desierto';
        $this->autor                      = 'Lic. Luis A. Gutiérrez Arizpe';
        $this->fecha                      = '2015-10-07T13:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'zml-vencimos-nos-adaptamos-al-desierto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El tema de la disponibilidad del agua y su calidad, está relacionado estrechamente con la calidad de vida que una ciudad puede otorgar a sus habitantes.';
        $this->claves                     = 'IMPLAN, Torreon, Agua';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ZMLVencimosNosAdaptamosAlDesierto.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Recursos Naturales');
        $this->fuentes                    = array('Comisión Nacional del Agua (CONAGUA)', 'SIMAS');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ZMLVencimosNosAdaptamosAlDesierto

?>
