<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon GustavoDiazOrdaz
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
 * Clase GustavoDiazOrdaz
 */
class GustavoDiazOrdaz extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Gustavo Díaz Ordaz';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'gustavo-diaz-ordaz';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Gustavo Díaz Ordaz en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Gustavo Díaz Ordaz';
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
                    'Población total' => 505,
                    'Porcentaje de población masculina' => 49.06,
                    'Porcentaje de población femenina' => 50.94,
                    'Porcentaje de población de 0 a 14 años' => 22.55,
                    'Porcentaje de población de 15 a 64 años' => 63.70,
                    'Porcentaje de población de 65 y más años' => 11.91,
                    'Porcentaje de población no especificada' => 1.84,
                    'Fecundidad promedio' => 2.57,
                    'Porcentaje de población con discapacidad' => 8.81
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.06,
                    'Población Económicamente Activa masculina' => 68.10,
                    'Población Económicamente Activa femenina' => 31.90,
                    'Población Ocupada' => 88.70,
                    'Población Ocupada masculina' => 67.32,
                    'Población Ocupada femenina' => 32.68,
                    'Población Desocupada' => 11.30,
                    'Derechohabiencia' => 65.64
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 134,
                    'Ocupación por Vivienda' => 3.77,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 99.57,
                    'Viviendas con Televisión' => 99.55,
                    'Viviendas con Automóvil' => 53.62,
                    'Viviendas con Computadora' => 37.42
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 100,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 41.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 27.00,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 12.00,
                    'Cuarta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Cuarta actividad porcentaje' => 5.00,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
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
            'Centro latitud'  => 25.5354118050597,
            'Centro longitud' => -103.383259564568
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

} // Clase GustavoDiazOrdaz

?>
