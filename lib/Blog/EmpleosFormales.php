<?php
/**
 * TrcIMPLAN Sitio Web - EmpleosFormales
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
 * Clase EmpleosFormales
 */
class EmpleosFormales extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Empleos formales febrero 2021';
        $this->autor                      = 'Dr. Iván de Luna Aldape';
        $this->fecha                      = '2021-03-22T00:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'empleos-formales-mar-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'A un año del inicio de la pandemia en el país y de la pérdida generalizada de empleos, se tiene en la Zona Metropolitana de La Laguna (ZML) una recuperación completa, al registrar para este mes 306 mil 5 personas aseguradas asociadas a un trabajo, solo 0.53% por debajo del mismo mes respecto al año pasado, un incremento del 0.62% respecto a enero del presente año y un incremento del 3.06% respecto al mes que menos trabajadores asegurados registró durante el 2020.';
        $this->claves                     = 'IMPLAN, Torreon, pandemia, empleos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EmpleosFormales.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase EmpleosFormales

?>
