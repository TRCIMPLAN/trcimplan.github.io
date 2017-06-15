<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ResidencialLasTorres
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
 * Clase ResidencialLasTorres
 */
class ResidencialLasTorres extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Residencial Las Torres';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'residencial-las-torres';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Las Torres en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Residencial Las Torres';
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
                    'Población total' => 6074,
                    'Porcentaje de población masculina' => 48.68,
                    'Porcentaje de población femenina' => 51.32,
                    'Porcentaje de población de 0 a 14 años' => 21.30,
                    'Porcentaje de población de 15 a 64 años' => 70.91,
                    'Porcentaje de población de 65 y más años' => 5.80,
                    'Porcentaje de población no especificada' => 1.99,
                    'Fecundidad promedio' => 1.89,
                    'Porcentaje de población con discapacidad' => 2.99
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.42,
                    'Población Económicamente Activa masculina' => 59.07,
                    'Población Económicamente Activa femenina' => 40.93,
                    'Población Ocupada' => 92.97,
                    'Población Ocupada masculina' => 58.16,
                    'Población Ocupada femenina' => 41.84,
                    'Población Desocupada' => 7.03,
                    'Derechohabiencia' => 76.87
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1615,
                    'Ocupación por Vivienda' => 3.76,
                    'Viviendas con Electricidad' => 99.88,
                    'Viviendas con Agua' => 99.75,
                    'Viviendas con Drenaje' => 99.75,
                    'Viviendas con Televisión' => 99.32,
                    'Viviendas con Automóvil' => 75.42,
                    'Viviendas con Computadora' => 64.67
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 132,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.91,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 12.12,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 10.61,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 7.58,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 6.06
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
            'Centro latitud'  => 25.537942926823,
            'Centro longitud' => -103.389860196649
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

} // Clase ResidencialLasTorres

?>
