<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon HaciendaSantaMaria
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
 * Clase HaciendaSantaMaria
 */
class HaciendaSantaMaria extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Hacienda Santa María';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'hacienda-santa-maria';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Hacienda Santa María en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Hacienda Santa María';
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
                    'Población total' => 92,
                    'Porcentaje de población masculina' => 48.81,
                    'Porcentaje de población femenina' => 51.19,
                    'Porcentaje de población de 0 a 14 años' => 35.28,
                    'Porcentaje de población de 15 a 64 años' => 59.94,
                    'Porcentaje de población de 65 y más años' => 4.70,
                    'Porcentaje de población no especificada' => 0.08,
                    'Fecundidad promedio' => 1.46,
                    'Porcentaje de población con discapacidad' => 6.44
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 65.26,
                    'Población Económicamente Activa masculina' => 55.87,
                    'Población Económicamente Activa femenina' => 44.13,
                    'Población Ocupada' => 98.96,
                    'Población Ocupada masculina' => 55.63,
                    'Población Ocupada femenina' => 44.37,
                    'Población Desocupada' => 1.04,
                    'Derechohabiencia' => 88.02
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 28,
                    'Ocupación por Vivienda' => 3.29,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 58.72,
                    'Viviendas con Computadora' => 34.09
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 6,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 33.33,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 33.33,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Comercio Menudeo',
                    'Cuarta actividad porcentaje' => 16.67
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
            'Centro latitud'  => 25.5205497398951,
            'Centro longitud' => -103.347392411562
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

} // Clase HaciendaSantaMaria

?>
