<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LuisEcheverriaNorte
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
 * Clase LuisEcheverriaNorte
 */
class LuisEcheverriaNorte extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Luis Echeverría Norte';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'luis-echeverria-norte';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Luis Echeverría Norte en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Luis Echeverría Norte';
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
                    'Población total' => 2867,
                    'Porcentaje de población masculina' => 48.13,
                    'Porcentaje de población femenina' => 51.87,
                    'Porcentaje de población de 0 a 14 años' => 25.04,
                    'Porcentaje de población de 15 a 64 años' => 66.24,
                    'Porcentaje de población de 65 y más años' => 8.62,
                    'Porcentaje de población no especificada' => 0.10,
                    'Fecundidad promedio' => 2.38,
                    'Porcentaje de población con discapacidad' => 5.73
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.59,
                    'Población Económicamente Activa masculina' => 65.20,
                    'Población Económicamente Activa femenina' => 34.80,
                    'Población Ocupada' => 88.82,
                    'Población Ocupada masculina' => 63.81,
                    'Población Ocupada femenina' => 36.19,
                    'Población Desocupada' => 11.18,
                    'Derechohabiencia' => 72.45
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 731,
                    'Ocupación por Vivienda' => 3.92,
                    'Viviendas con Electricidad' => 99.18,
                    'Viviendas con Agua' => 98.63,
                    'Viviendas con Drenaje' => 98.63,
                    'Viviendas con Televisión' => 98.63,
                    'Viviendas con Automóvil' => 44.05,
                    'Viviendas con Computadora' => 30.92
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 92,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 33.70,
                    'Segunda actividad nombre' => 'Gubernamentales',
                    'Segunda actividad porcentaje' => 13.04,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 13.04,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 11.96,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 7.61
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
            'Centro latitud'  => 25.5332799044078,
            'Centro longitud' => -103.445637570775
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

} // Clase LuisEcheverriaNorte

?>
