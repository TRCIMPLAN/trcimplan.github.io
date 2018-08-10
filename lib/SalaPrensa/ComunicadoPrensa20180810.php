<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20180810
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
 * Clase ComunicadoPrensa20180810
 */
class ComunicadoPrensa20180810 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Presentan colaboración entre IMPLAN y el Instituto Municipal de la Mujer en Torreón.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2018-08-10T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2018-08-10-comunicado-prensa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Durante la Séptima Sesión del Consejo del IMPLAN Torreón, se anunció la colaboración entre el Instituto de Planeación y Competitividad y el Instituto Municipal de la Mujer para realizar el Diagnóstico sobre la Violencia Contra las Mujeres, donde los principales objetivos son cumplir con las observaciones de la solicitud de Alerta de Violencia de Género contra las Mujeres, identificar y crear indicadores, actualizar datos, establecer una línea de base de acción y generar políticas públicas.';
        $this->claves                     = 'IMPLAN, Torreon, colaboracion, violencia';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20180810.md';
        // Para el Organizador
        $this->categorias                 = array('Genero', 'Grupos Vulnerables');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20180810

?>
