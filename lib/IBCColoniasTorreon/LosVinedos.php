<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LosVinedos
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
 * Clase LosVinedos
 */
class LosVinedos extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Los Viñedos';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'los-vinedos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Los Viñedos en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Los Viñedos';
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
                    'Población total' => 1082,
                    'Porcentaje de población masculina' => 49.61,
                    'Porcentaje de población femenina' => 50.39,
                    'Porcentaje de población de 0 a 14 años' => 26.08,
                    'Porcentaje de población de 15 a 64 años' => 55.50,
                    'Porcentaje de población de 65 y más años' => 8.34,
                    'Porcentaje de población no especificada' => 10.08,
                    'Fecundidad promedio' => 1.57,
                    'Porcentaje de población con discapacidad' => 2.11
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.54,
                    'Población Económicamente Activa masculina' => 61.10,
                    'Población Económicamente Activa femenina' => 38.90,
                    'Población Ocupada' => 98.30,
                    'Población Ocupada masculina' => 61.00,
                    'Población Ocupada femenina' => 39.00,
                    'Población Desocupada' => 1.70,
                    'Derechohabiencia' => 73.56
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 237,
                    'Ocupación por Vivienda' => 4.57,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.84,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.84,
                    'Viviendas con Automóvil' => 99.03,
                    'Viviendas con Computadora' => 92.12
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 52,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 21.15,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 19.23,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 19.23,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 11.54,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 7.69
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
            'Centro latitud'  => 25.5769716452441,
            'Centro longitud' => -103.384213296435
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

} // Clase LosVinedos

?>
