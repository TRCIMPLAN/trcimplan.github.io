<?php
/**
 * TrcIMPLAN Sitio Web - TorreonYSusIndicadoresAmbientales
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
 * Clase TorreonYSusIndicadoresAmbientales
 */
class TorreonYSusIndicadoresAmbientales extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón y sus indicadores ambientales';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2018-01-30T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-y-sus-indicadores-ambientales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Sistema de Información Ambiental de Torreón se elaboró para planear a corto, mediano y largo plazo e incidir para lograr una mayor sustentabilidad, equilibrio con el entorno y salud pública. Muestra cómo estamos en materia de aire, agua, residuos, cambio climático, entre otros temas.';
        $this->claves                     = 'IMPLAN, Torreon, Ambiental, Entorno, Salud';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonYSusIndicadoresAmbientales.md';
        // Para el Organizador
        $this->categorias                 = array('Medio Ambiente', 'Bienestar','Recursos Naturales', 'Salud');
        $this->fuentes                    = array('IMCO', 'ONU-Hábitat', 'IMPLAN');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase TorreonYSusIndicadoresAmbientales

?>
