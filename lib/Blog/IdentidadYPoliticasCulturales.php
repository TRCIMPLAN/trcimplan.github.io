<?php
/**
 * TrcIMPLAN Sitio Web - IdentidadYPoliticasCulturales
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
 * Clase IdentidadYPoliticasCulturales
 */
class IdentidadYPoliticasCulturales extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Identidad y políticas culturales';
        $this->autor                      = 'Mtro. Aldo Valdés López';
        $this->fecha                      = '2022-12-15T13:15';
        // El nombre del archivo a crear
        $this->archivo                    = 'identidad-y-politicas-culturales-dic-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'A pesar de ser joven, la Zona Metropolitana de La Laguna cuenta con una identidad cultural muy peculiar.';
        $this->claves                     = 'IMPLAN, Torreon, cultura, identidad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/IdentidadYPoliticasCulturales.md';
        // Para el Organizador
        $this->categorias                 = array('Cultura');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase IdentidadYPoliticasCulturales

?>
