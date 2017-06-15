<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon EduardoGuerra
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
 * Clase EduardoGuerra
 */
class EduardoGuerra extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Eduardo Guerra';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'eduardo-guerra';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Eduardo Guerra en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Eduardo Guerra';
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
                    'Población total' => 12999,
                    'Porcentaje de población masculina' => 49.72,
                    'Porcentaje de población femenina' => 50.28,
                    'Porcentaje de población de 0 a 14 años' => 26.35,
                    'Porcentaje de población de 15 a 64 años' => 64.01,
                    'Porcentaje de población de 65 y más años' => 7.98,
                    'Porcentaje de población no especificada' => 1.66,
                    'Fecundidad promedio' => 2.60,
                    'Porcentaje de población con discapacidad' => 5.41
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.24,
                    'Población Económicamente Activa masculina' => 65.61,
                    'Población Económicamente Activa femenina' => 34.39,
                    'Población Ocupada' => 89.26,
                    'Población Ocupada masculina' => 64.13,
                    'Población Ocupada femenina' => 35.87,
                    'Población Desocupada' => 10.74,
                    'Derechohabiencia' => 63.84
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 3237,
                    'Ocupación por Vivienda' => 4.02,
                    'Viviendas con Electricidad' => 99.81,
                    'Viviendas con Agua' => 99.60,
                    'Viviendas con Drenaje' => 99.63,
                    'Viviendas con Televisión' => 98.61,
                    'Viviendas con Automóvil' => 44.31,
                    'Viviendas con Computadora' => 27.34
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 444,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 36.26,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.50,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 14.41,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 11.94,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 3.83
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
            'Centro latitud'  => 25.5203852658711,
            'Centro longitud' => -103.429648430226
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

} // Clase EduardoGuerra

?>
