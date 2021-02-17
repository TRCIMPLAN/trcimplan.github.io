<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20210217FichaEnoe
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
 * Clase ComunicadoPrensa20210217FichaEnoe
 */
class ComunicadoPrensa20210217FichaEnoe extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Disminuye tasa de desempleo en Torreón y su área metropolitana.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2021-02-17T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2021-02-17-ficha-enoe';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Encuesta Nacional de Ocupación y Empleo (Nueva Edición) (ENOE-N) del INEGI, publicó su reporte respecto al cuarto trimestre del año 2020. Por ello, se realiza una comparación con el periodo inmediato anterior, tercer trimestre de 2020, y el mismo periodo del año pasado (2019T4).';
        $this->claves                     = 'IMPLAN, Torreon, enoe, empleo, inegi';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20210217FichaEnoe.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20210217FichaEnoe

?>
