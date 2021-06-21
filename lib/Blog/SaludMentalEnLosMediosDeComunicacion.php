<?php
/**
 * TrcIMPLAN Sitio Web - SaludMentalEnLosMediosDeComunicacion
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
 * Clase SaludMentalEnLosMediosDeComunicacion
 */
class SaludMentalEnLosMediosDeComunicacion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Salud Mental en los Medios de Comunicación';
        $this->autor                      = 'Mtro. Omar Ortega Herrera';
        $this->fecha                      = '2021-06-21T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'salud-mental-en-los-medios-de-comunicacion-jun-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Según el Monitor de Salud Mental del IMPLAN Torreón, de 432 unidades médicas de salud pública en el Estado de Coahuila, sólo 2 están enfocadas en la salud mental, el 0.4%.';
        $this->claves                     = 'IMPLAN, Torreon, salud, mental';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/SaludMentalEnLosMediosDeComunicacion.md';
        // Para el Organizador
        $this->categorias                 = array('Salud');
        $this->fuentes                    = array('OMS');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase SaludMentalEnLosMediosDeComunicacion

?>
