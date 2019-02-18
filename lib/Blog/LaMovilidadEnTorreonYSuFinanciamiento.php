<?php
/**
 * TrcIMPLAN Sitio Web - LaMovilidadEnTorreonYSuFinanciamiento
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
 * Clase LaMovilidadEnTorreonYSuFinanciamiento
 */
class LaMovilidadEnTorreonYSuFinanciamiento extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Movilidad En Torreón Y Su Financiamiento';
        $this->autor                      = 'Arq. Ihanelly Hernández Villa';
        $this->fecha                      = '2019-02-18T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-movilidad-en-torreon-y-su-financiamiento-feb2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La movilidad es el segundo gasto mayor de los hogares mexicanos, en específico para Torreón el gasto mensual en movilidad solamente es superado por el gasto en la alimentación que ocupa el 36% y está por encima de conceptos como la educación y esparcimiento (12.14%), la vivienda (10.74%) y la salud (1.60%).';
        $this->claves                     = 'IMPLAN, Torreon, movilidad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaMovilidadEnTorreonYSuFinanciamiento.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad');
        $this->fuentes                    = array('INEGI','Instituto de Políticas para el Transporte y el Desarrollo en México','SEDATU');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaMovilidadEnTorreonYSuFinanciamiento

?>
