<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon SanMarcos
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
 * Clase SanMarcos
 */
class SanMarcos extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'San Marcos';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'san-marcos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia San Marcos en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, San Marcos';
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
                    'Población total' => 1837,
                    'Porcentaje de población masculina' => 47.47,
                    'Porcentaje de población femenina' => 52.53,
                    'Porcentaje de población de 0 a 14 años' => 25.11,
                    'Porcentaje de población de 15 a 64 años' => 63.52,
                    'Porcentaje de población de 65 y más años' => 9.89,
                    'Porcentaje de población no especificada' => 1.48,
                    'Fecundidad promedio' => 2.67,
                    'Porcentaje de población con discapacidad' => 8.97
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.08,
                    'Población Económicamente Activa masculina' => 62.75,
                    'Población Económicamente Activa femenina' => 37.25,
                    'Población Ocupada' => 94.86,
                    'Población Ocupada masculina' => 62.14,
                    'Población Ocupada femenina' => 37.86,
                    'Población Desocupada' => 5.14,
                    'Derechohabiencia' => 70.73
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 482,
                    'Ocupación por Vivienda' => 3.81,
                    'Viviendas con Electricidad' => 99.90,
                    'Viviendas con Agua' => 99.90,
                    'Viviendas con Drenaje' => 99.90,
                    'Viviendas con Televisión' => 97.83,
                    'Viviendas con Automóvil' => 51.23,
                    'Viviendas con Computadora' => 30.84
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 74,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 35.14,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 21.62,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 17.57,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 8.11,
                    'Quinta actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Quinta actividad porcentaje' => 4.05
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
            'Centro latitud'  => 25.5453731032625,
            'Centro longitud' => -103.414437536635
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

} // Clase SanMarcos

?>
