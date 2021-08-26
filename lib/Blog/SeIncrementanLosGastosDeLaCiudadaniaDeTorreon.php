<?php
/**
 * TrcIMPLAN Sitio Web - SeIncrementanLosGastosDeLaCiudadaniaDeTorreon
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
 * Clase SeIncrementanLosGastosDeLaCiudadaniaDeTorreon
 */
class SeIncrementanLosGastosDeLaCiudadaniaDeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Se incrementan los gastos de la ciudadanía de Torreón.';
        $this->autor                      = 'Pedro Antonio Ávila Bautista';
        $this->fecha                      = '2021-08-26T14:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'se-incrementan-los-gastos-de-la-ciudadania-de-torreon-ago-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '“Los datos de la Encuesta Nacional de Ingresos y Gastos de los Hogares (ENIGH) del INEGI para 2020 muestran que el gasto de los ciudadanos con menores ingresos de Torreón aumentó en comparación con 2018.”';
        $this->claves                     = 'IMPLAN, Torreon, ingresos, gastos, hogares';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/SeIncrementanLosGastosDeLaCiudadaniaDeTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Población');
        $this->fuentes                    = array('ENIGH');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase SeIncrementanLosGastosDeLaCiudadaniaDeTorreon

?>
