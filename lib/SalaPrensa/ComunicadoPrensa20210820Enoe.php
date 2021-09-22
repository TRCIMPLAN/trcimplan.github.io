<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20210820Enoe
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
 * Clase ComunicadoPrensa20210820Enoe
 */
class ComunicadoPrensa20210820Enoe extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ingreso promedio aumenta y desempleo disminuye en Torreón y el Área Metropolitana de La Laguna.';
        $this->autor                      = array('Lic. Maira Ivonne Flores Reyes', 'Lic. Pedro Eleazar González Valdez');
        $this->fecha                      = '2021-08-20T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2021-08-20-comunicado-enoe';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Encuesta Nacional de Ocupación y Empleo (Nueva Edición) (ENOE-N) del INEGI publicó su reporte respecto al segundo trimestre del año 2021.';
        $this->claves                     = 'IMPLAN, Torreon, enoe, inegi';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20210820Enoe.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20210820Enoe

?>
