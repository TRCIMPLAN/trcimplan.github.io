<?php
/**
 * TrcIMPLAN Sitio Web - HaciaLaGobernanzaMetropolitanaEnLaLaguna
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
 * Clase HaciaLaGobernanzaMetropolitanaEnLaLaguna
 */
class HaciaLaGobernanzaMetropolitanaEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Hacia la Gobernanza Metropolitana en La Laguna ';
        $this->autor                      = 'Lic. Frida García Gutiérrez';
        $this->fecha                      = '2020-01-24T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'hacia-la-gobernanza-metropolitana-en-la-laguna-ene2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Las Zonas Metropolitanas, son dos o más municipios en los que se localiza una ciudad de 50 mil o más habitantes. En su área urbana, funciones y actividades; rebasan sus límites originales; e incorporan como parte de sí mismas, a municipios vecinos con un alto grado de integración socioeconómica. En la definición también se incluyen los municipios que son relevantes para la planeación y política urbanas.';
        $this->claves                     = 'IMPLAN, Torreon, zona metropolitana, habitantes, planeacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/HaciaLaGobernanzaMetropolitanaEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Población');
        $this->fuentes                    = array('CONAPO', 'SEDATU', 'INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase HaciaLaGobernanzaMetropolitanaEnLaLaguna

?>
