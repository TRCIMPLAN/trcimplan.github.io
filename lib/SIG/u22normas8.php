<?php
/**
 * TrcIMPLAN Sitio Web - u22normas8
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

namespace SIG;

/**
 * Clase u22normas8
 */
class u22normas8 extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Norma 8. Fomento de la densidad';
        $this->fecha                      = '2023-01-19T12:07';
        // El nombre del archivo a crear
        $this->archivo                    = 'u22-normas-8';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El siguiente predio forma parte del área de aplicación de la Norma 8. Fomento a la densidad por lo que se encuentra sujeto a las disposiciones establecidas a continuación.';
        $this->claves                     = 'IMPLAN, Torreon, Usos, Suelo, norma';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Información Geográfica > Zonificación Secundaria';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SIG/u22normas8.md';
    } // constructor

} // Clase u22normas8

?>
