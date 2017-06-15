<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon SanLuciano
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
 * Clase SanLuciano
 */
class SanLuciano extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'San Luciano';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'san-luciano';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia San Luciano en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, San Luciano';
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
                    'Población total' => 223,
                    'Porcentaje de población masculina' => 45.74,
                    'Porcentaje de población femenina' => 54.26,
                    'Porcentaje de población de 0 a 14 años' => 18.83,
                    'Porcentaje de población de 15 a 64 años' => 74.89,
                    'Porcentaje de población de 65 y más años' => 6.28,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.64,
                    'Porcentaje de población con discapacidad' => 3.14
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.78,
                    'Población Económicamente Activa masculina' => 51.02,
                    'Población Económicamente Activa femenina' => 48.98,
                    'Población Ocupada' => 100.00,
                    'Población Ocupada masculina' => 51.02,
                    'Población Ocupada femenina' => 48.98,
                    'Población Desocupada' => 0.00,
                    'Derechohabiencia' => 87.89
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 52,
                    'Ocupación por Vivienda' => 4.29,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 98.08,
                    'Viviendas con Computadora' => 92.31
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 22,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 36.36,
                    'Segunda actividad nombre' => 'Comercio Mayoreo',
                    'Segunda actividad porcentaje' => 18.18,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 13.64,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 9.09,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 9.09
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
            'Centro latitud'  => 25.5801168829069,
            'Centro longitud' => -103.414876122188
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

} // Clase SanLuciano

?>
