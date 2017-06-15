<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LaMuralla
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
 * Clase LaMuralla
 */
class LaMuralla extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'La Muralla';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'la-muralla';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia La Muralla en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, La Muralla';
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
                    'Población total' => 119,
                    'Porcentaje de población masculina' => 47.06,
                    'Porcentaje de población femenina' => 52.94,
                    'Porcentaje de población de 0 a 14 años' => 37.82,
                    'Porcentaje de población de 15 a 64 años' => 57.98,
                    'Porcentaje de población de 65 y más años' => 4.20,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.79,
                    'Porcentaje de población con discapacidad' => 1.74
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 61.54,
                    'Población Económicamente Activa masculina' => 62.22,
                    'Población Económicamente Activa femenina' => 37.78,
                    'Población Ocupada' => 100.00,
                    'Población Ocupada masculina' => 62.13,
                    'Población Ocupada femenina' => 37.87,
                    'Población Desocupada' => 0.00,
                    'Derechohabiencia' => 84.87
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 33,
                    'Ocupación por Vivienda' => 3.61,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 93.31,
                    'Viviendas con Computadora' => 86.08
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 0
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
            'Centro latitud'  => 25.6030986794158,
            'Centro longitud' => -103.417834499638
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

} // Clase LaMuralla

?>
