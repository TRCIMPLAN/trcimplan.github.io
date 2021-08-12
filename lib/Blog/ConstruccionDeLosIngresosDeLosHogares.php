<?php
/**
 * TrcIMPLAN Sitio Web - ConstruccionDeLosIngresosDeLosHogares
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
 * Clase ConstruccionDeLosIngresosDeLosHogares
 */
class ConstruccionDeLosIngresosDeLosHogares extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Construcción de los ingresos de los hogares en La Laguna.';
        $this->autor                      = 'Lic. Pedro Eleazar González Valdez';
        $this->fecha                      = '2021-08-12T15:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'construccion-de-los-ingresos-en-los-hogares-ago-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En promedio hay más de 3 habitantes por hogar en México, de los cuales suele haber más de una persona que trabaja, sin embargo, son más de 2 personas en promedio las que aportan a los ingresos.';
        $this->claves                     = 'IMPLAN, Torreon, ingresos, habitantes';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ConstruccionDeLosIngresosDeLosHogares.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ConstruccionDeLosIngresosDeLosHogares

?>
