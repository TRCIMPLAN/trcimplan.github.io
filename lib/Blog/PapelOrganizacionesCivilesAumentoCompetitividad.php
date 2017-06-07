<?php
/**
 * TrcIMPLAN Sitio Web - El Papel de las Organizaciones Civiles en el aumento de la competitividad
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
 * Clase PapelOrganizacionesCivilesAumentoCompetitividad
 */
class PapelOrganizacionesCivilesAumentoCompetitividad extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El papel de las Organizaciones Civiles en el aumento del bienestar y competitividad';
        $this->autor                      = 'Ing. Guillermo Valdés Lozano';
        $this->fecha                      = '2014-12-10T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'papel-organizaciones-civiles-aumento-competitividad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En toda ciudad, estado o país debe haber sinergia entre ciudadanos, asociaciones civiles y empresas para definir programas a largo plazo que mejoren la calidad y el bienestar de todos nosotros.';
        $this->claves                     = 'IMPLAN, Torreon, Organizaciones, Civiles, Empresas, Programas, Bienestar';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PapelOrganizacionesCivilesAumentoCompetitividad.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Competitividad', 'Educación');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase PapelOrganizacionesCivilesAumentoCompetitividad

?>
