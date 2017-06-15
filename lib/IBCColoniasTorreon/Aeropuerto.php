<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Aeropuerto
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
 * Clase Aeropuerto
 */
class Aeropuerto extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Aeropuerto';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'aeropuerto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Aeropuerto en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Aeropuerto';
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
                    'Población total' => 237,
                    'Porcentaje de población masculina' => 51.05,
                    'Porcentaje de población femenina' => 48.95,
                    'Porcentaje de población de 0 a 14 años' => 34.60,
                    'Porcentaje de población de 15 a 64 años' => 62.45,
                    'Porcentaje de población de 65 y más años' => 2.95,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.38,
                    'Porcentaje de población con discapacidad' => 0.99
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.81,
                    'Población Económicamente Activa masculina' => 62.50,
                    'Población Económicamente Activa femenina' => 37.50,
                    'Población Ocupada' => 90.98,
                    'Población Ocupada masculina' => 59.09,
                    'Población Ocupada femenina' => 40.91,
                    'Población Desocupada' => 9.02,
                    'Derechohabiencia' => 77.22
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 64,
                    'Ocupación por Vivienda' => 3.70,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.44,
                    'Viviendas con Automóvil' => 68.75,
                    'Viviendas con Computadora' => 50.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 2,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 50.00
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
            'Centro latitud'  => 25.5651442844111,
            'Centro longitud' => -103.391625231322
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

} // Clase Aeropuerto

?>
