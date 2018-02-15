<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreonDistritos CHDecreto
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

namespace IBCColoniasTorreonDistritos;

/**
 * Clase CHDecreto
 */
class CHDecreto extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Centro Histórico Decreto';
        $this->fecha       = '2017-11-22T13:18:17';
        // El nombre del archivo a crear
        $this->archivo     = 'centro-historico-decreto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Centro Histórico Decreto en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Centro Histórico Decreto';
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
                    'Población total' => 7000,
                    'Porcentaje de población masculina' => 46.88,
                    'Porcentaje de población femenina' => 53.12,
                    'Porcentaje de población de 0 a 14 años' => 17.36,
                    'Porcentaje de población de 15 a 64 años' => 62.81,
                    'Porcentaje de población de 65 y más años' => 16.02,
                    'Porcentaje de población no especificada' => 3.81,
                    'Fecundidad promedio' => 2.00,
                    'Porcentaje de población con discapacidad' => 7.61
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.44,
                    'Población Económicamente Activa masculina' => 58.48,
                    'Población Económicamente Activa femenina' => 41.52,
                    'Población Ocupada' => 90.71,
                    'Población Ocupada masculina' => 57.60,
                    'Población Ocupada femenina' => 42.40,
                    'Población Desocupada' => 9.29,
                    'Derechohabiencia' => 63.29
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 2130,
                    'Ocupación por Vivienda' => 3.29,
                    'Viviendas con Electricidad' => 99.65,
                    'Viviendas con Agua' => 99.55,
                    'Viviendas con Drenaje' => 99.26,
                    'Viviendas con Televisión' => 98.20,
                    'Viviendas con Automóvil' => 45.34,
                    'Viviendas con Computadora' => 39.65
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 4170,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 38.78,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 11.89,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 11.65,
                    'Cuarta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Cuarta actividad porcentaje' => 7.43,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 7.05
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
            'Centro latitud'  => ,
            'Centro longitud' => 
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

} // Clase CHDecreto

?>
