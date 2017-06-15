<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon AmpliacionLasMargaritas
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
 * Clase AmpliacionLasMargaritas
 */
class AmpliacionLasMargaritas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Ampliación Las Margaritas';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'ampliacion-las-margaritas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ampliación Las Margaritas en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Ampliación Las Margaritas';
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
                    'Población total' => 1833,
                    'Porcentaje de población masculina' => 46.26,
                    'Porcentaje de población femenina' => 53.74,
                    'Porcentaje de población de 0 a 14 años' => 16.04,
                    'Porcentaje de población de 15 a 64 años' => 65.68,
                    'Porcentaje de población de 65 y más años' => 10.09,
                    'Porcentaje de población no especificada' => 8.19,
                    'Fecundidad promedio' => 1.87,
                    'Porcentaje de población con discapacidad' => 6.84
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 48.95,
                    'Población Económicamente Activa masculina' => 55.06,
                    'Población Económicamente Activa femenina' => 44.94,
                    'Población Ocupada' => 91.79,
                    'Población Ocupada masculina' => 54.95,
                    'Población Ocupada femenina' => 45.05,
                    'Población Desocupada' => 8.21,
                    'Derechohabiencia' => 73.38
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 467,
                    'Ocupación por Vivienda' => 3.93,
                    'Viviendas con Electricidad' => 99.57,
                    'Viviendas con Agua' => 99.79,
                    'Viviendas con Drenaje' => 99.79,
                    'Viviendas con Televisión' => 99.36,
                    'Viviendas con Automóvil' => 76.66,
                    'Viviendas con Computadora' => 65.31
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 115,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 35.65,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 22.61,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 9.57,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 5.22,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 3.48
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
            'Centro latitud'  => 25.5657275032251,
            'Centro longitud' => -103.441926650896
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

} // Clase AmpliacionLasMargaritas

?>
