<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon PalmasLaRosita
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
 * Clase PalmasLaRosita
 */
class PalmasLaRosita extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Palmas La Rosita';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'palmas-la-rosita';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Palmas La Rosita en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Palmas La Rosita';
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
                    'Población total' => 141,
                    'Porcentaje de población masculina' => 53.19,
                    'Porcentaje de población femenina' => 46.81,
                    'Porcentaje de población de 0 a 14 años' => 20.57,
                    'Porcentaje de población de 15 a 64 años' => 67.38,
                    'Porcentaje de población de 65 y más años' => 5.67,
                    'Porcentaje de población no especificada' => 6.38,
                    'Fecundidad promedio' => 1.98,
                    'Porcentaje de población con discapacidad' => 1.31
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 44.14,
                    'Población Económicamente Activa masculina' => 77.55,
                    'Población Económicamente Activa femenina' => 22.45,
                    'Población Ocupada' => 100.00,
                    'Población Ocupada masculina' => 77.55,
                    'Población Ocupada femenina' => 22.45,
                    'Población Desocupada' => 0.00,
                    'Derechohabiencia' => 89.36
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 36,
                    'Ocupación por Vivienda' => 3.92,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 100.00,
                    'Viviendas con Computadora' => 100.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 5,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.00,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 40.00,
                    'Tercera actividad nombre' => 'Profesionales, Científicos, Técnicos',
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
            'Centro latitud'  => 25.5285987620479,
            'Centro longitud' => -103.413752695696
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

} // Clase PalmasLaRosita

?>
