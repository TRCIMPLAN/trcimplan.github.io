<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon FranciscoVilla
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
 * Clase FranciscoVilla
 */
class FranciscoVilla extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Francisco Villa';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'francisco-villa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Francisco Villa en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Francisco Villa';
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
                    'Población total' => 6787,
                    'Porcentaje de población masculina' => 49.36,
                    'Porcentaje de población femenina' => 50.64,
                    'Porcentaje de población de 0 a 14 años' => 29.74,
                    'Porcentaje de población de 15 a 64 años' => 63.51,
                    'Porcentaje de población de 65 y más años' => 5.69,
                    'Porcentaje de población no especificada' => 1.06,
                    'Fecundidad promedio' => 2.63,
                    'Porcentaje de población con discapacidad' => 4.88
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.14,
                    'Población Económicamente Activa masculina' => 69.97,
                    'Población Económicamente Activa femenina' => 30.03,
                    'Población Ocupada' => 85.66,
                    'Población Ocupada masculina' => 68.75,
                    'Población Ocupada femenina' => 31.25,
                    'Población Desocupada' => 14.34,
                    'Derechohabiencia' => 61.08
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1587,
                    'Ocupación por Vivienda' => 4.28,
                    'Viviendas con Electricidad' => 99.87,
                    'Viviendas con Agua' => 99.81,
                    'Viviendas con Drenaje' => 99.87,
                    'Viviendas con Televisión' => 98.61,
                    'Viviendas con Automóvil' => 34.00,
                    'Viviendas con Computadora' => 15.95
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 114,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 53.51,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 23.68,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 7.89,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 6.14,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 2.63
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
            'Centro latitud'  => 25.5494325182319,
            'Centro longitud' => -103.410396285675
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

} // Clase FranciscoVilla

?>
