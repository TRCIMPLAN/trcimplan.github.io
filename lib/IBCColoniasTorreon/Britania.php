<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Britania
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
 * Clase Britania
 */
class Britania extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Britania';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'britania';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Britania en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Britania';
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
                    'Población total' => 392,
                    'Porcentaje de población masculina' => 49.49,
                    'Porcentaje de población femenina' => 50.51,
                    'Porcentaje de población de 0 a 14 años' => 25.51,
                    'Porcentaje de población de 15 a 64 años' => 70.15,
                    'Porcentaje de población de 65 y más años' => 4.34,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.86,
                    'Porcentaje de población con discapacidad' => 5.40
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 58.18,
                    'Población Económicamente Activa masculina' => 58.92,
                    'Población Económicamente Activa femenina' => 41.08,
                    'Población Ocupada' => 95.49,
                    'Población Ocupada masculina' => 58.19,
                    'Población Ocupada femenina' => 41.81,
                    'Población Desocupada' => 4.51,
                    'Derechohabiencia' => 81.38
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 117,
                    'Ocupación por Vivienda' => 3.35,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.29,
                    'Viviendas con Automóvil' => 71.79,
                    'Viviendas con Computadora' => 52.99
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 3,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 66.67,
                    'Segunda actividad nombre' => 'Salud',
                    'Segunda actividad porcentaje' => 33.33
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
            'Centro latitud'  => 25.5281228493496,
            'Centro longitud' => -103.384491786979
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

} // Clase Britania

?>
