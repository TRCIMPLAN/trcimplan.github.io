<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillasDeLaHuerta
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
 * Clase VillasDeLaHuerta
 */
class VillasDeLaHuerta extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Villas de La Huerta';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'villas-de-la-huerta';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Villas de La Huerta en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Villas de La Huerta';
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
                    'Población total' => 972,
                    'Porcentaje de población masculina' => 48.46,
                    'Porcentaje de población femenina' => 51.54,
                    'Porcentaje de población de 0 a 14 años' => 38.79,
                    'Porcentaje de población de 15 a 64 años' => 60.19,
                    'Porcentaje de población de 65 y más años' => 1.03,
                    'Porcentaje de población no especificada' => -0.01,
                    'Fecundidad promedio' => 1.71,
                    'Porcentaje de población con discapacidad' => 1.30
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.99,
                    'Población Económicamente Activa masculina' => 67.65,
                    'Población Económicamente Activa femenina' => 32.35,
                    'Población Ocupada' => 93.42,
                    'Población Ocupada masculina' => 66.95,
                    'Población Ocupada femenina' => 33.05,
                    'Población Desocupada' => 6.58,
                    'Derechohabiencia' => 75.82
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 271,
                    'Ocupación por Vivienda' => 3.59,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.63,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.89,
                    'Viviendas con Automóvil' => 54.76,
                    'Viviendas con Computadora' => 25.64
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 18,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 44.44,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 33.33,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 5.56
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
            'Centro latitud'  => 25.5534194240208,
            'Centro longitud' => -103.328528400351
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

} // Clase VillasDeLaHuerta

?>
