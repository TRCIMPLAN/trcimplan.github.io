<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20200520Enoe1T
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
 * Clase ComunicadoPrensa20200520Enoe1T
 */
class ComunicadoPrensa20200520Enoe1T extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Mejora el salario promedio mensual en el área metropolitana de Torreón al primer trimestre de 2020.';
        $this->autor                      = 'Lic. Iván de Luna Aldape';
        $this->fecha                      = '2020-05-20T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-05-20-comunicado-enoe1t';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Al cierre del primer trimestre de 2020 la Encuesta Nacional de Ocupación y Empleo (ENOE) de INEGI, muestra indicadores de mercado laboral con los siguientes cambios para el área metropolitana de Torreón';
        $this->claves                     = 'IMPLAN, Torreon, enoe, empleo, laboral';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20200520Enoe1T.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20200520Enoe1T

?>
