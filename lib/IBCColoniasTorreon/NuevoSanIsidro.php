<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon NuevoSanIsidro
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
 * Clase NuevoSanIsidro
 */
class NuevoSanIsidro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Nuevo San Isidro';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'nuevo-san-isidro';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Nuevo San Isidro en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Nuevo San Isidro';
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
                    'Población total' => 938,
                    'Porcentaje de población masculina' => 48.19,
                    'Porcentaje de población femenina' => 51.81,
                    'Porcentaje de población de 0 a 14 años' => 13.18,
                    'Porcentaje de población de 15 a 64 años' => 75.26,
                    'Porcentaje de población de 65 y más años' => 8.97,
                    'Porcentaje de población no especificada' => 2.59,
                    'Fecundidad promedio' => 1.69,
                    'Porcentaje de población con discapacidad' => 4.07
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.06,
                    'Población Económicamente Activa masculina' => 55.23,
                    'Población Económicamente Activa femenina' => 44.77,
                    'Población Ocupada' => 93.08,
                    'Población Ocupada masculina' => 54.37,
                    'Población Ocupada femenina' => 45.63,
                    'Población Desocupada' => 6.92,
                    'Derechohabiencia' => 74.20
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 283,
                    'Ocupación por Vivienda' => 3.31,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.28,
                    'Viviendas con Drenaje' => 99.64,
                    'Viviendas con Televisión' => 98.93,
                    'Viviendas con Automóvil' => 93.59,
                    'Viviendas con Computadora' => 78.97
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 40,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 32.50,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 12.50,
                    'Tercera actividad nombre' => 'Financieros y Seguros',
                    'Tercera actividad porcentaje' => 10.00,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 10.00,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 10.00
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
            'Centro latitud'  => 25.572165096642,
            'Centro longitud' => -103.421519146775
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

} // Clase NuevoSanIsidro

?>
