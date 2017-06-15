<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon PuertaReal
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
 * Clase PuertaReal
 */
class PuertaReal extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Puerta Real';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'puerta-real';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Puerta Real en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Puerta Real';
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
                    'Población total' => 886,
                    'Porcentaje de población masculina' => 48.75,
                    'Porcentaje de población femenina' => 51.25,
                    'Porcentaje de población de 0 a 14 años' => 33.15,
                    'Porcentaje de población de 15 a 64 años' => 64.80,
                    'Porcentaje de población de 65 y más años' => 1.93,
                    'Porcentaje de población no especificada' => 0.12,
                    'Fecundidad promedio' => 1.29,
                    'Porcentaje de población con discapacidad' => 1.06
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 64.83,
                    'Población Económicamente Activa masculina' => 60.38,
                    'Población Económicamente Activa femenina' => 39.62,
                    'Población Ocupada' => 97.96,
                    'Población Ocupada masculina' => 60.81,
                    'Población Ocupada femenina' => 39.19,
                    'Población Desocupada' => 2.04,
                    'Derechohabiencia' => 86.07
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 275,
                    'Ocupación por Vivienda' => 3.22,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.89,
                    'Viviendas con Automóvil' => 96.37,
                    'Viviendas con Computadora' => 85.38
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 4,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 75.00,
                    'Segunda actividad nombre' => 'Industria Manufacturera',
                    'Segunda actividad porcentaje' => 25.00
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
            'Centro latitud'  => 25.5623382762711,
            'Centro longitud' => -103.386762636685
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

} // Clase PuertaReal

?>
