<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon AmpliacionLeandroRovirosaWade
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
 * Clase AmpliacionLeandroRovirosaWade
 */
class AmpliacionLeandroRovirosaWade extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Ampliación Leandro Rovirosa Wade';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'ampliacion-leandro-rovirosa-wade';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ampliación Leandro Rovirosa Wade en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Ampliación Leandro Rovirosa Wade';
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
                    'Población total' => 1792,
                    'Porcentaje de población masculina' => 47.60,
                    'Porcentaje de población femenina' => 52.40,
                    'Porcentaje de población de 0 a 14 años' => 31.75,
                    'Porcentaje de población de 15 a 64 años' => 63.50,
                    'Porcentaje de población de 65 y más años' => 3.07,
                    'Porcentaje de población no especificada' => 1.68,
                    'Fecundidad promedio' => 1.51,
                    'Porcentaje de población con discapacidad' => 5.36
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 62.99,
                    'Población Económicamente Activa masculina' => 55.83,
                    'Población Económicamente Activa femenina' => 44.17,
                    'Población Ocupada' => 97.02,
                    'Población Ocupada masculina' => 56.20,
                    'Población Ocupada femenina' => 43.80,
                    'Población Desocupada' => 2.98,
                    'Derechohabiencia' => 75.84
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 527,
                    'Ocupación por Vivienda' => 3.40,
                    'Viviendas con Electricidad' => 99.81,
                    'Viviendas con Agua' => 98.86,
                    'Viviendas con Drenaje' => 98.67,
                    'Viviendas con Televisión' => 99.24,
                    'Viviendas con Automóvil' => 81.05,
                    'Viviendas con Computadora' => 68.65
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 7,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 42.86,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 42.86,
                    'Tercera actividad nombre' => 'Manejo de Residuos',
                    'Tercera actividad porcentaje' => 14.29
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
            'Centro latitud'  => 25.5734197844851,
            'Centro longitud' => -103.447147376733
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

} // Clase AmpliacionLeandroRovirosaWade

?>
