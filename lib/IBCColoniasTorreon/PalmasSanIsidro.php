<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon PalmasSanIsidro
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
 * Clase PalmasSanIsidro
 */
class PalmasSanIsidro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Palmas San Isidro';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'palmas-san-isidro';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Palmas San Isidro en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Palmas San Isidro';
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
                    'Población total' => 381,
                    'Porcentaje de población masculina' => 45.54,
                    'Porcentaje de población femenina' => 54.46,
                    'Porcentaje de población de 0 a 14 años' => 12.33,
                    'Porcentaje de población de 15 a 64 años' => 75.10,
                    'Porcentaje de población de 65 y más años' => 11.59,
                    'Porcentaje de población no especificada' => 0.98,
                    'Fecundidad promedio' => 1.68,
                    'Porcentaje de población con discapacidad' => 12.42
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.07,
                    'Población Económicamente Activa masculina' => 55.31,
                    'Población Económicamente Activa femenina' => 44.69,
                    'Población Ocupada' => 97.06,
                    'Población Ocupada masculina' => 55.15,
                    'Población Ocupada femenina' => 44.85,
                    'Población Desocupada' => 2.94,
                    'Derechohabiencia' => 80.20
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 114,
                    'Ocupación por Vivienda' => 3.34,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 87.56,
                    'Viviendas con Computadora' => 80.96
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 32,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 28.12,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 21.88,
                    'Tercera actividad nombre' => 'Manejo de Residuos',
                    'Tercera actividad porcentaje' => 9.38,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 9.38,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 6.25
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
            'Centro latitud'  => 25.5722080996247,
            'Centro longitud' => -103.425931527831
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

} // Clase PalmasSanIsidro

?>
