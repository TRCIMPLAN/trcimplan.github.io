<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LaArboleda
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
 * Clase LaArboleda
 */
class LaArboleda extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'La Arboleda';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'la-arboleda';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia La Arboleda en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, La Arboleda';
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
                    'Población total' => 100,
                    'Porcentaje de población masculina' => 48.00,
                    'Porcentaje de población femenina' => 52.00,
                    'Porcentaje de población de 0 a 14 años' => 32.00,
                    'Porcentaje de población de 15 a 64 años' => 68.00,
                    'Porcentaje de población de 65 y más años' => 0.00,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.33,
                    'Porcentaje de población con discapacidad' => 6.00
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 61.11,
                    'Población Económicamente Activa masculina' => 56.82,
                    'Población Económicamente Activa femenina' => 43.18,
                    'Población Ocupada' => 97.68,
                    'Población Ocupada masculina' => 55.81,
                    'Población Ocupada femenina' => 44.19,
                    'Población Desocupada' => 2.32,
                    'Derechohabiencia' => 75.00
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 31,
                    'Ocupación por Vivienda' => 3.23,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 96.77,
                    'Viviendas con Computadora' => 90.32
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
            'Centro latitud'  => 25.6120217928401,
            'Centro longitud' => -103.389913997256
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

} // Clase LaArboleda

?>
