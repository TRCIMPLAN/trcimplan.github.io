<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon EjidoZaragoza
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
 * Clase EjidoZaragoza
 */
class EjidoZaragoza extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Ejido Zaragoza';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'ejido-zaragoza';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido Zaragoza en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Ejido Zaragoza';
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
                    'Población total' => 2095,
                    'Porcentaje de población masculina' => 49.27,
                    'Porcentaje de población femenina' => 50.73,
                    'Porcentaje de población de 0 a 14 años' => 36.17,
                    'Porcentaje de población de 15 a 64 años' => 59.32,
                    'Porcentaje de población de 65 y más años' => 3.78,
                    'Porcentaje de población no especificada' => 0.73,
                    'Fecundidad promedio' => 2.18,
                    'Porcentaje de población con discapacidad' => 2.95
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.58,
                    'Población Económicamente Activa masculina' => 69.65,
                    'Población Económicamente Activa femenina' => 30.35,
                    'Población Ocupada' => 89.92,
                    'Población Ocupada masculina' => 68.95,
                    'Población Ocupada femenina' => 31.05,
                    'Población Desocupada' => 10.08,
                    'Derechohabiencia' => 71.07
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 536,
                    'Ocupación por Vivienda' => 3.91,
                    'Viviendas con Electricidad' => 99.68,
                    'Viviendas con Agua' => 99.29,
                    'Viviendas con Drenaje' => 98.72,
                    'Viviendas con Televisión' => 98.35,
                    'Viviendas con Automóvil' => 51.44,
                    'Viviendas con Computadora' => 26.89
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 78,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 38.46,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 12.82,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 10.26,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 7.69
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
            'Centro latitud'  => 25.5270118133477,
            'Centro longitud' => -103.355705002044
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

} // Clase EjidoZaragoza

?>
