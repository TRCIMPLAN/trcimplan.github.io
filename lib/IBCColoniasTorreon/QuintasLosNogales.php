<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon QuintasLosNogales
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
 * Clase QuintasLosNogales
 */
class QuintasLosNogales extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Quintas Los Nogales';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'quintas-los-nogales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Quintas Los Nogales en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Quintas Los Nogales';
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
                    'Población total' => 330,
                    'Porcentaje de población masculina' => 50.01,
                    'Porcentaje de población femenina' => 49.99,
                    'Porcentaje de población de 0 a 14 años' => 30.96,
                    'Porcentaje de población de 15 a 64 años' => 65.07,
                    'Porcentaje de población de 65 y más años' => 3.96,
                    'Porcentaje de población no especificada' => 0.01,
                    'Fecundidad promedio' => 1.96,
                    'Porcentaje de población con discapacidad' => 0.58
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 58.92,
                    'Población Económicamente Activa masculina' => 65.45,
                    'Población Económicamente Activa femenina' => 34.55,
                    'Población Ocupada' => 92.32,
                    'Población Ocupada masculina' => 65.86,
                    'Población Ocupada femenina' => 34.14,
                    'Población Desocupada' => 7.68,
                    'Derechohabiencia' => 72.34
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 104,
                    'Ocupación por Vivienda' => 3.17,
                    'Viviendas con Electricidad' => 99.68,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.67,
                    'Viviendas con Automóvil' => 45.46,
                    'Viviendas con Computadora' => 28.08
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 21,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 47.62,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 19.05,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 14.29,
                    'Cuarta actividad nombre' => 'Manejo de Residuos',
                    'Cuarta actividad porcentaje' => 9.52,
                    'Quinta actividad nombre' => 'Inmobiliarios',
                    'Quinta actividad porcentaje' => 4.76
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
            'Centro latitud'  => 25.5371028026639,
            'Centro longitud' => -103.331074371662
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

} // Clase QuintasLosNogales

?>
