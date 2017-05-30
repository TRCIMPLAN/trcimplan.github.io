<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon FranciscoIMadero
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
 * Clase FranciscoIMadero
 */
class FranciscoIMadero extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Francisco I. Madero';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'francisco-i-madero';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Francisco I. Madero en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Francisco I. Madero';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Indicadores Básicos de Colonias > Colonias de Torreón';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = FALSE;
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
                    'Población total' => 836,
                    'Porcentaje de población masculina' => 50.49,
                    'Porcentaje de población femenina' => 49.51,
                    'Porcentaje de población de 0 a 14 años' => 26.64,
                    'Porcentaje de población de 15 a 64 años' => 65.71,
                    'Porcentaje de población de 65 y más años' => 6.41,
                    'Porcentaje de población no especificada' => 1.24,
                    'Fecundidad promedio' => 2.51,
                    'Porcentaje de población con discapacidad' => 4.64
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.48,
                    'Población Económicamente Activa masculina' => 73.62,
                    'Población Económicamente Activa femenina' => 26.38,
                    'Población Ocupada' => 84.31,
                    'Población Ocupada masculina' => 74.37,
                    'Población Ocupada femenina' => 25.63,
                    'Población Desocupada' => 15.69,
                    'Derechohabiencia' => 69.64
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 207,
                    'Ocupación por Vivienda' => 4.04,
                    'Viviendas con Electricidad' => 99.29,
                    'Viviendas con Agua' => 99.29,
                    'Viviendas con Drenaje' => 98.31,
                    'Viviendas con Televisión' => 97.82,
                    'Viviendas con Automóvil' => 23.71,
                    'Viviendas con Computadora' => 8.04
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 9,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 77.78,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 11.11,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 11.11
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
            'Centro latitud'  => 25.5179010944448,
            'Centro longitud' => -103.452325422228
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

} // Clase FranciscoIMadero

?>
