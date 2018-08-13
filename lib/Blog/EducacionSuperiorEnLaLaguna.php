<?php
/**
 * TrcIMPLAN Sitio Web - EducacionSuperiorEnLaLaguna
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
 * Clase EducacionSuperiorEnLaLaguna
 */
class EducacionSuperiorEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Educación Superior en La Laguna y la cuarta revolución industrial';
        $this->autor                      = 'Autor';
        $this->fecha                      = '2018-08-13T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'educacion-superior-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Durante el ciclo 2016-2017 la oferta escolar de la educación superior y media superior en la Zona Metropolitana de La Laguna (ZML), asciende a 129 programas diferentes, con un  total de 44,865 matriculados.';
        $this->claves                     = 'IMPLAN, Torreon, Educacion superior, educacion, revolucion industrial';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EducacionSuperiorEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Educacion');
        $this->fuentes                    = array('Anuario Estadistico');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase EducacionSuperiorEnLaLaguna

?>
