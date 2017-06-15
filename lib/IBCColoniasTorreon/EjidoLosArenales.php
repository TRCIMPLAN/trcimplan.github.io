<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon EjidoLosArenales
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
 * Clase EjidoLosArenales
 */
class EjidoLosArenales extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Ejido Los Arenales';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'ejido-los-arenales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido Los Arenales en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Ejido Los Arenales';
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
                    'Población total' => 1050,
                    'Porcentaje de población masculina' => 46.27,
                    'Porcentaje de población femenina' => 53.73,
                    'Porcentaje de población de 0 a 14 años' => 33.14,
                    'Porcentaje de población de 15 a 64 años' => 62.26,
                    'Porcentaje de población de 65 y más años' => 4.27,
                    'Porcentaje de población no especificada' => 0.33,
                    'Fecundidad promedio' => 2.81,
                    'Porcentaje de población con discapacidad' => 1.94
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.61,
                    'Población Económicamente Activa masculina' => 72.00,
                    'Población Económicamente Activa femenina' => 28.00,
                    'Población Ocupada' => 93.02,
                    'Población Ocupada masculina' => 70.92,
                    'Población Ocupada femenina' => 29.08,
                    'Población Desocupada' => 6.98,
                    'Derechohabiencia' => 64.18
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 248,
                    'Ocupación por Vivienda' => 4.23,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 96.62,
                    'Viviendas con Drenaje' => 98.63,
                    'Viviendas con Televisión' => 98.63,
                    'Viviendas con Automóvil' => 36.34,
                    'Viviendas con Computadora' => 31.25
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 85,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 34.12,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 22.35,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 20.00,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 5.88,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 4.71
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
            'Centro latitud'  => 25.4936791631133,
            'Centro longitud' => -103.36468892864
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

} // Clase EjidoLosArenales

?>
