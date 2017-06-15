<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Latinoamericano
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
 * Clase Latinoamericano
 */
class Latinoamericano extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Latinoamericano';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'latinoamericano';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Latinoamericano en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Latinoamericano';
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
                    'Población total' => 5980,
                    'Porcentaje de población masculina' => 50.82,
                    'Porcentaje de población femenina' => 49.18,
                    'Porcentaje de población de 0 a 14 años' => 27.59,
                    'Porcentaje de población de 15 a 64 años' => 69.25,
                    'Porcentaje de población de 65 y más años' => 2.74,
                    'Porcentaje de población no especificada' => 0.42,
                    'Fecundidad promedio' => 1.98,
                    'Porcentaje de población con discapacidad' => 7.79
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.28,
                    'Población Económicamente Activa masculina' => 64.62,
                    'Población Económicamente Activa femenina' => 35.38,
                    'Población Ocupada' => 91.47,
                    'Población Ocupada masculina' => 63.07,
                    'Población Ocupada femenina' => 36.93,
                    'Población Desocupada' => 8.53,
                    'Derechohabiencia' => 71.39
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1534,
                    'Ocupación por Vivienda' => 3.90,
                    'Viviendas con Electricidad' => 99.85,
                    'Viviendas con Agua' => 99.53,
                    'Viviendas con Drenaje' => 99.22,
                    'Viviendas con Televisión' => 98.98,
                    'Viviendas con Automóvil' => 58.09,
                    'Viviendas con Computadora' => 40.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 130,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 43.85,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 19.23,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 15.38,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 5.38,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
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
            'Centro latitud'  => 25.5248142268606,
            'Centro longitud' => -103.345280235146
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

} // Clase Latinoamericano

?>
