<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Moderna
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
 * Clase Moderna
 */
class Moderna extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Moderna';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'moderna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Moderna en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Moderna';
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
                    'Población total' => 2110,
                    'Porcentaje de población masculina' => 47.80,
                    'Porcentaje de población femenina' => 52.20,
                    'Porcentaje de población de 0 a 14 años' => 20.41,
                    'Porcentaje de población de 15 a 64 años' => 64.27,
                    'Porcentaje de población de 65 y más años' => 12.90,
                    'Porcentaje de población no especificada' => 2.42,
                    'Fecundidad promedio' => 2.18,
                    'Porcentaje de población con discapacidad' => 9.95
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.31,
                    'Población Económicamente Activa masculina' => 62.47,
                    'Población Económicamente Activa femenina' => 37.53,
                    'Población Ocupada' => 91.70,
                    'Población Ocupada masculina' => 60.99,
                    'Población Ocupada femenina' => 39.01,
                    'Población Desocupada' => 8.30,
                    'Derechohabiencia' => 63.58
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 600,
                    'Ocupación por Vivienda' => 3.52,
                    'Viviendas con Electricidad' => 99.21,
                    'Viviendas con Agua' => 99.21,
                    'Viviendas con Drenaje' => 98.88,
                    'Viviendas con Televisión' => 98.03,
                    'Viviendas con Automóvil' => 46.97,
                    'Viviendas con Computadora' => 38.32
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 209,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 29.19,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 22.97,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 11.00,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 10.53,
                    'Quinta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Quinta actividad porcentaje' => 4.78
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
            'Centro latitud'  => 25.5446131477138,
            'Centro longitud' => -103.460691524286
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

} // Clase Moderna

?>
