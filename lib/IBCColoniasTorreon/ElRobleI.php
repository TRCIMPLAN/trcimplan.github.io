<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ElRobleI
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
 * Clase ElRobleI
 */
class ElRobleI extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El Roble I';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-roble-i';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia El Roble I en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, El Roble I';
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
                    'Población total' => 1238,
                    'Porcentaje de población masculina' => 46.12,
                    'Porcentaje de población femenina' => 53.88,
                    'Porcentaje de población de 0 a 14 años' => 20.68,
                    'Porcentaje de población de 15 a 64 años' => 70.76,
                    'Porcentaje de población de 65 y más años' => 7.51,
                    'Porcentaje de población no especificada' => 1.05,
                    'Fecundidad promedio' => 2.24,
                    'Porcentaje de población con discapacidad' => 6.93
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.96,
                    'Población Económicamente Activa masculina' => 63.47,
                    'Población Económicamente Activa femenina' => 36.53,
                    'Población Ocupada' => 93.61,
                    'Población Ocupada masculina' => 62.73,
                    'Población Ocupada femenina' => 37.27,
                    'Población Desocupada' => 6.39,
                    'Derechohabiencia' => 75.12
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 332,
                    'Ocupación por Vivienda' => 3.73,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.40,
                    'Viviendas con Automóvil' => 63.25,
                    'Viviendas con Computadora' => 44.87
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 12,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 66.67,
                    'Segunda actividad nombre' => 'Educativos',
                    'Segunda actividad porcentaje' => 8.33,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 8.33,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 8.33,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 8.33
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
            'Centro latitud'  => 25.5774929382194,
            'Centro longitud' => -103.436009088225
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

} // Clase ElRobleI

?>
