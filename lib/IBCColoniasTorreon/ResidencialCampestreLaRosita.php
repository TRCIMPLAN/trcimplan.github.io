<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ResidencialCampestreLaRosita
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
 * Clase ResidencialCampestreLaRosita
 */
class ResidencialCampestreLaRosita extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Residencial Campestre La Rosita';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'residencial-campestre-la-rosita';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Campestre La Rosita en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Residencial Campestre La Rosita';
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
                    'Población total' => 3367,
                    'Porcentaje de población masculina' => 48.50,
                    'Porcentaje de población femenina' => 51.50,
                    'Porcentaje de población de 0 a 14 años' => 15.67,
                    'Porcentaje de población de 15 a 64 años' => 66.17,
                    'Porcentaje de población de 65 y más años' => 10.05,
                    'Porcentaje de población no especificada' => 8.11,
                    'Fecundidad promedio' => 1.82,
                    'Porcentaje de población con discapacidad' => 1.26
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.36,
                    'Población Económicamente Activa masculina' => 61.86,
                    'Población Económicamente Activa femenina' => 38.14,
                    'Población Ocupada' => 98.40,
                    'Población Ocupada masculina' => 61.71,
                    'Población Ocupada femenina' => 38.29,
                    'Población Desocupada' => 1.60,
                    'Derechohabiencia' => 74.72
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 848,
                    'Ocupación por Vivienda' => 3.97,
                    'Viviendas con Electricidad' => 99.66,
                    'Viviendas con Agua' => 98.40,
                    'Viviendas con Drenaje' => 98.65,
                    'Viviendas con Televisión' => 97.67,
                    'Viviendas con Automóvil' => 95.97,
                    'Viviendas con Computadora' => 91.09
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 433,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 31.18,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 16.40,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 15.70,
                    'Cuarta actividad nombre' => 'Financieros y Seguros',
                    'Cuarta actividad porcentaje' => 5.54,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 4.62
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
            'Centro latitud'  => 25.5244361925719,
            'Centro longitud' => -103.410958551505
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

} // Clase ResidencialCampestreLaRosita

?>
