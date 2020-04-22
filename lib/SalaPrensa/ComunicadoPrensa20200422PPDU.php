<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20200422PPDU
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
 * Clase ComunicadoPrensa20200422PPDU
 */
class ComunicadoPrensa20200422PPDU extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Avances del Programa Parcial de Desarrollo Urbano de la Zona Norte de Torreón';
        $this->autor                      = array('Lic. Maira Ivonne Flores Reyes', 'Arq. José Antonio Ramírez Reyes');
        $this->fecha                      = '2020-04-22T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-04-22-comunicado-ppdu';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Avances del Programa Parcial de Desarrollo Urbano de la Zona Norte de Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, zona norte, desarrollo urbano';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20200422PPDU.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ComunicadoPrensa20200422PPDU

?>
