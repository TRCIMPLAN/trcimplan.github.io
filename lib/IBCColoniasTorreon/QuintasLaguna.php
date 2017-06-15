<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon QuintasLaguna
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
 * Clase QuintasLaguna
 */
class QuintasLaguna extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Quintas Laguna';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'quintas-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Quintas Laguna en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Quintas Laguna';
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
                    'Población total' => 955,
                    'Porcentaje de población masculina' => 50.05,
                    'Porcentaje de población femenina' => 49.95,
                    'Porcentaje de población de 0 a 14 años' => 36.86,
                    'Porcentaje de población de 15 a 64 años' => 58.64,
                    'Porcentaje de población de 65 y más años' => 1.36,
                    'Porcentaje de población no especificada' => 3.14,
                    'Fecundidad promedio' => 1.84,
                    'Porcentaje de población con discapacidad' => 1.47
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 58.56,
                    'Población Económicamente Activa masculina' => 65.30,
                    'Población Económicamente Activa femenina' => 34.70,
                    'Población Ocupada' => 93.93,
                    'Población Ocupada masculina' => 64.93,
                    'Población Ocupada femenina' => 35.07,
                    'Población Desocupada' => 6.07,
                    'Derechohabiencia' => 79.06
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 243,
                    'Ocupación por Vivienda' => 3.93,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.59,
                    'Viviendas con Automóvil' => 62.55,
                    'Viviendas con Computadora' => 35.07
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 19,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 47.37,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 26.32,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 15.79,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 5.26,
                    'Quinta actividad nombre' => 'Financieros y Seguros',
                    'Quinta actividad porcentaje' => 5.26
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
            'Centro latitud'  => 25.5436415913657,
            'Centro longitud' => -103.360602824659
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

} // Clase QuintasLaguna

?>
