<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon JardinesDeCalifornia
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
 * Clase JardinesDeCalifornia
 */
class JardinesDeCalifornia extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Jardines de California';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'jardines-de-california';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Jardines de California en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Jardines de California';
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
                    'Población total' => 2292,
                    'Porcentaje de población masculina' => 47.56,
                    'Porcentaje de población femenina' => 52.44,
                    'Porcentaje de población de 0 a 14 años' => 13.26,
                    'Porcentaje de población de 15 a 64 años' => 66.36,
                    'Porcentaje de población de 65 y más años' => 15.27,
                    'Porcentaje de población no especificada' => 5.11,
                    'Fecundidad promedio' => 2.14,
                    'Porcentaje de población con discapacidad' => 7.89
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 48.31,
                    'Población Económicamente Activa masculina' => 56.99,
                    'Población Económicamente Activa femenina' => 43.01,
                    'Población Ocupada' => 91.67,
                    'Población Ocupada masculina' => 56.03,
                    'Población Ocupada femenina' => 43.97,
                    'Población Desocupada' => 8.33,
                    'Derechohabiencia' => 75.61
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 658,
                    'Ocupación por Vivienda' => 3.48,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.70,
                    'Viviendas con Drenaje' => 99.70,
                    'Viviendas con Televisión' => 99.85,
                    'Viviendas con Automóvil' => 79.03,
                    'Viviendas con Computadora' => 63.83
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 102,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 28.43,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 25.49,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 13.73,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 6.86,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 5.88
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
            'Centro latitud'  => 25.5253861701899,
            'Centro longitud' => -103.429567424927
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

} // Clase JardinesDeCalifornia

?>
