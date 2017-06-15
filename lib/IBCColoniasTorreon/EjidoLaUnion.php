<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon EjidoLaUnion
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
 * Clase EjidoLaUnion
 */
class EjidoLaUnion extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Ejido La Unión';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'ejido-la-union';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido La Unión en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Ejido La Unión';
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
                    'Población total' => 4885,
                    'Porcentaje de población masculina' => 49.99,
                    'Porcentaje de población femenina' => 50.01,
                    'Porcentaje de población de 0 a 14 años' => 29.94,
                    'Porcentaje de población de 15 a 64 años' => 62.78,
                    'Porcentaje de población de 65 y más años' => 5.66,
                    'Porcentaje de población no especificada' => 1.62,
                    'Fecundidad promedio' => 2.54,
                    'Porcentaje de población con discapacidad' => 5.81
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.17,
                    'Población Económicamente Activa masculina' => 66.89,
                    'Población Económicamente Activa femenina' => 33.11,
                    'Población Ocupada' => 90.21,
                    'Población Ocupada masculina' => 65.21,
                    'Población Ocupada femenina' => 34.79,
                    'Población Desocupada' => 9.79,
                    'Derechohabiencia' => 60.20
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1156,
                    'Ocupación por Vivienda' => 4.23,
                    'Viviendas con Electricidad' => 99.44,
                    'Viviendas con Agua' => 98.14,
                    'Viviendas con Drenaje' => 94.23,
                    'Viviendas con Televisión' => 96.93,
                    'Viviendas con Automóvil' => 44.88,
                    'Viviendas con Computadora' => 27.87
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 140,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 44.29,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 17.86,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 15.00,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 7.14,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
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
            'Centro latitud'  => 25.6013402434624,
            'Centro longitud' => -103.411814960582
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

} // Clase EjidoLaUnion

?>
