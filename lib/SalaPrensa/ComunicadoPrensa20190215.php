<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20190215
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
 * Clase ComunicadoPrensa20190215
 */
class ComunicadoPrensa20190215 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Indicadores de empleo en el área metropolitana de Torreón al cuarto trimestre de 2018.';
        $this->autor                      = array('Lic. Alicia Valdez Ibarra', 'Lic. Iván de Luna Aldape');
        $this->fecha                      = '2019-02-15T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2019-02-15-enoe-4to-trim-2018';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Al cierre del cuarto trimestre de 2018, la Encuesta Nacional de Ocupación y Empleo (ENOE), muestra indicadores de mercado laboral.';
        $this->claves                     = 'IMPLAN, Torreon, enoe, empleo torreon';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20190215.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo');
        $this->fuentes                    = array('inegi');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ComunicadoPrensa20190215

?>
