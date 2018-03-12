<?php
/**
 * TrcIMPLAN Sitio Web - LaCuencaAltaDelNazas
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
 * Clase LaCuencaAltaDelNazas
 */
class LaCuencaAltaDelNazas extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Cuenca Alta del Nazas';
        $this->autor                      = 'Q.F.B. Susana Estens de la Garza';
        $this->fecha                      = '2018-03-12T09:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-cuenca-alta-del-nazas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El jueves 8 y viernes 9 de marzo de este año, tuve la oportunidad de visitar la cuenca alta del Río Nazas.';
        $this->claves                     = 'IMPLAN, Torreon, Cuenca, Nazas, Irritila';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaCuencaAltaDelNazas.md';
        // Para el Organizador
        $this->categorias                 = array('Medio Ambiente', 'Recursos Naturales', 'Servicios Públicos');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaCuencaAltaDelNazas

?>
