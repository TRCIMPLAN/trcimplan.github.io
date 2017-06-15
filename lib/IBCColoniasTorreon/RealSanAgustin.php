<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon RealSanAgustin
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
 * Clase RealSanAgustin
 */
class RealSanAgustin extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Real San Agustín';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'real-san-agustin';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Real San Agustín en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Real San Agustín';
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
                    'Población total' => 599,
                    'Porcentaje de población masculina' => 49.75,
                    'Porcentaje de población femenina' => 50.25,
                    'Porcentaje de población de 0 a 14 años' => 38.40,
                    'Porcentaje de población de 15 a 64 años' => 59.77,
                    'Porcentaje de población de 65 y más años' => 1.84,
                    'Porcentaje de población no especificada' => -0.01,
                    'Fecundidad promedio' => 1.97,
                    'Porcentaje de población con discapacidad' => 3.91
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.42,
                    'Población Económicamente Activa masculina' => 70.91,
                    'Población Económicamente Activa femenina' => 29.09,
                    'Población Ocupada' => 89.55,
                    'Población Ocupada masculina' => 69.35,
                    'Población Ocupada femenina' => 30.65,
                    'Población Desocupada' => 10.45,
                    'Derechohabiencia' => 75.63
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 161,
                    'Ocupación por Vivienda' => 3.72,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.76,
                    'Viviendas con Drenaje' => 98.14,
                    'Viviendas con Televisión' => 98.76,
                    'Viviendas con Automóvil' => 37.87,
                    'Viviendas con Computadora' => 16.79
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 5,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 40.00,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 20.00
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
            'Centro latitud'  => 25.5868607575795,
            'Centro longitud' => -103.377625577963
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

} // Clase RealSanAgustin

?>
