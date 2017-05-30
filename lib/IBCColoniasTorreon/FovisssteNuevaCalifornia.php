<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon FovisssteNuevaCalifornia
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
 * Clase FovisssteNuevaCalifornia
 */
class FovisssteNuevaCalifornia extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Fovissste Nueva California';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'fovissste-nueva-california';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Fovissste Nueva California en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Fovissste Nueva California';
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
                    'Población total' => 613,
                    'Porcentaje de población masculina' => 46.98,
                    'Porcentaje de población femenina' => 53.02,
                    'Porcentaje de población de 0 a 14 años' => 21.21,
                    'Porcentaje de población de 15 a 64 años' => 74.55,
                    'Porcentaje de población de 65 y más años' => 3.26,
                    'Porcentaje de población no especificada' => 0.98,
                    'Fecundidad promedio' => 1.77,
                    'Porcentaje de población con discapacidad' => 3.63
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.40,
                    'Población Económicamente Activa masculina' => 54.31,
                    'Población Económicamente Activa femenina' => 45.69,
                    'Población Ocupada' => 92.81,
                    'Población Ocupada masculina' => 54.62,
                    'Población Ocupada femenina' => 45.38,
                    'Población Desocupada' => 7.19,
                    'Derechohabiencia' => 79.77
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 161,
                    'Ocupación por Vivienda' => 3.81,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 80.12,
                    'Viviendas con Computadora' => 68.94
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 7,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 57.14,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 28.57,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 14.29
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
            'Centro latitud'  => 25.5418289959825,
            'Centro longitud' => -103.399154602365
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

} // Clase FovisssteNuevaCalifornia

?>
