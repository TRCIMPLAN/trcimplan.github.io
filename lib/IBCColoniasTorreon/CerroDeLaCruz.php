<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon CerroDeLaCruz
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
 * Clase CerroDeLaCruz
 */
class CerroDeLaCruz extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Cerro de La Cruz';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'cerro-de-la-cruz';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Cerro de La Cruz en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Cerro de La Cruz';
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
                    'Población total' => 2766,
                    'Porcentaje de población masculina' => 49.39,
                    'Porcentaje de población femenina' => 50.61,
                    'Porcentaje de población de 0 a 14 años' => 28.92,
                    'Porcentaje de población de 15 a 64 años' => 61.93,
                    'Porcentaje de población de 65 y más años' => 8.97,
                    'Porcentaje de población no especificada' => 0.18,
                    'Fecundidad promedio' => 2.68,
                    'Porcentaje de población con discapacidad' => 12.54
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.31,
                    'Población Económicamente Activa masculina' => 68.29,
                    'Población Económicamente Activa femenina' => 31.71,
                    'Población Ocupada' => 93.94,
                    'Población Ocupada masculina' => 67.36,
                    'Población Ocupada femenina' => 32.64,
                    'Población Desocupada' => 6.06,
                    'Derechohabiencia' => 63.67
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 696,
                    'Ocupación por Vivienda' => 3.97,
                    'Viviendas con Electricidad' => 99.43,
                    'Viviendas con Agua' => 98.71,
                    'Viviendas con Drenaje' => 99.57,
                    'Viviendas con Televisión' => 97.41,
                    'Viviendas con Automóvil' => 23.76,
                    'Viviendas con Computadora' => 17.80
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 35,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 54.29,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 14.29,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 8.57,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 5.71,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 5.71
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
            'Centro latitud'  => 25.5378472705986,
            'Centro longitud' => -103.472300461259
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

} // Clase CerroDeLaCruz

?>
