<?php
/**
 * TrcIMPLAN Sitio Web - ImportanciaDeLaParticipacionCiudadana
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
 * Clase ImportanciaDeLaParticipacionCiudadana
 */
class ImportanciaDeLaParticipacionCiudadana extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Importancia de la Participación Ciudadana, una visión por La Laguna.';
        $this->autor                      = 'Lic. Jorge Ángel Olvera Morales';
        $this->fecha                      = '2021-12-20T10:40';
        // El nombre del archivo a crear
        $this->archivo                    = 'importancia-de-la-participacion-ciudadana-dic-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Dará inicio al cuarto año de trabajo del Consejo Visión Metrópoli desde su constitución a inicios del año 2019, fechas en las cuales nació por iniciativa del Instituto Municipal de Planeación y Competitividad del Municipio de Torreón (IMPLAN) como una estrategia para incentivar la participación ciudadana juvenil en la Comarca Lagunera.';
        $this->claves                     = 'IMPLAN, Torreon, participacion, ciudadana, vision, metropoli, juvenil, jovenes';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ImportanciaDeLaParticipacionCiudadana.md';
        // Para el Organizador
        $this->categorias                 = array('Participación Ciudadana');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ImportanciaDeLaParticipacionCiudadana

?>
