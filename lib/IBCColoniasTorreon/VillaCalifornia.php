<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillaCalifornia
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
 * Clase VillaCalifornia
 */
class VillaCalifornia extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Villa California';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'villa-california';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villa California en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Villa California';
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
                    'Población total' => 10692,
                    'Porcentaje de población masculina' => 47.47,
                    'Porcentaje de población femenina' => 52.53,
                    'Porcentaje de población de 0 a 14 años' => 23.69,
                    'Porcentaje de población de 15 a 64 años' => 69.93,
                    'Porcentaje de población de 65 y más años' => 4.78,
                    'Porcentaje de población no especificada' => 1.60,
                    'Fecundidad promedio' => 1.93,
                    'Porcentaje de población con discapacidad' => 2.98
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.70,
                    'Población Económicamente Activa masculina' => 60.35,
                    'Población Económicamente Activa femenina' => 39.65,
                    'Población Ocupada' => 91.96,
                    'Población Ocupada masculina' => 59.75,
                    'Población Ocupada femenina' => 40.25,
                    'Población Desocupada' => 8.04,
                    'Derechohabiencia' => 72.07
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 2867,
                    'Ocupación por Vivienda' => 3.73,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.77,
                    'Viviendas con Drenaje' => 99.70,
                    'Viviendas con Televisión' => 99.11,
                    'Viviendas con Automóvil' => 64.96,
                    'Viviendas con Computadora' => 53.13
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 482,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 42.32,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 18.05,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 16.60,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 6.02,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 4.77
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
            'Centro latitud'  => 25.5412819594488,
            'Centro longitud' => -103.39474039507
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

} // Clase VillaCalifornia

?>
