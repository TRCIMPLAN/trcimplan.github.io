<?php
/**
 * TrcIMPLAN Sitio Web - La Laguna recupera competitividad
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
 * Clase LaLagunaRecuperaCompetitividad
 */
class LaLagunaRecuperaCompetitividad extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Laguna recupera competitividad';
        $this->autor                      = array('Lic. Rodrigo González Morales', 'Lic. Luis A. Gutiérrez Arizpe');
        $this->fecha                      = '2016-09-13T16:25';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-laguna-recupera-competitividad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Índice de Competitividad Urbana (ICU) 2016 presentado por el Instituto Mexicano para la Competitividad (IMCO), muestra que La Zona Metropolitana de la laguna recupero 24 puestos en competitividad.';
        $this->claves                     = 'IMPLAN, Torreon, IMCO, ICU, Competitividad, Urbana, La Laguna';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaLagunaRecuperaCompetitividad.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Índice de Competitividad Urbana');
        $this->fuentes                    = array('IMCO');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaLagunaRecuperaCompetitividad

?>
