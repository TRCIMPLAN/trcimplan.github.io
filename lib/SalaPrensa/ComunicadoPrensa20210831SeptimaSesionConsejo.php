<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20210831SeptimaSesionConsejo
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
 * Clase ComunicadoPrensa20210831SeptimaSesionConsejo
 */
class ComunicadoPrensa20210831SeptimaSesionConsejo extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Consejo Directivo del IMPLAN Torreón se reúne con Alcalde en turno y Alcalde electo.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2021-08-31T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2021-08-31-septima-sesion-consejo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Consejo Directivo del Instituto Municipal de Planeación y Competitividad de Torreón (IMPLAN), se reunió con el actual alcalde de Torreón, Lic. Jorge Zermeño Infante; y con el alcalde electo, Lic. Román Alberto Cepeda con el objetivo de dar a conocer qué es y cómo funciona el IMPLAN, así como los proyectos que se han realizado desde el inicio del Instituto y los que se tienen contemplados para este 2022.';
        $this->claves                     = 'IMPLAN, Torreon, sesion, consejo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20210831SeptimaSesionConsejo.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ComunicadoPrensa20210831SeptimaSesionConsejo

?>
