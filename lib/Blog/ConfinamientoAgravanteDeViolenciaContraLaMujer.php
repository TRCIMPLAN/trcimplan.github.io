<?php
/**
 * TrcIMPLAN Sitio Web - ConfinamientoAgravanteDeViolenciaContraLaMujer
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
 * Clase ConfinamientoAgravanteDeViolenciaContraLaMujer
 */
class ConfinamientoAgravanteDeViolenciaContraLaMujer extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El Confinamiento; Agravante de la Violencia contra la Mujer.';
        $this->autor                      = 'Lic. Nina Graciela Hernández Jayme';
        $this->fecha                      = '2020-12-08T12:10';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-confinamiento-agravante-de-la-violencia-contra-la-mujer-dic-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Este 25 de noviembre se conmemoró el Día Internacional para Eliminar la Violencia contra la Mujer, invitando a gobiernos, activistas y ciudadanos a involucrarse en actividades que eleven la conciencia pública. Este año, se distinguió por el confinamiento debido a la pandemia, que, siendo un llamado a protegerse de un peligro público, ha expuesto la realidad de la violencia en los espacios privados.';
        $this->claves                     = 'IMPLAN, Torreon, genero, violencia, confinamiento, mujer, covid19';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ConfinamientoAgravanteDeViolenciaContraLaMujer.md';
        // Para el Organizador
        $this->categorias                 = array('Género');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ConfinamientoAgravanteDeViolenciaContraLaMujer

?>
