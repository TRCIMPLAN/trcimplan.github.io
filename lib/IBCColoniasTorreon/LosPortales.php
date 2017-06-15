<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LosPortales
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
 * Clase LosPortales
 */
class LosPortales extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Los Portales';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'los-portales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Los Portales en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Los Portales';
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
                    'Población total' => 49,
                    'Porcentaje de población masculina' => 48.98,
                    'Porcentaje de población femenina' => 51.02,
                    'Porcentaje de población de 0 a 14 años' => 22.45,
                    'Porcentaje de población de 15 a 64 años' => 73.47,
                    'Porcentaje de población de 65 y más años' => 4.08,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.45,
                    'Porcentaje de población con discapacidad' => 0.00
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 65.00,
                    'Población Económicamente Activa masculina' => 53.85,
                    'Población Económicamente Activa femenina' => 46.15,
                    'Población Ocupada' => 100.00,
                    'Población Ocupada masculina' => 53.85,
                    'Población Ocupada femenina' => 46.15,
                    'Población Desocupada' => 0.00,
                    'Derechohabiencia' => 100.00
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 16,
                    'Ocupación por Vivienda' => 3.06,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 93.75,
                    'Viviendas con Automóvil' => 100.00,
                    'Viviendas con Computadora' => 100.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 2,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Comercio Mayoreo',
                    'Segunda actividad porcentaje' => 50.00
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
            'Centro latitud'  => 25.5338189275716,
            'Centro longitud' => -103.397776003664
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

} // Clase LosPortales

?>
