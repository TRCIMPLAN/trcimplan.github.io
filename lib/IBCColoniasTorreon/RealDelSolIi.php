<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon RealDelSolIi
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
 * Clase RealDelSolIi
 */
class RealDelSolIi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Real del Sol II';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'real-del-sol-ii';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Real del Sol II en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Real del Sol II';
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
                    'Población total' => 574,
                    'Porcentaje de población masculina' => 46.68,
                    'Porcentaje de población femenina' => 53.32,
                    'Porcentaje de población de 0 a 14 años' => 38.35,
                    'Porcentaje de población de 15 a 64 años' => 60.58,
                    'Porcentaje de población de 65 y más años' => 1.06,
                    'Porcentaje de población no especificada' => 0.01,
                    'Fecundidad promedio' => 1.94,
                    'Porcentaje de población con discapacidad' => 2.00
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 58.76,
                    'Población Económicamente Activa masculina' => 65.60,
                    'Población Económicamente Activa femenina' => 34.40,
                    'Población Ocupada' => 96.76,
                    'Población Ocupada masculina' => 64.49,
                    'Población Ocupada femenina' => 35.51,
                    'Población Desocupada' => 3.24,
                    'Derechohabiencia' => 68.30
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 149,
                    'Ocupación por Vivienda' => 3.85,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.05,
                    'Viviendas con Automóvil' => 34.64,
                    'Viviendas con Computadora' => 14.90
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 6,
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
            'Centro latitud'  => 25.5590122084412,
            'Centro longitud' => -103.330486005312
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

} // Clase RealDelSolIi

?>
