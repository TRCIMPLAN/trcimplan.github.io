<?php
/**
 * TrcIMPLAN Sitio Web - PrevencionDelSuicidio
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
 * Clase PrevencionDelSuicidio
 */
class PrevencionDelSuicidio extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Día Mundial de la Prevención del Suicidio, conmemorar para prever.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2021-09-15T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'prevencion-del-suicidio-sep-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En el 2020, se presentaron 89 suicidios en la ZML: Matamoros 5, Torreón 51, Gómez Palacio 23 y Lerdo 10. Concentrándose en las edades de 15 a 64 años de edad.';
        $this->claves                     = 'IMPLAN, Torreon, suicidio, prevencion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PrevencionDelSuicidio.md';
        // Para el Organizador
        $this->categorias                 = array('Salud', 'Población');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase PrevencionDelSuicidio

?>
