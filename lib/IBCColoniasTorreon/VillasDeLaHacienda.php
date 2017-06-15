<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillasDeLaHacienda
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
 * Clase VillasDeLaHacienda
 */
class VillasDeLaHacienda extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Villas de La Hacienda';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'villas-de-la-hacienda';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas de La Hacienda en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Villas de La Hacienda';
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
                    'Población total' => 1888,
                    'Porcentaje de población masculina' => 49.36,
                    'Porcentaje de población femenina' => 50.64,
                    'Porcentaje de población de 0 a 14 años' => 25.26,
                    'Porcentaje de población de 15 a 64 años' => 70.23,
                    'Porcentaje de población de 65 y más años' => 3.65,
                    'Porcentaje de población no especificada' => 0.86,
                    'Fecundidad promedio' => 1.65,
                    'Porcentaje de población con discapacidad' => 1.24
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.65,
                    'Población Económicamente Activa masculina' => 59.64,
                    'Población Económicamente Activa femenina' => 40.36,
                    'Población Ocupada' => 97.50,
                    'Población Ocupada masculina' => 59.03,
                    'Población Ocupada femenina' => 40.97,
                    'Población Desocupada' => 2.50,
                    'Derechohabiencia' => 77.60
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 498,
                    'Ocupación por Vivienda' => 3.79,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.40,
                    'Viviendas con Drenaje' => 99.60,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 92.97,
                    'Viviendas con Computadora' => 82.13
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 31,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 35.48,
                    'Segunda actividad nombre' => 'Industria Manufacturera',
                    'Segunda actividad porcentaje' => 19.35,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 16.13,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 12.90,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 9.68
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
            'Centro latitud'  => 25.5162770463914,
            'Centro longitud' => -103.386045766761
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

} // Clase VillasDeLaHacienda

?>
