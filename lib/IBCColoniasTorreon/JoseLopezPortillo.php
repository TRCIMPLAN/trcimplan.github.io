<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon JoseLopezPortillo
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
 * Clase JoseLopezPortillo
 */
class JoseLopezPortillo extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'José López Portillo';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'jose-lopez-portillo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia José López Portillo en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, José López Portillo';
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
                    'Población total' => 354,
                    'Porcentaje de población masculina' => 45.48,
                    'Porcentaje de población femenina' => 54.52,
                    'Porcentaje de población de 0 a 14 años' => 26.55,
                    'Porcentaje de población de 15 a 64 años' => 60.17,
                    'Porcentaje de población de 65 y más años' => 10.73,
                    'Porcentaje de población no especificada' => 2.55,
                    'Fecundidad promedio' => 2.47,
                    'Porcentaje de población con discapacidad' => 4.57
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 48.35,
                    'Población Económicamente Activa masculina' => 71.21,
                    'Población Económicamente Activa femenina' => 28.79,
                    'Población Ocupada' => 97.68,
                    'Población Ocupada masculina' => 71.32,
                    'Población Ocupada femenina' => 28.68,
                    'Población Desocupada' => 2.32,
                    'Derechohabiencia' => 52.26
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 84,
                    'Ocupación por Vivienda' => 4.21,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.81,
                    'Viviendas con Drenaje' => 98.81,
                    'Viviendas con Televisión' => 98.81,
                    'Viviendas con Automóvil' => 14.08,
                    'Viviendas con Computadora' => 18.51
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 17,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 41.18,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 29.41,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 11.76,
                    'Cuarta actividad nombre' => 'Gubernamentales',
                    'Cuarta actividad porcentaje' => 11.76,
                    'Quinta actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Quinta actividad porcentaje' => 5.88
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
            'Centro latitud'  => 25.5347858083694,
            'Centro longitud' => -103.456439696227
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

} // Clase JoseLopezPortillo

?>
