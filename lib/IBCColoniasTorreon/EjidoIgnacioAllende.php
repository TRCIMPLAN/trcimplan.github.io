<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon EjidoIgnacioAllende
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
 * Clase EjidoIgnacioAllende
 */
class EjidoIgnacioAllende extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ejido Ignacio Allende';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'ejido-ignacio-allende';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Ejido Ignacio Allende en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Ejido Ignacio Allende';
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
                    'Población total' => 1584,
                    'Porcentaje de población masculina' => 50.21,
                    'Porcentaje de población femenina' => 49.79,
                    'Porcentaje de población de 0 a 14 años' => 28.82,
                    'Porcentaje de población de 15 a 64 años' => 65.13,
                    'Porcentaje de población de 65 y más años' => 5.53,
                    'Porcentaje de población no especificada' => 0.52,
                    'Fecundidad promedio' => 2.52,
                    'Porcentaje de población con discapacidad' => 2.91
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.22,
                    'Población Económicamente Activa masculina' => 70.92,
                    'Población Económicamente Activa femenina' => 29.08,
                    'Población Ocupada' => 89.19,
                    'Población Ocupada masculina' => 69.04,
                    'Población Ocupada femenina' => 30.96,
                    'Población Desocupada' => 10.81,
                    'Derechohabiencia' => 70.35
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 394,
                    'Ocupación por Vivienda' => 4.02,
                    'Viviendas con Electricidad' => 99.01,
                    'Viviendas con Agua' => 98.75,
                    'Viviendas con Drenaje' => 95.70,
                    'Viviendas con Televisión' => 96.97,
                    'Viviendas con Automóvil' => 49.00,
                    'Viviendas con Computadora' => 38.96
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 70,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 28.57,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 18.57,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 15.71,
                    'Cuarta actividad nombre' => 'Inmobiliarios',
                    'Cuarta actividad porcentaje' => 12.86,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 7.14
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
            'Centro latitud'  => 25.5741520745785,
            'Centro longitud' => -103.395427292457
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

} // Clase EjidoIgnacioAllende

?>
