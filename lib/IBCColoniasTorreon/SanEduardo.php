<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon SanEduardo
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
 * Clase SanEduardo
 */
class SanEduardo extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'San Eduardo';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'san-eduardo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia San Eduardo en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, San Eduardo';
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
                    'Porcentaje de población masculina' => 49.64,
                    'Porcentaje de población femenina' => 50.36,
                    'Porcentaje de población de 0 a 14 años' => 39.57,
                    'Porcentaje de población de 15 a 64 años' => 58.99,
                    'Porcentaje de población de 65 y más años' => 1.44,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.19,
                    'Porcentaje de población con discapacidad' => 3.07
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 61.96,
                    'Población Económicamente Activa masculina' => 64.91,
                    'Población Económicamente Activa femenina' => 35.09,
                    'Población Ocupada' => 94.46,
                    'Población Ocupada masculina' => 62.96,
                    'Población Ocupada femenina' => 37.04,
                    'Población Desocupada' => 5.54,
                    'Derechohabiencia' => 79.14
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 36,
                    'Ocupación por Vivienda' => 3.86,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 69.44,
                    'Viviendas con Computadora' => 38.89
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 14,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 21.43,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 14.29,
                    'Tercera actividad nombre' => 'Comercio Mayoreo',
                    'Tercera actividad porcentaje' => 14.29,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 7.14,
                    'Quinta actividad nombre' => 'Inmobiliarios',
                    'Quinta actividad porcentaje' => 7.14
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
            'Centro latitud'  => 25.5369310142009,
            'Centro longitud' => -103.324214315245
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

} // Clase SanEduardo

?>
