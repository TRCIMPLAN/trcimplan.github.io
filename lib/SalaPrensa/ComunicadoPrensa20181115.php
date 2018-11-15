<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20181115
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
 * Clase ComunicadoPrensa20181115
 */
class ComunicadoPrensa20181115 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN presentó conferencia “La cultura del árbol: cómo reconstruir la ciudad y sus espacios públicos"';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2018-11-15T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2018-11-15-la-cultura-del-arbol';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Instituto Municipal de Planeación y Competitividad (IMPLAN) de Torreón en conjunto con el arborista Cosijoopii Montero, quien es director de Reforestación Extrema A.C., presentaron en el Instituto Tecnológico de Estudios Superiores de Monterrey (ITESM) Campus Laguna, la conferencia “La cultura del árbol: cómo reconstruir la ciudad y sus espacios públicos”.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20181115.md';
        // Para el Organizador
        $this->categorias                 = array('Medio Ambiente');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20181115

?>
