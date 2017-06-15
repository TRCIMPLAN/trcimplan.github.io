<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon AviacionSanIgnacio
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
 * Clase AviacionSanIgnacio
 */
class AviacionSanIgnacio extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Aviación San Ignacio';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'aviacion-san-ignacio';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Aviación San Ignacio en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Aviación San Ignacio';
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
                    'Población total' => 890,
                    'Porcentaje de población masculina' => 48.53,
                    'Porcentaje de población femenina' => 51.47,
                    'Porcentaje de población de 0 a 14 años' => 34.71,
                    'Porcentaje de población de 15 a 64 años' => 63.36,
                    'Porcentaje de población de 65 y más años' => 1.59,
                    'Porcentaje de población no especificada' => 0.34,
                    'Fecundidad promedio' => 1.76,
                    'Porcentaje de población con discapacidad' => 2.22
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 58.83,
                    'Población Económicamente Activa masculina' => 63.02,
                    'Población Económicamente Activa femenina' => 36.98,
                    'Población Ocupada' => 96.11,
                    'Población Ocupada masculina' => 63.25,
                    'Población Ocupada femenina' => 36.75,
                    'Población Desocupada' => 3.89,
                    'Derechohabiencia' => 76.73
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 239,
                    'Ocupación por Vivienda' => 3.72,
                    'Viviendas con Electricidad' => 99.85,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.01,
                    'Viviendas con Automóvil' => 74.09,
                    'Viviendas con Computadora' => 54.15
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 20,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 45.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 30.00,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 10.00,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 5.00,
                    'Quinta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Quinta actividad porcentaje' => 5.00
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
            'Centro latitud'  => 25.5641817141637,
            'Centro longitud' => -103.392976287035
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

} // Clase AviacionSanIgnacio

?>
