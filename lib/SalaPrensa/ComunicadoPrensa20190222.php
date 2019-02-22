<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20190222
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
 * Clase ComunicadoPrensa20190222
 */
class ComunicadoPrensa20190222 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN presenta conferencia “Islas de seguridad y distinción. Las urbanizaciones cerradas en la frontera noroeste de México”.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2019-02-22T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2019-02-22-conferencia-urbanizaciones-cerradas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Instituto Municipal de Planeación y Competitividad de Torreón en conjunto con el Dr. Jesús Ángel Enríquez Acosta, Investigador en Ciencias Políticas y Sociales por la Universidad Nacional Autónoma de México, presentaron hoy en la Universidad Iberoamericana de Torreón la conferencia “Islas de seguridad y distinción. Las urbanizaciones cerradas en la frontera noroeste de México”.';
        $this->claves                     = 'IMPLAN, Torreon, fraccionamientos cerrados, fraccionamientos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20190222.md';
        // Para el Organizador
        $this->categorias                 = array('Vivienda');
        $this->fuentes                    = array('');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ComunicadoPrensa20190222

?>
