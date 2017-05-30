<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon SanJoaquin
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
 * Clase SanJoaquin
 */
class SanJoaquin extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'San Joaquín';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'san-joaquin';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia San Joaquín en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, San Joaquín';
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
                    'Población total' => 3646,
                    'Porcentaje de población masculina' => 48.84,
                    'Porcentaje de población femenina' => 51.16,
                    'Porcentaje de población de 0 a 14 años' => 27.14,
                    'Porcentaje de población de 15 a 64 años' => 63.02,
                    'Porcentaje de población de 65 y más años' => 9.81,
                    'Porcentaje de población no especificada' => 0.03,
                    'Fecundidad promedio' => 2.58,
                    'Porcentaje de población con discapacidad' => 15.10
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.28,
                    'Población Económicamente Activa masculina' => 66.46,
                    'Población Económicamente Activa femenina' => 33.54,
                    'Población Ocupada' => 93.35,
                    'Población Ocupada masculina' => 66.12,
                    'Población Ocupada femenina' => 33.88,
                    'Población Desocupada' => 6.65,
                    'Derechohabiencia' => 59.60
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 972,
                    'Ocupación por Vivienda' => 3.75,
                    'Viviendas con Electricidad' => 98.93,
                    'Viviendas con Agua' => 98.31,
                    'Viviendas con Drenaje' => 98.42,
                    'Viviendas con Televisión' => 97.17,
                    'Viviendas con Automóvil' => 34.94,
                    'Viviendas con Computadora' => 23.24
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 122,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 39.34,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 15.57,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 13.11,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 8.20,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 6.56
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
            'Centro latitud'  => 25.5324115709015,
            'Centro longitud' => -103.477280517044
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

} // Clase SanJoaquin

?>
