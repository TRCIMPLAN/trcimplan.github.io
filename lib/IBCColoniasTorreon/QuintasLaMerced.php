<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon QuintasLaMerced
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
 * Clase QuintasLaMerced
 */
class QuintasLaMerced extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Quintas La Merced';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'quintas-la-merced';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Quintas La Merced en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Quintas La Merced';
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
                    'Población total' => 457,
                    'Porcentaje de población masculina' => 48.14,
                    'Porcentaje de población femenina' => 51.86,
                    'Porcentaje de población de 0 a 14 años' => 32.82,
                    'Porcentaje de población de 15 a 64 años' => 65.86,
                    'Porcentaje de población de 65 y más años' => 1.31,
                    'Porcentaje de población no especificada' => 0.01,
                    'Fecundidad promedio' => 1.63,
                    'Porcentaje de población con discapacidad' => 3.37
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.15,
                    'Población Económicamente Activa masculina' => 60.99,
                    'Población Económicamente Activa femenina' => 39.01,
                    'Población Ocupada' => 92.35,
                    'Población Ocupada masculina' => 61.54,
                    'Población Ocupada femenina' => 38.46,
                    'Población Desocupada' => 7.65,
                    'Derechohabiencia' => 71.99
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 121,
                    'Ocupación por Vivienda' => 3.78,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 99.17,
                    'Viviendas con Televisión' => 98.35,
                    'Viviendas con Automóvil' => 71.07,
                    'Viviendas con Computadora' => 49.59
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 5,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 60.00,
                    'Segunda actividad nombre' => 'Salud',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Tercera actividad porcentaje' => 20.00
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
            'Centro latitud'  => 25.5117966551415,
            'Centro longitud' => -103.38829586262
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

} // Clase QuintasLaMerced

?>
