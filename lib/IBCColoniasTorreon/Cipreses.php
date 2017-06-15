<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Cipreses
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
 * Clase Cipreses
 */
class Cipreses extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Cipreses';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'cipreses';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Cipreses en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Cipreses';
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
                    'Población total' => 61,
                    'Porcentaje de población masculina' => 57.38,
                    'Porcentaje de población femenina' => 42.62,
                    'Porcentaje de población de 0 a 14 años' => 32.79,
                    'Porcentaje de población de 15 a 64 años' => 57.38,
                    'Porcentaje de población de 65 y más años' => 0.00,
                    'Porcentaje de población no especificada' => 9.83,
                    'Fecundidad promedio' => 1.81,
                    'Porcentaje de población con discapacidad' => 0.00
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 71.43,
                    'Población Económicamente Activa masculina' => 64.00,
                    'Población Económicamente Activa femenina' => 36.00,
                    'Población Ocupada' => 100.00,
                    'Población Ocupada masculina' => 64.00,
                    'Población Ocupada femenina' => 36.00,
                    'Población Desocupada' => 0.00,
                    'Derechohabiencia' => 77.05
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 16,
                    'Ocupación por Vivienda' => 3.81,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 100.00,
                    'Viviendas con Computadora' => 100.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 0
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
            'Centro latitud'  => 25.5932812415555,
            'Centro longitud' => -103.417881767385
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

} // Clase Cipreses

?>
