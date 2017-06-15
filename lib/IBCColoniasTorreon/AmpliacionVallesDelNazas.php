<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon AmpliacionVallesDelNazas
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
 * Clase AmpliacionVallesDelNazas
 */
class AmpliacionVallesDelNazas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Ampliación Valles del Nazas';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'ampliacion-valles-del-nazas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ampliación Valles del Nazas en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Ampliación Valles del Nazas';
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
                    'Población total' => 1776,
                    'Porcentaje de población masculina' => 49.66,
                    'Porcentaje de población femenina' => 50.34,
                    'Porcentaje de población de 0 a 14 años' => 36.83,
                    'Porcentaje de población de 15 a 64 años' => 58.15,
                    'Porcentaje de población de 65 y más años' => 2.82,
                    'Porcentaje de población no especificada' => 2.20,
                    'Fecundidad promedio' => 1.91,
                    'Porcentaje de población con discapacidad' => 1.70
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.48,
                    'Población Económicamente Activa masculina' => 66.15,
                    'Población Económicamente Activa femenina' => 33.85,
                    'Población Ocupada' => 92.12,
                    'Población Ocupada masculina' => 64.95,
                    'Población Ocupada femenina' => 35.05,
                    'Población Desocupada' => 7.88,
                    'Derechohabiencia' => 79.79
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 468,
                    'Ocupación por Vivienda' => 3.79,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.96,
                    'Viviendas con Automóvil' => 59.76,
                    'Viviendas con Computadora' => 44.80
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 44,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 54.55,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 15.91,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 11.36,
                    'Cuarta actividad nombre' => 'Financieros y Seguros',
                    'Cuarta actividad porcentaje' => 4.55,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 4.55
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
            'Centro latitud'  => 25.5408499029786,
            'Centro longitud' => -103.36072921665
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

} // Clase AmpliacionVallesDelNazas

?>
