<?php
/**
 * TrcIMPLAN Sitio Web - ReservaEcologicaMunicipalSierraYCanonDeJimulco
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
 * Clase ReservaEcologicaMunicipalSierraYCanonDeJimulco
 */
class ReservaEcologicaMunicipalSierraYCanonDeJimulco extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reserva Ecológica Municipal Sierra y Cañón de Jimulco';
        $this->autor                      = 'Ing. Guillermo Valdés Lozano';
        $this->fecha                      = '2017-07-11T20:40';
        // El nombre del archivo a crear
        $this->archivo                    = 'reserva-ecologica-municipal-sierra-y-canon-de-jimulco';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Reserva Ecológica Municipal Sierra y Cañón de Jimulco es un área natural protegida de 60,458.26 hectáreas que representan el 44.74% de la superficie del municipio.';
        $this->claves                     = 'IMPLAN, Torreon, Reserva, Ecologica, Municipal, Sierra, Cañón, Jimulco';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ReservaEcologicaMunicipalSierraYCanonDeJimulco.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        // Para el Organizador
        $this->categorias                 = array('Recursos Naturales');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase ReservaEcologicaMunicipalSierraYCanonDeJimulco

?>
