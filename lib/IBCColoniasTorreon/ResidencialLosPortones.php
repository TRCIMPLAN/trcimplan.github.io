<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ResidencialLosPortones
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
 * Clase ResidencialLosPortones
 */
class ResidencialLosPortones extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Residencial Los Portones';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'residencial-los-portones';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Los Portones en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Residencial Los Portones';
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
                    'Población total' => 419,
                    'Porcentaje de población masculina' => 45.58,
                    'Porcentaje de población femenina' => 54.42,
                    'Porcentaje de población de 0 a 14 años' => 26.01,
                    'Porcentaje de población de 15 a 64 años' => 70.64,
                    'Porcentaje de población de 65 y más años' => 1.19,
                    'Porcentaje de población no especificada' => 2.16,
                    'Fecundidad promedio' => 1.27,
                    'Porcentaje de población con discapacidad' => 1.91
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 62.85,
                    'Población Económicamente Activa masculina' => 52.71,
                    'Población Económicamente Activa femenina' => 47.29,
                    'Población Ocupada' => 97.99,
                    'Población Ocupada masculina' => 52.26,
                    'Población Ocupada femenina' => 47.74,
                    'Población Desocupada' => 2.01,
                    'Derechohabiencia' => 94.27
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 124,
                    'Ocupación por Vivienda' => 3.38,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 97.58,
                    'Viviendas con Computadora' => 91.94
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 6,
                    'Primer actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Primer actividad porcentaje' => 33.33,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 16.67,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 16.67
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
            'Centro latitud'  => 25.5492635278735,
            'Centro longitud' => -103.386483125574
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

} // Clase ResidencialLosPortones

?>
