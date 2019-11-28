<?php
/**
 * TrcIMPLAN Sitio Web - UsoDeSueloMixtoComoPoliticaDeDesarrolloSostenible
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
 * Clase UsoDeSueloMixtoComoPoliticaDeDesarrolloSostenible
 */
class UsoDeSueloMixtoComoPoliticaDeDesarrolloSostenible extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El Suelo Mixto como Política de Desarrollo Sostenible.';
        $this->autor                      = 'Arq. José Antonio Ramírez Reyes';
        $this->fecha                      = '2019-11-26T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'suelo-mixto-como-politica-de-desarrollo-sostenible-nov2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '“ONU-HABITAT impulsa, a través de la Nueva Agenda Urbana en su numeral 51, diseños urbanos que apoyan el ordenamiento a través de policentrismos y usos mixtos”.';
        $this->claves                     = 'IMPLAN, Torreon, usos mixtos, ordenamiento';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/UsoDeSueloMixtoComoPoliticaDeDesarrolloSostenible.md';
        // Para el Organizador
        $this->categorias                 = array('Vivienda', 'Población');
        $this->fuentes                    = array('Onuhabitat', 'Inegi', 'Implan Torreón');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase UsoDeSueloMixtoComoPoliticaDeDesarrolloSostenible

?>
