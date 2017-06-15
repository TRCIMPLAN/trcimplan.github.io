<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon SantiagoRamirez
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
 * Clase SantiagoRamirez
 */
class SantiagoRamirez extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Santiago Ramírez';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'santiago-ramirez';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Santiago Ramírez en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Santiago Ramírez';
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
                    'Población total' => 1524,
                    'Porcentaje de población masculina' => 50.79,
                    'Porcentaje de población femenina' => 49.21,
                    'Porcentaje de población de 0 a 14 años' => 32.09,
                    'Porcentaje de población de 15 a 64 años' => 60.76,
                    'Porcentaje de población de 65 y más años' => 6.36,
                    'Porcentaje de población no especificada' => 0.79,
                    'Fecundidad promedio' => 2.76,
                    'Porcentaje de población con discapacidad' => 13.93
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.52,
                    'Población Económicamente Activa masculina' => 69.62,
                    'Población Económicamente Activa femenina' => 30.38,
                    'Población Ocupada' => 82.67,
                    'Población Ocupada masculina' => 67.89,
                    'Población Ocupada femenina' => 32.11,
                    'Población Desocupada' => 17.33,
                    'Derechohabiencia' => 61.09
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 364,
                    'Ocupación por Vivienda' => 4.19,
                    'Viviendas con Electricidad' => 98.90,
                    'Viviendas con Agua' => 98.08,
                    'Viviendas con Drenaje' => 98.35,
                    'Viviendas con Televisión' => 95.60,
                    'Viviendas con Automóvil' => 29.24,
                    'Viviendas con Computadora' => 10.60
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 25,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 72.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 16.00,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 4.00,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 4.00,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 4.00
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
            'Centro latitud'  => 25.5053313041089,
            'Centro longitud' => -103.419825436139
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

} // Clase SantiagoRamirez

?>
