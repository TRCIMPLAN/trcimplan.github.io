<?php
/**
 * Sitio Web - DiagnosticoPoliticaIndustrial
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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

namespace SalaPrensa;

/**
 * Clase DiagnosticoPoliticaIndustrial
 */
class DiagnosticoPoliticaIndustrial extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN desarrollará Diagnóstico de Política Industrial';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2016-04-13T13:10';
        // El nombre del archivo a crear
        $this->archivo                    = '2016-04-13-diagnostico-politica-industrial';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Alicia Valdez Ibarra, encargada de indicadores económicos del IMPLAN, dio a conocer ante el Cabildo de Torreón el avance de este proyecto, que consiste en su primera etapa en la elaboración de un diagnóstico para conocer las características de cada industria.';
        $this->claves                     = 'IMPLAN, Torreon, Diagnostico, Politica, Industrial';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Sala de Prensa';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/DiagnosticoPoliticaIndustrial.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase DiagnosticoPoliticaIndustrial

?>
