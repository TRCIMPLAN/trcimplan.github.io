<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Victoria
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
 * Clase Victoria
 */
class Victoria extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Victoria';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'victoria';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Victoria en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Victoria';
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
                    'Población total' => 2163,
                    'Porcentaje de población masculina' => 50.37,
                    'Porcentaje de población femenina' => 49.63,
                    'Porcentaje de población de 0 a 14 años' => 29.69,
                    'Porcentaje de población de 15 a 64 años' => 61.62,
                    'Porcentaje de población de 65 y más años' => 8.69,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.66,
                    'Porcentaje de población con discapacidad' => 9.82
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.44,
                    'Población Económicamente Activa masculina' => 68.14,
                    'Población Económicamente Activa femenina' => 31.86,
                    'Población Ocupada' => 93.16,
                    'Población Ocupada masculina' => 67.42,
                    'Población Ocupada femenina' => 32.58,
                    'Población Desocupada' => 6.84,
                    'Derechohabiencia' => 66.87
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 540,
                    'Ocupación por Vivienda' => 4.01,
                    'Viviendas con Electricidad' => 98.45,
                    'Viviendas con Agua' => 97.51,
                    'Viviendas con Drenaje' => 97.89,
                    'Viviendas con Televisión' => 96.40,
                    'Viviendas con Automóvil' => 31.12,
                    'Viviendas con Computadora' => 18.78
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 29,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 72.41,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 10.34,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 6.90,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 6.90,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 3.45
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
            'Centro latitud'  => 25.5374594874405,
            'Centro longitud' => -103.480075684154
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

} // Clase Victoria

?>
