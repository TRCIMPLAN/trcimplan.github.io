<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LagunaNorte
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
 * Clase LagunaNorte
 */
class LagunaNorte extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Laguna Norte';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'laguna-norte';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Laguna Norte en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Laguna Norte';
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
                    'Población total' => 2972,
                    'Porcentaje de población masculina' => 51.53,
                    'Porcentaje de población femenina' => 48.47,
                    'Porcentaje de población de 0 a 14 años' => 35.90,
                    'Porcentaje de población de 15 a 64 años' => 59.32,
                    'Porcentaje de población de 65 y más años' => 4.44,
                    'Porcentaje de población no especificada' => 0.34,
                    'Fecundidad promedio' => 2.45,
                    'Porcentaje de población con discapacidad' => 3.40
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.03,
                    'Población Económicamente Activa masculina' => 73.15,
                    'Población Económicamente Activa femenina' => 26.85,
                    'Población Ocupada' => 90.13,
                    'Población Ocupada masculina' => 72.18,
                    'Población Ocupada femenina' => 27.82,
                    'Población Desocupada' => 9.87,
                    'Derechohabiencia' => 50.03
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 708,
                    'Ocupación por Vivienda' => 4.20,
                    'Viviendas con Electricidad' => 99.15,
                    'Viviendas con Agua' => 96.52,
                    'Viviendas con Drenaje' => 81.36,
                    'Viviendas con Televisión' => 94.56,
                    'Viviendas con Automóvil' => 38.83,
                    'Viviendas con Computadora' => 12.08
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 176,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 38.07,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 26.70,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 9.66,
                    'Cuarta actividad nombre' => 'Inmobiliarios',
                    'Cuarta actividad porcentaje' => 7.39,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 5.68
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
            'Centro latitud'  => 25.5847363443167,
            'Centro longitud' => -103.427005841916
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

} // Clase LagunaNorte

?>
