<?php
/**
 * TrcIMPLAN Sitio Web - TorreonRegresoAClasesADistancia
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
 * Clase TorreonRegresoAClasesADistancia
 */
class TorreonRegresoAClasesADistancia extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón: Regreso a Clases a Distancia.';
        $this->autor                      = 'Lic. Edgardo de la Cruz Torres';
        $this->fecha                      = '2020-08-25T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-regreso-a-clases-a-distancia-agosto-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El escenario actual de una pandemia ha obligado a modificar las rutinas de las y los estudiantes y sus familias. El alumnado que había concluido su año escolar anterior en un formato a distancia, con clases a través de la televisión, enviando y recibiendo tareas en redes sociales y estableciendo videollamadas en diversas plataformas, inician este ciclo escolar bajo las mismas condiciones.';
        $this->claves                     = 'IMPLAN, Torreon, educacion, distancia, pandemia, covid, escolar, redes sociales';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonRegresoAClasesADistancia.md';
        // Para el Organizador
        $this->categorias                 = array('Educación');
        $this->fuentes                    = array('ONU Habitat');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase TorreonRegresoAClasesADistancia

?>
