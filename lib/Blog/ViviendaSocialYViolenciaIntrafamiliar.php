<?php
/**
 * TrcIMPLAN Sitio Web - Vivienda Social y Violencia Intrafamiliar
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
 * Clase ViviendaSocialYViolenciaIntrafamiliar
 */
class ViviendaSocialYViolenciaIntrafamiliar extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Vivienda Social y Violencia Intrafamiliar';
        $this->autor                      = 'Lic. Alfredo Viesca Domínguez';
        $this->fecha                      = '2015-09-08T11:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'vivienda-social-y-violencia-intrafamiliar';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En la medida en que los espacios habitacionales no sean lo suficientemente amplios, se genera una alta probabilidad de que la violencia aparezca.';
        $this->claves                     = 'IMPLAN, Torreon, Vivienda, Social, Violencia, Intrafamiliar, Espacio, Habitacional';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ViviendaSocialYViolenciaIntrafamiliar.md';
        // Para el Organizador
        $this->categorias                 = array('Delincuencia', 'Seguridad', 'Vivienda');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase ViviendaSocialYViolenciaIntrafamiliar

?>
