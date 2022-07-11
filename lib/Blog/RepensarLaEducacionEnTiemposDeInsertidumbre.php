<?php
/**
 * TrcIMPLAN Sitio Web - RepensarLaEducacionEnTiemposDeInsertidumbre
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
 * Clase RepensarLaEducacionEnTiemposDeInsertidumbre
 */
class RepensarLaEducacionEnTiemposDeInsertidumbre extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Repensar la educación en tiempos de incertidumbre.';
        $this->autor                      = 'Lic. Cristian Vázquez';
        $this->fecha                      = '2022-07-04T09:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'repensar-la-educacion-julio-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Los cambios que se viven en la actualidad dentro del sistema educativo, son expresiones de transformaciones sociales y de las nuevas exigencias que se plantean para la formación de las nuevas generaciones. Ante ese análisis de la realidad, surgen algunas preguntas: ¿Qué significa educar en tiempos de incertidumbre y vertiginosas transformaciones? ¿Cómo educar en una época de cambios? ';
        $this->claves                     = 'IMPLAN, Torreon, educacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/RepensarLaEducacionEnTiemposDeInsertidumbre.md';
        // Para el Organizador
        $this->categorias                 = array('Educación');
        $this->fuentes                    = array('ANUIES');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase RepensarLaEducacionEnTiemposDeInsertidumbre

?>
