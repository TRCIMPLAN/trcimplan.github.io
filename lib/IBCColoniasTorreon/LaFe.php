<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LaFe
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
 * Clase LaFe
 */
class LaFe extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'La Fe';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'la-fe';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia La Fe en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, La Fe';
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
                    'Población total' => 566,
                    'Porcentaje de población masculina' => 49.28,
                    'Porcentaje de población femenina' => 50.72,
                    'Porcentaje de población de 0 a 14 años' => 23.68,
                    'Porcentaje de población de 15 a 64 años' => 65.59,
                    'Porcentaje de población de 65 y más años' => 10.73,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.77,
                    'Porcentaje de población con discapacidad' => 13.49
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 47.02,
                    'Población Económicamente Activa masculina' => 68.66,
                    'Población Económicamente Activa femenina' => 31.34,
                    'Población Ocupada' => 88.58,
                    'Población Ocupada masculina' => 65.07,
                    'Población Ocupada femenina' => 34.93,
                    'Población Desocupada' => 11.42,
                    'Derechohabiencia' => 72.99
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 166,
                    'Ocupación por Vivienda' => 3.41,
                    'Viviendas con Electricidad' => 99.43,
                    'Viviendas con Agua' => 95.80,
                    'Viviendas con Drenaje' => 98.82,
                    'Viviendas con Televisión' => 96.39,
                    'Viviendas con Automóvil' => 15.15,
                    'Viviendas con Computadora' => 13.17
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 5,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 60.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Comercio Mayoreo',
                    'Tercera actividad porcentaje' => 20.00
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
            'Centro latitud'  => 25.5309703803775,
            'Centro longitud' => -103.465891517695
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

} // Clase LaFe

?>
