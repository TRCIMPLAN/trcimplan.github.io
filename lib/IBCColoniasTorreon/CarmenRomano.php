<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon CarmenRomano
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
 * Clase CarmenRomano
 */
class CarmenRomano extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Carmen Romano';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'carmen-romano';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Carmen Romano en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Carmen Romano';
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
                    'Población total' => 3405,
                    'Porcentaje de población masculina' => 49.60,
                    'Porcentaje de población femenina' => 50.40,
                    'Porcentaje de población de 0 a 14 años' => 28.19,
                    'Porcentaje de población de 15 a 64 años' => 66.46,
                    'Porcentaje de población de 65 y más años' => 4.96,
                    'Porcentaje de población no especificada' => 0.39,
                    'Fecundidad promedio' => 2.47,
                    'Porcentaje de población con discapacidad' => 6.59
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.93,
                    'Población Económicamente Activa masculina' => 66.38,
                    'Población Económicamente Activa femenina' => 33.62,
                    'Población Ocupada' => 90.72,
                    'Población Ocupada masculina' => 65.40,
                    'Población Ocupada femenina' => 34.60,
                    'Población Desocupada' => 9.28,
                    'Derechohabiencia' => 63.73
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 876,
                    'Ocupación por Vivienda' => 3.89,
                    'Viviendas con Electricidad' => 99.54,
                    'Viviendas con Agua' => 99.20,
                    'Viviendas con Drenaje' => 98.86,
                    'Viviendas con Televisión' => 97.49,
                    'Viviendas con Automóvil' => 37.67,
                    'Viviendas con Computadora' => 24.72
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 99,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 47.47,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 19.19,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 14.14,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 7.07,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 5.05
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
            'Centro latitud'  => 25.5265038501543,
            'Centro longitud' => -103.389892449752
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

} // Clase CarmenRomano

?>
