<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Abastos
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
 * Clase Abastos
 */
class Abastos extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Abastos';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'abastos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Abastos en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Abastos';
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
                    'Población total' => 3790,
                    'Porcentaje de población masculina' => 48.35,
                    'Porcentaje de población femenina' => 51.65,
                    'Porcentaje de población de 0 a 14 años' => 25.44,
                    'Porcentaje de población de 15 a 64 años' => 64.69,
                    'Porcentaje de población de 65 y más años' => 9.05,
                    'Porcentaje de población no especificada' => 0.82,
                    'Fecundidad promedio' => 2.72,
                    'Porcentaje de población con discapacidad' => 8.48
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.70,
                    'Población Económicamente Activa masculina' => 64.10,
                    'Población Económicamente Activa femenina' => 35.90,
                    'Población Ocupada' => 87.13,
                    'Población Ocupada masculina' => 62.57,
                    'Población Ocupada femenina' => 37.43,
                    'Población Desocupada' => 12.87,
                    'Derechohabiencia' => 68.46
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 989,
                    'Ocupación por Vivienda' => 3.83,
                    'Viviendas con Electricidad' => 99.93,
                    'Viviendas con Agua' => 99.93,
                    'Viviendas con Drenaje' => 99.93,
                    'Viviendas con Televisión' => 98.41,
                    'Viviendas con Automóvil' => 39.16,
                    'Viviendas con Computadora' => 26.10
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 159,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 45.28,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 18.24,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 9.43,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 6.29,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 4.40
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
            'Centro latitud'  => 25.5527084692424,
            'Centro longitud' => -103.421664654276
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

} // Clase Abastos

?>
