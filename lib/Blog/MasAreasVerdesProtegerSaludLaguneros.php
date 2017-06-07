<?php
/**
 * TrcIMPLAN Sitio Web - Más áreas verdes para proteger la salud de los laguneros
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
 * Clase MasAreasVerdesProtegerSaludLaguneros
 */
class MasAreasVerdesProtegerSaludLaguneros extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Más áreas verdes para proteger la salud de los laguneros';
        $this->autor                      = 'Arq. Susana Montano';
        $this->fecha                      = '2015-01-14T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'mas-areas-verdes-proteger-salud-laguneros';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion                = 'Manejar el tema de protección a la salud como punto estratégico en materia de ordenamiento territorial y urbano representa una oportunidad para el desarrollo de la región.';
        $this->claves                     = 'IMPLAN, Torreon, Areas Verdes, Salud, Ordenamiento, Territorial, Urbano';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/MasAreasVerdesProtegerSaludLaguneros.md';
        // Para el Organizador
        $this->categorias                 = array('Recursos Naturales', 'Salud');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase MasAreasVerdesProtegerSaludLaguneros

?>
