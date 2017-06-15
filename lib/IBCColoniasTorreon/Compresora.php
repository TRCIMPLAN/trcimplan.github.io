<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Compresora
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
 * Clase Compresora
 */
class Compresora extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Compresora';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'compresora';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Compresora en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Compresora';
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
                    'Población total' => 1144,
                    'Porcentaje de población masculina' => 49.06,
                    'Porcentaje de población femenina' => 50.94,
                    'Porcentaje de población de 0 a 14 años' => 23.90,
                    'Porcentaje de población de 15 a 64 años' => 66.62,
                    'Porcentaje de población de 65 y más años' => 9.48,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.53,
                    'Porcentaje de población con discapacidad' => 7.17
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.40,
                    'Población Económicamente Activa masculina' => 66.87,
                    'Población Económicamente Activa femenina' => 33.13,
                    'Población Ocupada' => 89.78,
                    'Población Ocupada masculina' => 65.15,
                    'Población Ocupada femenina' => 34.85,
                    'Población Desocupada' => 10.22,
                    'Derechohabiencia' => 66.33
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 288,
                    'Ocupación por Vivienda' => 3.97,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.71,
                    'Viviendas con Automóvil' => 26.77,
                    'Viviendas con Computadora' => 21.20
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 15,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 60.00,
                    'Segunda actividad nombre' => 'Industria Manufacturera',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 6.67,
                    'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Cuarta actividad porcentaje' => 6.67,
                    'Quinta actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Quinta actividad porcentaje' => 6.67
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
            'Centro latitud'  => 25.532346464606,
            'Centro longitud' => -103.462385904881
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

} // Clase Compresora

?>
