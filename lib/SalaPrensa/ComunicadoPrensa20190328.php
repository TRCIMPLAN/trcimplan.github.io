<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20190328
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

namespace SalaPrensa;

/**
 * Clase ComunicadoPrensa20190328
 */
class ComunicadoPrensa20190328 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Presentan el Diagnóstico Municipal sobre Violencia de Género contra la Mujer dentro de la 3ra. Sesión del Consejo Directivo del IMPLAN';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2019-03-28T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2019-03-28-tercera-sesion-consejo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Director del Instituto Municipal de Planeación y Competitividad, Eduardo Holguín, presentó a los integrantes del Consejo Directivo los resultados del Diagnóstico Municipal sobre Violencia de Género contra la Mujer en Torreón, mismo que fue realizado por ésta dependencia en conjunto con el Instituto Municipal de la Mujer.';
        $this->claves                     = 'IMPLAN, Torreon, Consejo directivo implan';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20190328.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20190328

?>
