<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon FovisssteLaRosita
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
 * Clase FovisssteLaRosita
 */
class FovisssteLaRosita extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Fovissste La Rosita';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'fovissste-la-rosita';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Fovissste La Rosita en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Fovissste La Rosita';
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
                    'Población total' => 1983,
                    'Porcentaje de población masculina' => 47.27,
                    'Porcentaje de población femenina' => 52.73,
                    'Porcentaje de población de 0 a 14 años' => 19.97,
                    'Porcentaje de población de 15 a 64 años' => 71.51,
                    'Porcentaje de población de 65 y más años' => 8.26,
                    'Porcentaje de población no especificada' => 0.26,
                    'Fecundidad promedio' => 2.13,
                    'Porcentaje de población con discapacidad' => 4.61
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.20,
                    'Población Económicamente Activa masculina' => 55.05,
                    'Población Económicamente Activa femenina' => 44.95,
                    'Población Ocupada' => 88.41,
                    'Población Ocupada masculina' => 54.50,
                    'Población Ocupada femenina' => 45.50,
                    'Población Desocupada' => 11.59,
                    'Derechohabiencia' => 83.88
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 572,
                    'Ocupación por Vivienda' => 3.47,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 99.93,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 67.70,
                    'Viviendas con Computadora' => 65.26
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 51,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 27.45,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 23.53,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 13.73,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 7.84,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 7.84
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
            'Centro latitud'  => 25.5270180006417,
            'Centro longitud' => -103.40450652547
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

} // Clase FovisssteLaRosita

?>
