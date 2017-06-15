<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon SanIsidro
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
 * Clase SanIsidro
 */
class SanIsidro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'San Isidro';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'san-isidro';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia San Isidro en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, San Isidro';
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
                    'Población total' => 2412,
                    'Porcentaje de población masculina' => 46.28,
                    'Porcentaje de población femenina' => 53.72,
                    'Porcentaje de población de 0 a 14 años' => 13.52,
                    'Porcentaje de población de 15 a 64 años' => 62.58,
                    'Porcentaje de población de 65 y más años' => 16.23,
                    'Porcentaje de población no especificada' => 7.67,
                    'Fecundidad promedio' => 2.06,
                    'Porcentaje de población con discapacidad' => 5.46
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.60,
                    'Población Económicamente Activa masculina' => 59.58,
                    'Población Económicamente Activa femenina' => 40.42,
                    'Población Ocupada' => 97.60,
                    'Población Ocupada masculina' => 59.65,
                    'Población Ocupada femenina' => 40.35,
                    'Población Desocupada' => 2.40,
                    'Derechohabiencia' => 75.14
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 679,
                    'Ocupación por Vivienda' => 3.55,
                    'Viviendas con Electricidad' => 99.93,
                    'Viviendas con Agua' => 99.33,
                    'Viviendas con Drenaje' => 99.48,
                    'Viviendas con Televisión' => 96.59,
                    'Viviendas con Automóvil' => 93.75,
                    'Viviendas con Computadora' => 82.63
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 205,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 28.29,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 15.61,
                    'Tercera actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Tercera actividad porcentaje' => 13.66,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 12.20,
                    'Quinta actividad nombre' => 'Financieros y Seguros',
                    'Quinta actividad porcentaje' => 6.34
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
            'Centro latitud'  => 25.5659569211798,
            'Centro longitud' => -103.431094572175
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

} // Clase SanIsidro

?>
