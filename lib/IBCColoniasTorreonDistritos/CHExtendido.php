<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreonDistritos CHExtendido
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
 * Clase CHExtendido
 */
class CHExtendido extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Centro Histórico Extendido';
        $this->fecha       = '2017-11-22T13:22:16';
        // El nombre del archivo a crear
        $this->archivo     = 'centro-historico-extendido';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Centro Histórico Extendido en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Centro Histórico Extendido';
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
                    'Población total' => 8997,
                    'Porcentaje de población masculina' => 47.14,
                    'Porcentaje de población femenina' => 52.86,
                    'Porcentaje de población de 0 a 14 años' => 17.58,
                    'Porcentaje de población de 15 a 64 años' => 63.04,
                    'Porcentaje de población de 65 y más años' => 15.88,
                    'Porcentaje de población no especificada' => 3.50,
                    'Fecundidad promedio' => 2.06,
                    'Porcentaje de población con discapacidad' => 7.50
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.31,
                    'Población Económicamente Activa masculina' => 59.42,
                    'Población Económicamente Activa femenina' => 40.58,
                    'Población Ocupada' => 90.90,
                    'Población Ocupada masculina' => 58.40,
                    'Población Ocupada femenina' => 41.60,
                    'Población Desocupada' => 9.10,
                    'Derechohabiencia' => 63.39
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 2726,
                    'Ocupación por Vivienda' => 3.30,
                    'Viviendas con Electricidad' => 99.54,
                    'Viviendas con Agua' => 99.28,
                    'Viviendas con Drenaje' => 98.99,
                    'Viviendas con Televisión' => 98.11,
                    'Viviendas con Automóvil' => 45.32,
                    'Viviendas con Computadora' => 38.94
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 4584,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 36.95,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 12.02,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 11.93,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 7.79,
                    'Quinta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Quinta actividad porcentaje' => 7.40
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

} // Clase CHExtendido

?>
