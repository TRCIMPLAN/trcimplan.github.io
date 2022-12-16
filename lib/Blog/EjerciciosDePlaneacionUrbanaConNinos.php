<?php
/**
 * TrcIMPLAN Sitio Web - EjerciciosDePlaneacionUrbanaConNinos
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
 * Clase EjerciciosDePlaneacionUrbanaConNinos
 */
class EjerciciosDePlaneacionUrbanaConNinos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Participación de niños y niñas en ejercicios de planeación urbana.';
        $this->autor                      = 'Lic. Jesús Abraham Salazar Valadez';
        $this->fecha                      = '2022-12-15T14:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'ejercicios-de-planeacion-urbana-con-ninos-dic-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Entre los resultados más significativos del taller de cartografía social con niños y niñas se encontraron los siguientes: seis lugares en los que falta alumbrado público, seis viviendas con problemas de servicios públicos, 11 lotes donde hay exceso de maleza, 11 espacios donde juegan y 13 zonas donde se sienten inseguros e inseguras.';
        $this->claves                     = 'IMPLAN, Torreon, planeacion, urbana, ninos ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EjerciciosDePlaneacionUrbanaConNinos.md';
        // Para el Organizador
        $this->categorias                 = array('Educación');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase EjerciciosDePlaneacionUrbanaConNinos

?>
