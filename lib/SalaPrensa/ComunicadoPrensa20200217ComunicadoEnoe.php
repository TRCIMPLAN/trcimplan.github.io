<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20200217ComunicadoEnoe
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
 * Clase ComunicadoPrensa20200217ComunicadoEnoe
 */
class ComunicadoPrensa20200217ComunicadoEnoe extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Disminuye la tasa de desempleo en la Zona Metropolitana de La Laguna (ZML), al cuarto trimestre de 2019';
        $this->autor                      = 'Lic. Iván de Luna Aldape';
        $this->fecha                      = '2020-02-17T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-02-17-comunicado-enoe';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Al cierre del cuarto trimestre de 2019, la Encuesta Nacional de Ocupación y Empleo (ENOE) publicada por el INEGI; muestra indicadores de mercado laboral con los siguientes cambios para la ZML.';
        $this->claves                     = 'IMPLAN, Torreon, enoe, zml';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20200217ComunicadoEnoe.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20200217ComunicadoEnoe

?>
