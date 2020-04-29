<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20200429VisionMetropoli
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
 * Clase ComunicadoPrensa20200429VisionMetropoli
 */
class ComunicadoPrensa20200429VisionMetropoli extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El Consejo Juvenil del IMPLAN lleva a cabo acciones permanentes';
        $this->autor                      = array('Lic. Maira Ivonne Flores Reyes','Lic. Frida García Gutiérrez');
        $this->fecha                      = '2020-04-29T11:30';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-04-29-comunicado-vision-metropoli';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Instituto Municipal de Planeación y Competitividad de Torreón (IMPLAN) a través de su Consejo de Jóvenes “Visión Metrópoli” continúa trabajando en diferentes proyectos por medio de herramientas virtuales a causa de la emergencia sanitaria actual.';
        $this->claves                     = 'IMPLAN, Torreon, jovenes, vision metropoli';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20200429VisionMetropoli.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20200429VisionMetropoli

?>
