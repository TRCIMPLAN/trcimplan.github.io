<?php
/**
 * TrcIMPLAN Sitio Web - TendenciaALaObesidadYDiabetesEnMujeresMayoresDe40Anos
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
 * Clase TendenciaALaObesidadYDiabetesEnMujeresMayoresDe40Anos
 */
class TendenciaALaObesidadYDiabetesEnMujeresMayoresDe40Anos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Tendencia a la obesidad y diabetes en mujeres mayores de 40 años';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2017-09-28T13:25';
        // El nombre del archivo a crear
        $this->archivo                    = 'tendencia-a-la-obesidad-y-diabetes-en-mujeres-mayores-de-40-anos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Un estudio realizado por Salud Municipal en 900 mujeres de colonias vulnerables de Torreón, revela hábitos como alto consumo de refresco, poca actividad fìsica y presencia de obesidad y sobrepeso.';
        $this->claves                     = 'IMPLAN, Torreon, Diabetes, Obesidad, Mujeres, Mayores de 40 años';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TendenciaALaObesidadYDiabetesEnMujeresMayoresDe40Anos.md';
        // Para el Organizador
        $this->categorias                 = array('Salud');
        $this->fuentes                    = array('Ayuntamiento de Torreón');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase TendenciaALaObesidadYDiabetesEnMujeresMayoresDe40Anos

?>
