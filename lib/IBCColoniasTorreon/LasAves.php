<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LasAves
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
 * Clase LasAves
 */
class LasAves extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Las Aves';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'las-aves';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Las Aves en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Las Aves';
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
                    'Población total' => 246,
                    'Porcentaje de población masculina' => 46.75,
                    'Porcentaje de población femenina' => 53.25,
                    'Porcentaje de población de 0 a 14 años' => 39.13,
                    'Porcentaje de población de 15 a 64 años' => 59.14,
                    'Porcentaje de población de 65 y más años' => 0.48,
                    'Porcentaje de población no especificada' => 1.25,
                    'Fecundidad promedio' => 2.10,
                    'Porcentaje de población con discapacidad' => 0.60
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 64.95,
                    'Población Económicamente Activa masculina' => 62.97,
                    'Población Económicamente Activa femenina' => 37.03,
                    'Población Ocupada' => 94.74,
                    'Población Ocupada masculina' => 61.04,
                    'Población Ocupada femenina' => 38.96,
                    'Población Desocupada' => 5.26,
                    'Derechohabiencia' => 75.26
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 65,
                    'Ocupación por Vivienda' => 3.78,
                    'Viviendas con Electricidad' => 99.99,
                    'Viviendas con Agua' => 99.98,
                    'Viviendas con Drenaje' => 99.98,
                    'Viviendas con Televisión' => 99.98,
                    'Viviendas con Automóvil' => 41.84,
                    'Viviendas con Computadora' => 36.39
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 4,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 75.00,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 25.00
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
            'Centro latitud'  => 25.5477476216145,
            'Centro longitud' => -103.349477728507
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

} // Clase LasAves

?>
