<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon EjidoLaPaz
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
 * Clase EjidoLaPaz
 */
class EjidoLaPaz extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Ejido La Paz';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'ejido-la-paz';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido La Paz en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Ejido La Paz';
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
                    'Población total' => 2485,
                    'Porcentaje de población masculina' => 48.43,
                    'Porcentaje de población femenina' => 51.57,
                    'Porcentaje de población de 0 a 14 años' => 27.55,
                    'Porcentaje de población de 15 a 64 años' => 65.23,
                    'Porcentaje de población de 65 y más años' => 6.82,
                    'Porcentaje de población no especificada' => 0.40,
                    'Fecundidad promedio' => 2.45,
                    'Porcentaje de población con discapacidad' => 6.95
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.72,
                    'Población Económicamente Activa masculina' => 67.05,
                    'Población Económicamente Activa femenina' => 32.95,
                    'Población Ocupada' => 91.94,
                    'Población Ocupada masculina' => 65.39,
                    'Población Ocupada femenina' => 34.61,
                    'Población Desocupada' => 8.06,
                    'Derechohabiencia' => 64.30
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 623,
                    'Ocupación por Vivienda' => 3.99,
                    'Viviendas con Electricidad' => 99.24,
                    'Viviendas con Agua' => 97.78,
                    'Viviendas con Drenaje' => 96.01,
                    'Viviendas con Televisión' => 98.75,
                    'Viviendas con Automóvil' => 42.16,
                    'Viviendas con Computadora' => 21.62
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 65,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 44.62,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 16.92,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 13.85,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 7.69,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 4.62
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
            'Centro latitud'  => 25.5936097666057,
            'Centro longitud' => -103.357791969329
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

} // Clase EjidoLaPaz

?>
