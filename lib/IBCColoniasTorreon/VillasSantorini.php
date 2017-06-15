<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillasSantorini
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
 * Clase VillasSantorini
 */
class VillasSantorini extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Villas Santorini';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'villas-santorini';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas Santorini en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Villas Santorini';
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
                    'Población total' => 880,
                    'Porcentaje de población masculina' => 50.68,
                    'Porcentaje de población femenina' => 49.32,
                    'Porcentaje de población de 0 a 14 años' => 34.09,
                    'Porcentaje de población de 15 a 64 años' => 58.30,
                    'Porcentaje de población de 65 y más años' => 3.18,
                    'Porcentaje de población no especificada' => 4.43,
                    'Fecundidad promedio' => 1.49,
                    'Porcentaje de población con discapacidad' => 1.26
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 69.49,
                    'Población Económicamente Activa masculina' => 57.11,
                    'Población Económicamente Activa femenina' => 42.89,
                    'Población Ocupada' => 98.97,
                    'Población Ocupada masculina' => 56.67,
                    'Población Ocupada femenina' => 43.33,
                    'Población Desocupada' => 1.03,
                    'Derechohabiencia' => 81.48
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 245,
                    'Ocupación por Vivienda' => 3.59,
                    'Viviendas con Electricidad' => 99.59,
                    'Viviendas con Agua' => 98.37,
                    'Viviendas con Drenaje' => 98.78,
                    'Viviendas con Televisión' => 99.59,
                    'Viviendas con Automóvil' => 98.37,
                    'Viviendas con Computadora' => 90.61
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 12,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Educativos',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Inmobiliarios',
                    'Tercera actividad porcentaje' => 8.33,
                    'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Cuarta actividad porcentaje' => 8.33,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 8.33
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
            'Centro latitud'  => 25.589096799599,
            'Centro longitud' => -103.415894194045
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

} // Clase VillasSantorini

?>
