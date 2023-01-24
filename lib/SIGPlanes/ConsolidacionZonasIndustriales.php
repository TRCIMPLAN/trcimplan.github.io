<?php
/**
 * TrcIMPLAN Sitio Web - ConsolidacionZonasIndustriales
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

namespace SIGPlanes;

/**
 * Clase ConsolidacionZonasIndustriales
 */
class ConsolidacionZonasIndustriales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Programa de Consolidacion de Zonas Industriales de la Laguna';
        $this->fecha                     = '2023-01-24T12:00';
        // El nombre del archivo a crear
        $this->archivo                   = ''; // No hay archivo HTML a crear, porque es un vínculo de descarga
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Este programa establece la base sobre la que deben de desarrollarse las Zonas, Áreas y Polígonos Industriales de la región conforme a una política económica y social que potencialice las características clave de las empresas y trabajadores en un entorno de competencia global. - PDF 23 MB.';
        $this->claves                    = 'IMPLAN, Torreon, zonas, industriales, laguna, Municipio';
        // Para el Organizador
        $this->categorias                = array('Gobierno', 'Infraestructura', 'Población');
        $this->fuentes                   = array('IMPLAN');
        $this->regiones                  = array('Torreón');
        // Imágenes
        $this->imagen                    = 'consolidacion-zonas-industriales-2023/imagen.jpg';
        $this->imagen_previa             = 'consolidacion-zonas-industriales-2023/imagen-previa.png';
        // URL de destino
        $this->url                       = 'https://www.trcimplan.gob.mx/sig-planes/czi.pdf';
        $this->url_etiqueta              = 'Descargar PDF 23 MB';
    } // constructor

} // Clase ConsolidacionZonasIndustriales

?>
