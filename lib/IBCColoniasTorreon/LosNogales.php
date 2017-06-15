<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LosNogales
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
 * Clase LosNogales
 */
class LosNogales extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Los Nogales';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'los-nogales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Los Nogales en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Los Nogales';
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
                    'Población total' => 697,
                    'Porcentaje de población masculina' => 47.20,
                    'Porcentaje de población femenina' => 52.80,
                    'Porcentaje de población de 0 a 14 años' => 14.35,
                    'Porcentaje de población de 15 a 64 años' => 58.97,
                    'Porcentaje de población de 65 y más años' => 15.06,
                    'Porcentaje de población no especificada' => 11.62,
                    'Fecundidad promedio' => 2.12,
                    'Porcentaje de población con discapacidad' => 4.68
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 48.97,
                    'Población Económicamente Activa masculina' => 59.06,
                    'Población Económicamente Activa femenina' => 40.94,
                    'Población Ocupada' => 93.52,
                    'Población Ocupada masculina' => 58.83,
                    'Población Ocupada femenina' => 41.17,
                    'Población Desocupada' => 6.48,
                    'Derechohabiencia' => 73.03
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 192,
                    'Ocupación por Vivienda' => 3.63,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.92,
                    'Viviendas con Drenaje' => 99.92,
                    'Viviendas con Televisión' => 99.91,
                    'Viviendas con Automóvil' => 87.24,
                    'Viviendas con Computadora' => 69.85
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 5,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 60.00,
                    'Segunda actividad nombre' => 'Salud',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Profesionales, Científicos, Técnicos',
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
            'Centro latitud'  => 25.5668900144952,
            'Centro longitud' => -103.44789409145
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

} // Clase LosNogales

?>
