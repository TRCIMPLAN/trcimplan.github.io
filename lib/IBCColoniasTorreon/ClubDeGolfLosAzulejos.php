<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ClubDeGolfLosAzulejos
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
 * Clase ClubDeGolfLosAzulejos
 */
class ClubDeGolfLosAzulejos extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Club de Golf Los Azulejos';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'club-de-golf-los-azulejos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Club de Golf Los Azulejos en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Club de Golf Los Azulejos';
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
                    'Población total' => 34,
                    'Porcentaje de población masculina' => 47.06,
                    'Porcentaje de población femenina' => 52.94,
                    'Porcentaje de población de 0 a 14 años' => 17.65,
                    'Porcentaje de población de 15 a 64 años' => 79.41,
                    'Porcentaje de población de 65 y más años' => 2.94,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.69,
                    'Porcentaje de población con discapacidad' => 0.00
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 35.48,
                    'Población Económicamente Activa masculina' => 90.91,
                    'Población Económicamente Activa femenina' => 9.09,
                    'Población Ocupada' => 100.00,
                    'Población Ocupada masculina' => 90.91,
                    'Población Ocupada femenina' => 9.09,
                    'Población Desocupada' => 0.00,
                    'Derechohabiencia' => 58.82
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 8,
                    'Ocupación por Vivienda' => 4.25,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 52.46,
                    'Viviendas con Computadora' => 0.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 3,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 66.67,
                    'Segunda actividad nombre' => 'Comercio Mayoreo',
                    'Segunda actividad porcentaje' => 33.33
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
            'Centro latitud'  => 25.6410570906103,
            'Centro longitud' => -103.36997070573
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

} // Clase ClubDeGolfLosAzulejos

?>
