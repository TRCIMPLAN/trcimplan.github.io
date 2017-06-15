<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Bocanegra
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
 * Clase Bocanegra
 */
class Bocanegra extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Bocanegra';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'bocanegra';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Bocanegra en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Bocanegra';
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
                    'Población total' => 1439,
                    'Porcentaje de población masculina' => 48.99,
                    'Porcentaje de población femenina' => 51.01,
                    'Porcentaje de población de 0 a 14 años' => 26.89,
                    'Porcentaje de población de 15 a 64 años' => 64.21,
                    'Porcentaje de población de 65 y más años' => 8.41,
                    'Porcentaje de población no especificada' => 0.49,
                    'Fecundidad promedio' => 2.63,
                    'Porcentaje de población con discapacidad' => 3.40
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.04,
                    'Población Económicamente Activa masculina' => 63.77,
                    'Población Económicamente Activa femenina' => 36.23,
                    'Población Ocupada' => 91.28,
                    'Población Ocupada masculina' => 62.82,
                    'Población Ocupada femenina' => 37.18,
                    'Población Desocupada' => 8.72,
                    'Derechohabiencia' => 63.93
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 366,
                    'Ocupación por Vivienda' => 3.93,
                    'Viviendas con Electricidad' => 99.45,
                    'Viviendas con Agua' => 98.91,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.63,
                    'Viviendas con Automóvil' => 46.51,
                    'Viviendas con Computadora' => 25.28
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 87,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 35.63,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 22.99,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 12.64,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 12.64,
                    'Quinta actividad nombre' => 'Salud',
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
            'Centro latitud'  => 25.5564918321917,
            'Centro longitud' => -103.41756443721
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

} // Clase Bocanegra

?>
