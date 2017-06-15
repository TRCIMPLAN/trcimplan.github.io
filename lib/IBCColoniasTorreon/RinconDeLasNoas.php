<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon RinconDeLasNoas
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
 * Clase RinconDeLasNoas
 */
class RinconDeLasNoas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Rincón de Las Noas';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'rincon-de-las-noas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Rincón de Las Noas en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Rincón de Las Noas';
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
                    'Población total' => 903,
                    'Porcentaje de población masculina' => 49.94,
                    'Porcentaje de población femenina' => 50.06,
                    'Porcentaje de población de 0 a 14 años' => 36.54,
                    'Porcentaje de población de 15 a 64 años' => 59.91,
                    'Porcentaje de población de 65 y más años' => 3.54,
                    'Porcentaje de población no especificada' => 0.01,
                    'Fecundidad promedio' => 1.80,
                    'Porcentaje de población con discapacidad' => 2.07
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.11,
                    'Población Económicamente Activa masculina' => 65.29,
                    'Población Económicamente Activa femenina' => 34.71,
                    'Población Ocupada' => 96.97,
                    'Población Ocupada masculina' => 64.85,
                    'Población Ocupada femenina' => 35.15,
                    'Población Desocupada' => 3.03,
                    'Derechohabiencia' => 76.63
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 231,
                    'Ocupación por Vivienda' => 3.91,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.70,
                    'Viviendas con Automóvil' => 61.46,
                    'Viviendas con Computadora' => 36.81
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 19,
                    'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Primer actividad porcentaje' => 26.32,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 21.05,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 21.05,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 10.53,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 10.53
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
            'Centro latitud'  => 25.5447582206003,
            'Centro longitud' => -103.357167112143
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

} // Clase RinconDeLasNoas

?>
