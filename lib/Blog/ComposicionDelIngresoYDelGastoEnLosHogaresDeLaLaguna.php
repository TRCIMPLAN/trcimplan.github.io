<?php
/**
 * TrcIMPLAN Sitio Web - ComposicionDelIngresoYDelGastoEnLosHogaresDeLaLaguna
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
 * Clase ComposicionDelIngresoYDelGastoEnLosHogaresDeLaLaguna
 */
class ComposicionDelIngresoYDelGastoEnLosHogaresDeLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Composición del Ingreso y del Gasto en los Hogares de La Laguna';
        $this->autor                      = 'Lic. Iván de Luna Aldape';
        $this->fecha                      = '2019-08-14T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'composicion-del-ingreso-y-del-gasto-en-los-hogares-de-la-laguna-agosto2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La ENIGH 2018 es una encuesta realizada por el INEGI a nivel nacional y estatal que ayuda a conocer la composición del gasto e ingreso en los hogares. Este instrumento es útil para el análisis, no solo de la distribución de la riqueza, sino de los factores que influyen en una mejor calidad de vida de las personas.';
        $this->claves                     = 'IMPLAN, Torreon, enigh, ingreso, hogares';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ComposicionDelIngresoYDelGastoEnLosHogaresDeLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Empleo');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComposicionDelIngresoYDelGastoEnLosHogaresDeLaLaguna

?>
