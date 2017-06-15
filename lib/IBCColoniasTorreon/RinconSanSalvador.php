<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon RinconSanSalvador
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
 * Clase RinconSanSalvador
 */
class RinconSanSalvador extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Rincón San Salvador';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'rincon-san-salvador';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Rincón San Salvador en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Rincón San Salvador';
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
                    'Población total' => 610,
                    'Porcentaje de población masculina' => 51.31,
                    'Porcentaje de población femenina' => 48.69,
                    'Porcentaje de población de 0 a 14 años' => 39.02,
                    'Porcentaje de población de 15 a 64 años' => 58.03,
                    'Porcentaje de población de 65 y más años' => 1.48,
                    'Porcentaje de población no especificada' => 1.47,
                    'Fecundidad promedio' => 1.72,
                    'Porcentaje de población con discapacidad' => 5.13
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 67.77,
                    'Población Económicamente Activa masculina' => 58.05,
                    'Población Económicamente Activa femenina' => 41.95,
                    'Población Ocupada' => 96.52,
                    'Población Ocupada masculina' => 57.75,
                    'Población Ocupada femenina' => 42.25,
                    'Población Desocupada' => 3.48,
                    'Derechohabiencia' => 73.11
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 166,
                    'Ocupación por Vivienda' => 3.67,
                    'Viviendas con Electricidad' => 99.40,
                    'Viviendas con Agua' => 99.40,
                    'Viviendas con Drenaje' => 99.40,
                    'Viviendas con Televisión' => 98.80,
                    'Viviendas con Automóvil' => 82.53,
                    'Viviendas con Computadora' => 53.01
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 4,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 75.00,
                    'Segunda actividad nombre' => 'Industria Manufacturera',
                    'Segunda actividad porcentaje' => 25.00
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
            'Centro latitud'  => 25.5568160275356,
            'Centro longitud' => -103.381647290975
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

} // Clase RinconSanSalvador

?>
