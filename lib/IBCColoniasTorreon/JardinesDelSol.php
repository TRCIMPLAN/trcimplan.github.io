<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon JardinesDelSol
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
 * Clase JardinesDelSol
 */
class JardinesDelSol extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Jardines Del Sol';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'jardines-del-sol';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Jardines Del Sol en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Jardines Del Sol';
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
                    'Población total' => 988,
                    'Porcentaje de población masculina' => 49.79,
                    'Porcentaje de población femenina' => 50.21,
                    'Porcentaje de población de 0 a 14 años' => 36.24,
                    'Porcentaje de población de 15 a 64 años' => 62.25,
                    'Porcentaje de población de 65 y más años' => 0.85,
                    'Porcentaje de población no especificada' => 0.66,
                    'Fecundidad promedio' => 1.80,
                    'Porcentaje de población con discapacidad' => 1.37
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 63.28,
                    'Población Económicamente Activa masculina' => 67.43,
                    'Población Económicamente Activa femenina' => 32.57,
                    'Población Ocupada' => 93.24,
                    'Población Ocupada masculina' => 66.79,
                    'Población Ocupada femenina' => 33.21,
                    'Población Desocupada' => 6.76,
                    'Derechohabiencia' => 81.14
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 277,
                    'Ocupación por Vivienda' => 3.57,
                    'Viviendas con Electricidad' => 99.97,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.86,
                    'Viviendas con Automóvil' => 48.52,
                    'Viviendas con Computadora' => 25.90
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 29,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 68.97,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 13.79,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 6.90,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 6.90,
                    'Quinta actividad nombre' => 'Manejo de Residuos',
                    'Quinta actividad porcentaje' => 3.45
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
            'Centro latitud'  => 25.6036654382407,
            'Centro longitud' => -103.373056689919
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

} // Clase JardinesDelSol

?>
