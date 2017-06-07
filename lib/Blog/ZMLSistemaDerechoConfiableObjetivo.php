<?php
/**
 * TrcIMPLAN Sitio Web - La Zona Metropolitana de La Laguna y sus municipios en Sistema de Derecho Confiable y Objetivo
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
 * Clase ZMLSistemaDerechoConfiableObjetivo
 */
class ZMLSistemaDerechoConfiableObjetivo extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Zona Metropolitana de La Laguna y sus municipios en Sistema de Derecho Confiable y Objetivo';
        $this->autor                      = 'Lic. Rodrigo González Morales';
        $this->fecha                      = '2014-06-02T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'zml-sistema-derecho-confiable-objetivo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'De acuerdo al ICU 2012, es el subíndice más débil de la región; algunos de sus subíndices ponderados con alto peso por el IMCO corresponden a rubros de seguridad pública.';
        $this->claves                     = 'IMPLAN, Torreon, Seguridad, Robo, Vehiculos, Notarios';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/ZMLSistemaDerechoConfiableObjetivo.html';
        // Para el Organizador
        $this->categorias                 = array('Seguridad');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase ZMLSistemaDerechoConfiableObjetivo

?>
