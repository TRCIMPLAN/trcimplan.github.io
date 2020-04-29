<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20200428MonitorEmpleoYSeguridad
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
 * Clase ComunicadoPrensa20200428MonitorEmpleoYSeguridad
 */
class ComunicadoPrensa20200428MonitorEmpleoYSeguridad extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Actualización del Monitor de Empleo y Seguridad en La Laguna.';
        $this->autor                      = array('Lic. Maira Ivonne Flores Reyes','Lic. Iván de Luna Aldape');
        $this->fecha                      = '2020-04-29T09:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-04-29-comunicado-monitor-empleo-y-seguridad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La dirección de Investigación Estratégica perteneciente al Instituto Municipal de Planeación y Competitividad de Torreón (IMPLAN) se encuentra trabajando, entre otros proyectos, en el Monitor y las Estadísticas sobre el Empleo y la Seguridad en La Laguna.';
        $this->claves                     = 'IMPLAN, Torreon, monitores, empleo, seguridad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20200428MonitorEmpleoYSeguridad.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20200428MonitorEmpleoYSeguridad

?>
