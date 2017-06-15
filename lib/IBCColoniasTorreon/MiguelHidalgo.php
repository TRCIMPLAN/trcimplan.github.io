<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon MiguelHidalgo
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
 * Clase MiguelHidalgo
 */
class MiguelHidalgo extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Miguel Hidalgo';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'miguel-hidalgo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Miguel Hidalgo en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Miguel Hidalgo';
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
                    'Población total' => 1000,
                    'Porcentaje de población masculina' => 48.50,
                    'Porcentaje de población femenina' => 51.50,
                    'Porcentaje de población de 0 a 14 años' => 25.30,
                    'Porcentaje de población de 15 a 64 años' => 62.40,
                    'Porcentaje de población de 65 y más años' => 12.00,
                    'Porcentaje de población no especificada' => 0.30,
                    'Fecundidad promedio' => 2.81,
                    'Porcentaje de población con discapacidad' => 10.96
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.22,
                    'Población Económicamente Activa masculina' => 67.23,
                    'Población Económicamente Activa femenina' => 32.77,
                    'Población Ocupada' => 92.74,
                    'Población Ocupada masculina' => 65.62,
                    'Población Ocupada femenina' => 34.38,
                    'Población Desocupada' => 7.26,
                    'Derechohabiencia' => 55.50
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 239,
                    'Ocupación por Vivienda' => 4.18,
                    'Viviendas con Electricidad' => 97.91,
                    'Viviendas con Agua' => 96.65,
                    'Viviendas con Drenaje' => 98.74,
                    'Viviendas con Televisión' => 94.98,
                    'Viviendas con Automóvil' => 19.25,
                    'Viviendas con Computadora' => 13.74
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 12,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 41.67,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 25.00,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 8.33,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 8.33
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
            'Centro latitud'  => 25.5361739230634,
            'Centro longitud' => -103.474380417025
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

} // Clase MiguelHidalgo

?>
