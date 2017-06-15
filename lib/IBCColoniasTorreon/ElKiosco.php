<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ElKiosco
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
 * Clase ElKiosco
 */
class ElKiosco extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'El Kiosco';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'el-kiosco';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia El Kiosco en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, El Kiosco';
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
                    'Población total' => 639,
                    'Porcentaje de población masculina' => 48.67,
                    'Porcentaje de población femenina' => 51.33,
                    'Porcentaje de población de 0 a 14 años' => 37.09,
                    'Porcentaje de población de 15 a 64 años' => 60.41,
                    'Porcentaje de población de 65 y más años' => 2.03,
                    'Porcentaje de población no especificada' => 0.47,
                    'Fecundidad promedio' => 1.72,
                    'Porcentaje de población con discapacidad' => 1.86
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 62.65,
                    'Población Económicamente Activa masculina' => 63.40,
                    'Población Económicamente Activa femenina' => 36.60,
                    'Población Ocupada' => 98.08,
                    'Población Ocupada masculina' => 63.46,
                    'Población Ocupada femenina' => 36.54,
                    'Población Desocupada' => 1.92,
                    'Derechohabiencia' => 82.47
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 190,
                    'Ocupación por Vivienda' => 3.36,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.42,
                    'Viviendas con Automóvil' => 72.11,
                    'Viviendas con Computadora' => 54.21
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 18,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 38.89,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Inmobiliarios',
                    'Cuarta actividad porcentaje' => 11.11,
                    'Quinta actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Quinta actividad porcentaje' => 11.11
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
            'Centro latitud'  => 25.5455918969733,
            'Centro longitud' => -103.360961543431
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

} // Clase ElKiosco

?>
