<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon AquilesSerdan
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
 * Clase AquilesSerdan
 */
class AquilesSerdan extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Aquiles Serdán';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'aquiles-serdan';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Aquiles Serdán en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Aquiles Serdán';
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
                    'Población total' => 1823,
                    'Porcentaje de población masculina' => 47.83,
                    'Porcentaje de población femenina' => 52.17,
                    'Porcentaje de población de 0 a 14 años' => 27.59,
                    'Porcentaje de población de 15 a 64 años' => 63.47,
                    'Porcentaje de población de 65 y más años' => 8.78,
                    'Porcentaje de población no especificada' => 0.16,
                    'Fecundidad promedio' => 2.50,
                    'Porcentaje de población con discapacidad' => 9.35
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.65,
                    'Población Económicamente Activa masculina' => 63.00,
                    'Población Económicamente Activa femenina' => 37.00,
                    'Población Ocupada' => 89.27,
                    'Población Ocupada masculina' => 60.77,
                    'Población Ocupada femenina' => 39.23,
                    'Población Desocupada' => 10.73,
                    'Derechohabiencia' => 64.29
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 484,
                    'Ocupación por Vivienda' => 3.77,
                    'Viviendas con Electricidad' => 99.59,
                    'Viviendas con Agua' => 98.35,
                    'Viviendas con Drenaje' => 98.76,
                    'Viviendas con Televisión' => 96.07,
                    'Viviendas con Automóvil' => 27.17,
                    'Viviendas con Computadora' => 20.60
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 43,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 44.19,
                    'Segunda actividad nombre' => 'Industria Manufacturera',
                    'Segunda actividad porcentaje' => 16.28,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 13.95,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 11.63,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 4.65
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
            'Centro latitud'  => 25.5393073221601,
            'Centro longitud' => -103.474725197907
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

} // Clase AquilesSerdan

?>
