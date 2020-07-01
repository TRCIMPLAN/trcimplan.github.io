<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20200630TerceraSesionConsejo
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
 * Clase ComunicadoPrensa20200630TerceraSesionConsejo
 */
class ComunicadoPrensa20200630TerceraSesionConsejo extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Presentan en Sesión de Consejo del IMPLAN el “Programa Parcial de Desarrollo Urbano del Centro Histórico de Torreón” y los resultados de la convocatoria “Diseño Mi Espacio”.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2020-06-30T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-06-30-3ra-sesion-consejo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Durante la Tercera Sesión del Consejo Directivo del Instituto Municipal de Planeación y Competitividad de Torreón (IMPLAN), la cual se realizó de manera virtual, se presentó a las Consejeras y Consejeros los avances del Programa Parcial de Desarrollo Urbano del Centro Histórico, así como los resultados de la convocatoria: Concurso de mobiliario modular para estudiar y/o trabajar en casa “Diseño Mi Espacio, edición 2020”.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20200630TerceraSesionConsejo.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ComunicadoPrensa20200630TerceraSesionConsejo

?>
