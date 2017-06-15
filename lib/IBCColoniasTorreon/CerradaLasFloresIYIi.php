<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon CerradaLasFloresIYIi
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
 * Clase CerradaLasFloresIYIi
 */
class CerradaLasFloresIYIi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Cerrada Las Flores I y II';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'cerrada-las-flores-i-y-ii';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Cerrada Las Flores I y II en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Cerrada Las Flores I y II';
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
                    'Población total' => 876,
                    'Porcentaje de población masculina' => 48.97,
                    'Porcentaje de población femenina' => 51.03,
                    'Porcentaje de población de 0 a 14 años' => 34.13,
                    'Porcentaje de población de 15 a 64 años' => 63.81,
                    'Porcentaje de población de 65 y más años' => 1.71,
                    'Porcentaje de población no especificada' => 0.35,
                    'Fecundidad promedio' => 1.71,
                    'Porcentaje de población con discapacidad' => 3.93
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.28,
                    'Población Económicamente Activa masculina' => 63.80,
                    'Población Económicamente Activa femenina' => 36.20,
                    'Población Ocupada' => 94.23,
                    'Población Ocupada masculina' => 63.64,
                    'Población Ocupada femenina' => 36.36,
                    'Población Desocupada' => 5.77,
                    'Derechohabiencia' => 85.39
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 237,
                    'Ocupación por Vivienda' => 3.70,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.58,
                    'Viviendas con Automóvil' => 75.53,
                    'Viviendas con Computadora' => 62.45
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 9,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 66.67,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 22.22,
                    'Tercera actividad nombre' => 'Comercio Mayoreo',
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
            'Centro latitud'  => 25.5293176843008,
            'Centro longitud' => -103.354534146203
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

} // Clase CerradaLasFloresIYIi

?>
