<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon PedregalDelValle
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
 * Clase PedregalDelValle
 */
class PedregalDelValle extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Pedregal del Valle';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'pedregal-del-valle';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Pedregal del Valle en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Pedregal del Valle';
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
                    'Población total' => 1971,
                    'Porcentaje de población masculina' => 48.30,
                    'Porcentaje de población femenina' => 51.70,
                    'Porcentaje de población de 0 a 14 años' => 35.36,
                    'Porcentaje de población de 15 a 64 años' => 60.98,
                    'Porcentaje de población de 65 y más años' => 3.04,
                    'Porcentaje de población no especificada' => 0.62,
                    'Fecundidad promedio' => 1.84,
                    'Porcentaje de población con discapacidad' => 1.92
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 58.22,
                    'Población Económicamente Activa masculina' => 65.19,
                    'Población Económicamente Activa femenina' => 34.81,
                    'Población Ocupada' => 90.21,
                    'Población Ocupada masculina' => 64.26,
                    'Población Ocupada femenina' => 35.74,
                    'Población Desocupada' => 9.79,
                    'Derechohabiencia' => 68.19
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 505,
                    'Ocupación por Vivienda' => 3.90,
                    'Viviendas con Electricidad' => 99.80,
                    'Viviendas con Agua' => 99.21,
                    'Viviendas con Drenaje' => 99.01,
                    'Viviendas con Televisión' => 99.21,
                    'Viviendas con Automóvil' => 59.41,
                    'Viviendas con Computadora' => 38.81
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 33,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 48.48,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 21.21,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 18.18,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 3.03,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 3.03
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
            'Centro latitud'  => 25.5520892235904,
            'Centro longitud' => -103.354324360051
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

} // Clase PedregalDelValle

?>
