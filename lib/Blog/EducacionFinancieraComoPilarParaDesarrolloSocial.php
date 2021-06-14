<?php
/**
 * TrcIMPLAN Sitio Web - EducacionFinancieraComoPilarParaDesarrolloSocial
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
 * Clase EducacionFinancieraComoPilarParaDesarrolloSocial
 */
class EducacionFinancieraComoPilarParaDesarrolloSocial extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La educación financiera como pilar para el desarrollo social';
        $this->autor                      = 'Jorge Ángel Olvera Morales';
        $this->fecha                      = '2021-06-14T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'educacion-financiera-como-pilar-desarrollo-social-jun-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Hablar de educación financiera en nuestro país es algo que ha tomado bastante relevancia en los últimos años, e instrumentos como la Encuesta Nacional de Inclusión Financiera (ENIF) nos ha permitido evaluar y sobre todo medir los avances en el tema de inclusión en los servicios financieros de los y las mexicanas, lo cual nos permite saber “¿Dónde estamos parados? Y ¿Hacía donde debemos ir?” en el tema, en nuestro país. ';
        $this->claves                     = 'IMPLAN, Torreon, educacion, financiera, desarrollo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EducacionFinancieraComoPilarParaDesarrolloSocial.md';
        // Para el Organizador
        $this->categorias                 = array('Educación');
        $this->fuentes                    = array('enif');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase EducacionFinancieraComoPilarParaDesarrolloSocial

?>
