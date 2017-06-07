<?php
/**
 * TrcIMPLAN Sitio Web - Primer Análisis de Datos Abiertos en Seguridad Vial
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
 * Clase PrimerAnalisisDeDatosAbiertosEnSeguridadVial
 */
class PrimerAnalisisDeDatosAbiertosEnSeguridadVial extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Primer Análisis de Datos Abiertos en Seguridad Vial';
        $this->autor                      = 'Ing. Guillermo Valdés Lozano';
        $this->fecha                      = '2016-03-29T09:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'primer-analisis-de-datos-abiertos-en-seguridad-vial';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En 2015 la Dirección de Tránsito y Vialidad de Torreón modernizó la forma de llevar su registro de eventos sobre seguridad vial al cambiar del formato físico al digital.';
        $this->claves                     = 'IMPLAN, Torreon, Transito, Accidentes, Eventos, Viales, Datos Abiertos, Gobierno Abierto';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PrimerAnalisisDeDatosAbiertosEnSeguridadVial.md';
        // Para el Organizador
        $this->categorias                 = array('Gobierno Digital', 'Movilidad', 'Vialidad');
        $this->fuentes                    = array('Ayuntamiento de Torreón');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase PrimerAnalisisDeDatosAbiertosEnSeguridadVial

?>
