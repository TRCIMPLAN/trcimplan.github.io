<?php
/**
 * TrcIMPLAN Sitio Web - Torreón, municipio competitivo según datos del IMCO
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
 * Clase TorreonMunicipioCompetitivoSegunDatosDelIMCO
 */
class TorreonMunicipioCompetitivoSegunDatosDelIMCO extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón, municipio competitivo según datos del IMCO';
        $this->autor                      = 'Lic. Rodrigo González Morales';
        $this->fecha                      = '2016-11-01T12:45';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-municipio-competitivo-segun-datos-del-imco';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'De acuerdo con los datos y metodología del IMCO, comparando los 375 municipios de las zonas metropolitanas del país, el municipio de Torreón ocupa el lugar 32.';
        $this->claves                     = 'IMPLAN, Torreon, Municipio, Competitivo, IMCO';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonMunicipioCompetitivoSegunDatosDelIMCO.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Índice de Competitividad Urbana');
        $this->fuentes                    = array('IMCO', 'IMPLAN');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros');
    } // constructor

} // Clase TorreonMunicipioCompetitivoSegunDatosDelIMCO

?>
