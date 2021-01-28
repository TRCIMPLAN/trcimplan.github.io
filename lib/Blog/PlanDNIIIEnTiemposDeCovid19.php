<?php
/**
 * TrcIMPLAN Sitio Web - PlanDNIIIEnTiemposDeCovid19
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

namespace Blog;

/**
 * Clase PlanDNIIIEnTiemposDeCovid19
 */
class PlanDNIIIEnTiemposDeCovid19 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Plan DN-III-E en tiempos de Covid-19';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2021-01-28T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'plan-dn-iii-en-tiempos-de-covid19-enero-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Plan DN-III-E es el instrumento operativo fundamental de la Secretaría de la Defensa Nacional que establece los lineamientos generales a los organismos del Ejército y Fuerza Aérea Mexicanos para el auxilio a la población en casos de desastre, optimizando el empleo de los recursos humanos y materiales para brindar una atención oportuna, eficaz y eficiente, así como preservar la integridad física de las personas, sus bienes y su entorno.';
        $this->claves                     = 'IMPLAN, Torreon, plan, dn-iii, covid, covid-19';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PlanDNIIIEnTiemposDeCovid19.md';
        // Para el Organizador
        $this->categorias                 = array('Población','Salud');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase PlanDNIIIEnTiemposDeCovid19

?>
