<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LosSauces
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
 * Clase LosSauces
 */
class LosSauces extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Los Sauces';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'los-sauces';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Los Sauces en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Los Sauces';
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
                    'Población total' => 1176,
                    'Porcentaje de población masculina' => 49.57,
                    'Porcentaje de población femenina' => 50.43,
                    'Porcentaje de población de 0 a 14 años' => 40.22,
                    'Porcentaje de población de 15 a 64 años' => 57.57,
                    'Porcentaje de población de 65 y más años' => 1.19,
                    'Porcentaje de población no especificada' => 1.02,
                    'Fecundidad promedio' => 1.99,
                    'Porcentaje de población con discapacidad' => 5.43
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 59.95,
                    'Población Económicamente Activa masculina' => 63.36,
                    'Población Económicamente Activa femenina' => 36.64,
                    'Población Ocupada' => 91.64,
                    'Población Ocupada masculina' => 62.38,
                    'Población Ocupada femenina' => 37.62,
                    'Población Desocupada' => 8.36,
                    'Derechohabiencia' => 78.74
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 296,
                    'Ocupación por Vivienda' => 3.97,
                    'Viviendas con Electricidad' => 99.66,
                    'Viviendas con Agua' => 99.32,
                    'Viviendas con Drenaje' => 98.99,
                    'Viviendas con Televisión' => 98.99,
                    'Viviendas con Automóvil' => 49.32,
                    'Viviendas con Computadora' => 22.12
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 18,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 55.56,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 5.56,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 5.56
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
            'Centro latitud'  => 25.526393447846,
            'Centro longitud' => -103.339387897942
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

} // Clase LosSauces

?>
