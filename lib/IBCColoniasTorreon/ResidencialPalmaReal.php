<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ResidencialPalmaReal
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
 * Clase ResidencialPalmaReal
 */
class ResidencialPalmaReal extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Residencial Palma Real';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'residencial-palma-real';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Palma Real en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Residencial Palma Real';
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
                    'Población total' => 1451,
                    'Porcentaje de población masculina' => 50.17,
                    'Porcentaje de población femenina' => 49.83,
                    'Porcentaje de población de 0 a 14 años' => 32.64,
                    'Porcentaje de población de 15 a 64 años' => 64.81,
                    'Porcentaje de población de 65 y más años' => 1.73,
                    'Porcentaje de población no especificada' => 0.82,
                    'Fecundidad promedio' => 1.39,
                    'Porcentaje de población con discapacidad' => 0.46
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 67.96,
                    'Población Económicamente Activa masculina' => 60.96,
                    'Población Económicamente Activa femenina' => 39.04,
                    'Población Ocupada' => 99.12,
                    'Población Ocupada masculina' => 60.76,
                    'Población Ocupada femenina' => 39.24,
                    'Población Desocupada' => 0.88,
                    'Derechohabiencia' => 86.39
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 451,
                    'Ocupación por Vivienda' => 3.22,
                    'Viviendas con Electricidad' => 99.26,
                    'Viviendas con Agua' => 98.82,
                    'Viviendas con Drenaje' => 97.93,
                    'Viviendas con Televisión' => 98.37,
                    'Viviendas con Automóvil' => 97.21,
                    'Viviendas con Computadora' => 85.30
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 2,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 100.00
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
            'Centro latitud'  => 25.5788823019257,
            'Centro longitud' => -103.377439058476
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

} // Clase ResidencialPalmaReal

?>
