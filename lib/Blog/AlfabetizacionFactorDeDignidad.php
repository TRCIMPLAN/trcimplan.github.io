<?php
/**
 * TrcIMPLAN Sitio Web - AlfabetizacionFactorDeDignidad
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
 * Clase AlfabetizacionFactorDeDignidad
 */
class AlfabetizacionFactorDeDignidad extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Alfabetización, factor de dignidad y derechos humanos';
        $this->autor                      = 'Lic. Olga Alejandra Noriega Aranda';
        $this->fecha                      = '2022-09-12T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'alfabetizacion-factor-de-dignidad-sep-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Al hablar de alfabetización, nos referimos a la acción de adquirir capacidades básicas de cálculo, lectura y escritura. De acuerdo a La UNESCO, cada 8 de septiembre se celebra el Día de la Alfabetización con el objetivo de recordar la importancia de un mayor alcance y oferta de programas que faciliten el aprendizaje y desarrollo de competencias básicas en la lectoescritura.';
        $this->claves                     = 'IMPLAN, Torreon, alfabetizacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/AlfabetizacionFactorDeDignidad.md';
        // Para el Organizador
        $this->categorias                 = array('Educación');
        $this->fuentes                    = array('CONAPO');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase AlfabetizacionFactorDeDignidad

?>
