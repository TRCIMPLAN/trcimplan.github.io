<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon RinconDeLaHacienda
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
 * Clase RinconDeLaHacienda
 */
class RinconDeLaHacienda extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Rincon de La Hacienda';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'rincon-de-la-hacienda';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Rincon de La Hacienda en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Rincon de La Hacienda';
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
                    'Población total' => 520,
                    'Porcentaje de población masculina' => 46.92,
                    'Porcentaje de población femenina' => 53.08,
                    'Porcentaje de población de 0 a 14 años' => 17.88,
                    'Porcentaje de población de 15 a 64 años' => 71.92,
                    'Porcentaje de población de 65 y más años' => 7.31,
                    'Porcentaje de población no especificada' => 2.89,
                    'Fecundidad promedio' => 1.59,
                    'Porcentaje de población con discapacidad' => 1.78
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.42,
                    'Población Económicamente Activa masculina' => 59.03,
                    'Población Económicamente Activa femenina' => 40.97,
                    'Población Ocupada' => 97.29,
                    'Población Ocupada masculina' => 59.28,
                    'Población Ocupada femenina' => 40.72,
                    'Población Desocupada' => 2.71,
                    'Derechohabiencia' => 70.96
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 148,
                    'Ocupación por Vivienda' => 3.51,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.32,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.32,
                    'Viviendas con Automóvil' => 82.43,
                    'Viviendas con Computadora' => 75.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 27,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 33.33,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 14.81,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 11.11,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 11.11,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 11.11
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
            'Centro latitud'  => 25.5163694163769,
            'Centro longitud' => -103.392401878125
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

} // Clase RinconDeLaHacienda

?>
