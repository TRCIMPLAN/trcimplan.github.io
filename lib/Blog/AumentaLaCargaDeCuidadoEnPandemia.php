<?php
/**
 * TrcIMPLAN Sitio Web - AumentaLaCargaDeCuidadoEnPandemia
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
 * Clase AumentaLaCargaDeCuidadoEnPandemia
 */
class AumentaLaCargaDeCuidadoEnPandemia extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Aumento de la carga de cuidado en la pandemia';
        $this->autor                      = 'Lic. Miriam Janeth González Quintana';
        $this->fecha                      = '2022-03-09T09:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'aumenta-la-carga-de-cuidado-en-pandemia-mar-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La desigualdad de género se puede entender a través de las actividades que realizan hombres y mujeres durante el día. Los roles de género tradicionales demandan que el cuidado de hijos, hijas y personas mayores, la gestión del hogar y la salud de los miembros del hogar sean realizadas principalmente por mujeres, y que la participación en el mercado laboral sea ocupada en su mayoría por hombres.';
        $this->claves                     = 'IMPLAN, Torreon, desigualdad, genero';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/AumentaLaCargaDeCuidadoEnPandemia.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo', 'Género');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase AumentaLaCargaDeCuidadoEnPandemia

?>
