<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Dalia
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
 * Clase Dalia
 */
class Dalia extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Dalia';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'dalia';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Dalia en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Dalia';
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
                    'Población total' => 139,
                    'Porcentaje de población masculina' => 46.76,
                    'Porcentaje de población femenina' => 53.24,
                    'Porcentaje de población de 0 a 14 años' => 33.81,
                    'Porcentaje de población de 15 a 64 años' => 66.19,
                    'Porcentaje de población de 65 y más años' => 0.00,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.66,
                    'Porcentaje de población con discapacidad' => 4.51
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.61,
                    'Población Económicamente Activa masculina' => 70.00,
                    'Población Económicamente Activa femenina' => 30.00,
                    'Población Ocupada' => 92.89,
                    'Población Ocupada masculina' => 67.86,
                    'Población Ocupada femenina' => 32.14,
                    'Población Desocupada' => 7.11,
                    'Derechohabiencia' => 87.77
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 37,
                    'Ocupación por Vivienda' => 3.76,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 72.97,
                    'Viviendas con Computadora' => 37.84
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 4,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Financieros y Seguros',
                    'Segunda actividad porcentaje' => 25.00,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 25.00
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
            'Centro latitud'  => 25.4936730970941,
            'Centro longitud' => -103.406261727172
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

} // Clase Dalia

?>
