<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon PlanDeSanLuis
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
 * Clase PlanDeSanLuis
 */
class PlanDeSanLuis extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Plan de San Luis';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'plan-de-san-luis';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Plan de San Luis en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Plan de San Luis';
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
                    'Población total' => 859,
                    'Porcentaje de población masculina' => 49.59,
                    'Porcentaje de población femenina' => 50.41,
                    'Porcentaje de población de 0 a 14 años' => 24.10,
                    'Porcentaje de población de 15 a 64 años' => 72.41,
                    'Porcentaje de población de 65 y más años' => 3.14,
                    'Porcentaje de población no especificada' => 0.35,
                    'Fecundidad promedio' => 1.84,
                    'Porcentaje de población con discapacidad' => 3.93
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.88,
                    'Población Económicamente Activa masculina' => 62.47,
                    'Población Económicamente Activa femenina' => 37.53,
                    'Población Ocupada' => 94.15,
                    'Población Ocupada masculina' => 61.07,
                    'Población Ocupada femenina' => 38.93,
                    'Población Desocupada' => 5.85,
                    'Derechohabiencia' => 70.66
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 231,
                    'Ocupación por Vivienda' => 3.72,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.70,
                    'Viviendas con Automóvil' => 60.61,
                    'Viviendas con Computadora' => 48.24
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 20,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 10.00,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 10.00,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 10.00
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
            'Centro latitud'  => 25.5433897021187,
            'Centro longitud' => -103.372209328552
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

} // Clase PlanDeSanLuis

?>
