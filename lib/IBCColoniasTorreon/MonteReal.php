<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon MonteReal
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
 * Clase MonteReal
 */
class MonteReal extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Monte Real';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'monte-real';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Monte Real en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Monte Real';
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
                    'Población total' => 7297,
                    'Porcentaje de población masculina' => 48.98,
                    'Porcentaje de población femenina' => 51.02,
                    'Porcentaje de población de 0 a 14 años' => 37.77,
                    'Porcentaje de población de 15 a 64 años' => 60.07,
                    'Porcentaje de población de 65 y más años' => 1.43,
                    'Porcentaje de población no especificada' => 0.73,
                    'Fecundidad promedio' => 1.77,
                    'Porcentaje de población con discapacidad' => 1.73
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 61.46,
                    'Población Económicamente Activa masculina' => 63.61,
                    'Población Económicamente Activa femenina' => 36.39,
                    'Población Ocupada' => 94.43,
                    'Población Ocupada masculina' => 63.28,
                    'Población Ocupada femenina' => 36.72,
                    'Población Desocupada' => 5.57,
                    'Derechohabiencia' => 79.47
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1973,
                    'Ocupación por Vivienda' => 3.70,
                    'Viviendas con Electricidad' => 99.80,
                    'Viviendas con Agua' => 99.54,
                    'Viviendas con Drenaje' => 99.65,
                    'Viviendas con Televisión' => 99.54,
                    'Viviendas con Automóvil' => 59.76,
                    'Viviendas con Computadora' => 33.85
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 188,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 39.36,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 21.28,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 20.21,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 5.32,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 3.72
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
            'Centro latitud'  => 25.5067505245102,
            'Centro longitud' => -103.359240547585
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

} // Clase MonteReal

?>
