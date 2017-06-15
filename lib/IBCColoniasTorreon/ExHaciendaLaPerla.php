<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ExHaciendaLaPerla
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
 * Clase ExHaciendaLaPerla
 */
class ExHaciendaLaPerla extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Ex-Hacienda La Perla';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'ex-hacienda-la-perla';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ex-Hacienda La Perla en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Ex-Hacienda La Perla';
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
                    'Población total' => 3172,
                    'Porcentaje de población masculina' => 50.76,
                    'Porcentaje de población femenina' => 49.24,
                    'Porcentaje de población de 0 a 14 años' => 39.47,
                    'Porcentaje de población de 15 a 64 años' => 58.61,
                    'Porcentaje de población de 65 y más años' => 1.07,
                    'Porcentaje de población no especificada' => 0.85,
                    'Fecundidad promedio' => 2.01,
                    'Porcentaje de población con discapacidad' => 1.89
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 59.13,
                    'Población Económicamente Activa masculina' => 70.82,
                    'Población Económicamente Activa femenina' => 29.18,
                    'Población Ocupada' => 86.91,
                    'Población Ocupada masculina' => 70.36,
                    'Población Ocupada femenina' => 29.64,
                    'Población Desocupada' => 13.09,
                    'Derechohabiencia' => 67.75
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 815,
                    'Ocupación por Vivienda' => 3.89,
                    'Viviendas con Electricidad' => 99.63,
                    'Viviendas con Agua' => 99.39,
                    'Viviendas con Drenaje' => 99.39,
                    'Viviendas con Televisión' => 98.65,
                    'Viviendas con Automóvil' => 33.79,
                    'Viviendas con Computadora' => 23.78
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 68,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 44.12,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 26.47,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 8.82,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 7.35,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 4.41
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
            'Centro latitud'  => 25.4927426094768,
            'Centro longitud' => -103.348757702809
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

} // Clase ExHaciendaLaPerla

?>
