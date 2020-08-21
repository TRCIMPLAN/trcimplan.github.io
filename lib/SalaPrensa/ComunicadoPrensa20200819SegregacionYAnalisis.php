<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20200819SegregacionYAnalisis
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
 * Clase ComunicadoPrensa20200819SegregacionYAnalisis
 */
class ComunicadoPrensa20200819SegregacionYAnalisis extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN Torreón participa en mesa de análisis “Segregación y Fragmentación Urbana: acciones desde gobiernos locales”';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2020-08-19T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-08-19-segregacion-y-fragmentacion-urbana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El director del Instituto Municipal de Planeación y Competitividad de Torreón (IMPLAN), Eduardo Holguín, participó en la mesa de análisis: “Segregación y Fragmentación Urbana: acciones desde gobiernos locales”, evento a nivel nacional organizado por Centro Urbano, un grupo multiplataforma de comunicación especializado.';
        $this->claves                     = 'IMPLAN, Torreon, urbana, segregacion, analisis, centro urbano';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20200819SegregacionYAnalisis.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20200819SegregacionYAnalisis

?>
