<?php
/**
 * TrcIMPLAN Sitio Web - Normatividad Urbana: el reto de las ciudades mexicanas
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
 * Clase NormatividadUrbanaElRetoDeLasCiudadesMexicanas
 */
class NormatividadUrbanaElRetoDeLasCiudadesMexicanas extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Normatividad Urbana: el reto de las ciudades mexicanas';
        $this->autor                      = 'Ing. Luis Campos Hinojosa';
        $this->fecha                      = '2016-03-17T10:45';
        // El nombre del archivo a crear
        $this->archivo                    = 'normatividad-urbana-el-reto-de-las-ciudades-mexicanas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Reglamento de Desarrollo Urbano, Zonificación, Uso de Suelo y Construcción, será vanguardista y congruente con la realidad urbana del municipio. Incorpora nuevos conceptos urbanísticos y será compatible con el Plan Director de Desarrollo Urbano.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/NormatividadUrbanaElRetoDeLasCiudadesMexicanas.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Infraestructura');
        $this->fuentes                    = array('ONU-Habitat');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase NormatividadUrbanaElRetoDeLasCiudadesMexicanas

?>
