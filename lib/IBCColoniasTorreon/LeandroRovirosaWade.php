<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LeandroRovirosaWade
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
 * Clase LeandroRovirosaWade
 */
class LeandroRovirosaWade extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Leandro Rovirosa Wade';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'leandro-rovirosa-wade';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Leandro Rovirosa Wade en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Leandro Rovirosa Wade';
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
                    'Población total' => 420,
                    'Porcentaje de población masculina' => 48.06,
                    'Porcentaje de población femenina' => 51.94,
                    'Porcentaje de población de 0 a 14 años' => 24.23,
                    'Porcentaje de población de 15 a 64 años' => 68.55,
                    'Porcentaje de población de 65 y más años' => 5.76,
                    'Porcentaje de población no especificada' => 1.46,
                    'Fecundidad promedio' => 1.77,
                    'Porcentaje de población con discapacidad' => 5.91
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.24,
                    'Población Económicamente Activa masculina' => 64.08,
                    'Población Económicamente Activa femenina' => 35.92,
                    'Población Ocupada' => 97.06,
                    'Población Ocupada masculina' => 63.04,
                    'Población Ocupada femenina' => 36.96,
                    'Población Desocupada' => 2.94,
                    'Derechohabiencia' => 79.67
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 113,
                    'Ocupación por Vivienda' => 3.72,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.80,
                    'Viviendas con Drenaje' => 99.80,
                    'Viviendas con Televisión' => 99.81,
                    'Viviendas con Automóvil' => 88.91,
                    'Viviendas con Computadora' => 77.21
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 24,
                    'Primer actividad nombre' => 'Inmobiliarios',
                    'Primer actividad porcentaje' => 16.67,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Comercio Mayoreo',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Comercio Menudeo',
                    'Cuarta actividad porcentaje' => 12.50,
                    'Quinta actividad nombre' => 'Construcción',
                    'Quinta actividad porcentaje' => 12.50
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
            'Centro latitud'  => 25.5706722258635,
            'Centro longitud' => -103.447825677144
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

} // Clase LeandroRovirosaWade

?>
