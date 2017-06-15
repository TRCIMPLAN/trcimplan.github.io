<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LaPaz
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
 * Clase LaPaz
 */
class LaPaz extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'La Paz';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'la-paz';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia La Paz en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, La Paz';
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
                    'Población total' => 1550,
                    'Porcentaje de población masculina' => 50.42,
                    'Porcentaje de población femenina' => 49.58,
                    'Porcentaje de población de 0 a 14 años' => 40.41,
                    'Porcentaje de población de 15 a 64 años' => 58.54,
                    'Porcentaje de población de 65 y más años' => 1.04,
                    'Porcentaje de población no especificada' => 0.01,
                    'Fecundidad promedio' => 2.14,
                    'Porcentaje de población con discapacidad' => 1.55
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 58.64,
                    'Población Económicamente Activa masculina' => 74.06,
                    'Población Económicamente Activa femenina' => 25.94,
                    'Población Ocupada' => 94.97,
                    'Población Ocupada masculina' => 73.47,
                    'Población Ocupada femenina' => 26.53,
                    'Población Desocupada' => 5.03,
                    'Derechohabiencia' => 72.63
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 398,
                    'Ocupación por Vivienda' => 3.89,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.82,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.31,
                    'Viviendas con Automóvil' => 43.40,
                    'Viviendas con Computadora' => 33.09
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 20,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 65.00,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 5.00,
                    'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Cuarta actividad porcentaje' => 5.00,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
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
            'Centro latitud'  => 25.590132026538,
            'Centro longitud' => -103.36137599784
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

} // Clase LaPaz

?>
