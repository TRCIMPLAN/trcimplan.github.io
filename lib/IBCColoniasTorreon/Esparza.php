<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Esparza
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
 * Clase Esparza
 */
class Esparza extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Esparza';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'esparza';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Esparza en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Esparza';
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
                    'Población total' => 1150,
                    'Porcentaje de población masculina' => 49.13,
                    'Porcentaje de población femenina' => 50.87,
                    'Porcentaje de población de 0 a 14 años' => 22.65,
                    'Porcentaje de población de 15 a 64 años' => 65.59,
                    'Porcentaje de población de 65 y más años' => 10.37,
                    'Porcentaje de población no especificada' => 1.39,
                    'Fecundidad promedio' => 2.36,
                    'Porcentaje de población con discapacidad' => 6.20
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.53,
                    'Población Económicamente Activa masculina' => 62.81,
                    'Población Económicamente Activa femenina' => 37.19,
                    'Población Ocupada' => 91.26,
                    'Población Ocupada masculina' => 61.43,
                    'Población Ocupada femenina' => 38.57,
                    'Población Desocupada' => 8.74,
                    'Derechohabiencia' => 71.68
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 319,
                    'Ocupación por Vivienda' => 3.61,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.54,
                    'Viviendas con Drenaje' => 99.23,
                    'Viviendas con Televisión' => 99.23,
                    'Viviendas con Automóvil' => 44.60,
                    'Viviendas con Computadora' => 34.65
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 24,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 41.67,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 29.17,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 20.83,
                    'Cuarta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Cuarta actividad porcentaje' => 4.17,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 4.17
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
            'Centro latitud'  => 25.5497280572007,
            'Centro longitud' => -103.462379895965
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

} // Clase Esparza

?>
