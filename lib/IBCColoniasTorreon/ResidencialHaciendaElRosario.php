<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ResidencialHaciendaElRosario
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

namespace IBCColoniasTorreon;

/**
 * Clase ResidencialHaciendaElRosario
 */
class ResidencialHaciendaElRosario extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Residencial Hacienda El Rosario';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'residencial-hacienda-el-rosario';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Hacienda El Rosario en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Residencial Hacienda El Rosario';
    } // constructor

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            'Demografía' => array(
                '2010' => array(
                    'Población total' => 553,
                    'Porcentaje de población masculina' => 47.38,
                    'Porcentaje de población femenina' => 52.62,
                    'Porcentaje de población de 0 a 14 años' => 27.12,
                    'Porcentaje de población de 15 a 64 años' => 66.00,
                    'Porcentaje de población de 65 y más años' => 3.07,
                    'Porcentaje de población no especificada' => 3.81,
                    'Fecundidad promedio' => 1.47,
                    'Porcentaje de población con discapacidad' => 1.02
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.19,
                    'Población Económicamente Activa masculina' => 62.71,
                    'Población Económicamente Activa femenina' => 37.29,
                    'Población Ocupada' => 98.71,
                    'Población Ocupada masculina' => 62.66,
                    'Población Ocupada femenina' => 37.34,
                    'Población Desocupada' => 1.29,
                    'Derechohabiencia' => 78.84
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 138,
                    'Ocupación por Vivienda' => 4.01,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.55,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 100.00,
                    'Viviendas con Computadora' => 92.03
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 9,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 55.56,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 33.33,
                    'Tercera actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Tercera actividad porcentaje' => 11.11
                )
            )
        );
    } // datos

    /**
     * Mapas
     *
     * @return string
     */
    public function mapas() {
        return array(
            'Límites'         => \Configuracion\IBCTorreonConfig::LIMITES,
            'Centro latitud'  => 25.6243906890696,
            'Centro longitud' => -103.395615634806
        );
    } // mapas

    /**
     * Reseña
     *
     * @return string
     */
    public function resena() {
        return '';
    } // resena

} // Clase ResidencialHaciendaElRosario

?>
