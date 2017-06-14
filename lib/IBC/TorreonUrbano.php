<?php
/**
 * TrcIMPLAN Sitio Web - Torreón Urbano
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

namespace IBC;

/**
 * Clase TorreonUrbano
 */
class TorreonUrbano extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón Urbano';
        $this->fecha                      = '2017-06-14T12:40';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-urbano';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Indicadores del Área Urbana de Torreón, Coahuila de Zaragoza, México. INEGI Censo de Población y Vivienda 2010 y DENUE.';
        $this->claves                     = 'IMPLAN, Torreon, Urbano, Indicadores';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Indicadores Básicos de Colonias > Torreón Urbano';
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
                    'Población total'                          => 619125,
                    'Porcentaje de población masculina'        =>     48.70,
                    'Porcentaje de población femenina'         =>     51.30,
                    'Porcentaje de población de 0 a 14 años'   =>     27.49,
                    'Porcentaje de población de 15 a 64 años'  =>     64.39,
                    'Porcentaje de población de 65 y más años' =>      6.23,
                    'Porcentaje de población no especificada'  =>      1.90,
                    'Fecundidad promedio'                      =>      2.12,
                    'Porcentaje de población con discapacidad' =>      4.6
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa'           => 54.29,
                    'Población Económicamente Activa masculina' => 63.90,
                    'Población Económicamente Activa femenina'  => 36.10,
                    'Población Ocupada'                         => 92.07,
                    'Población Ocupada masculina'               => 63.02,
                    'Población Ocupada femenina'                => 36.98,
                    'Población Desocupada'                      =>  7.93,
                    'Derechohabiencia'                          => 71.04
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares'                    => 162905,
                    'Ocupación por Vivienda'     =>      3.8,
                    'Viviendas con Electricidad' =>     99.57,
                    'Viviendas con Agua'         =>     98.13,
                    'Viviendas con Drenaje'      =>     98.47,
                    'Viviendas con Televisión'   =>     98.22,
                    'Viviendas con Automóvil'    =>     56.36,
                    'Viviendas con Computadora'  =>     41.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 22592,
                    'Primer actividad nombre'      => 'Comercio Menudeo',
                    'Primer actividad porcentaje'  => 35.68,
                    'Segunda actividad nombre'     => 'Otros excepto Gobierno',
                    'Segunda actividad porcentaje' => 18.10,
                    'Tercera actividad nombre'     => 'Alimentos',
                    'Tercera actividad porcentaje' => 13.00,
                    'Cuarta actividad nombre'      => 'Manufactura',
                    'Cuarta actividad porcentaje'  =>  7.43,
                    'Quinta actividad nombre'      => 'Salud',
                    'Quinta actividad porcentaje'  =>  6.27
                )
            )
        );
    } // datos

} // Clase TorreonUrbano

?>
