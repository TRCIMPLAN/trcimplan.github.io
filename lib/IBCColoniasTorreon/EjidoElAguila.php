<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon EjidoElAguila
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
 * Clase EjidoElAguila
 */
class EjidoElAguila extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ejido El Águila';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'ejido-el-aguila';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Ejido El Águila en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Ejido El Águila';
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
                    'Población total' => 1684,
                    'Porcentaje de población masculina' => 50.30,
                    'Porcentaje de población femenina' => 49.70,
                    'Porcentaje de población de 0 a 14 años' => 33.86,
                    'Porcentaje de población de 15 a 64 años' => 59.81,
                    'Porcentaje de población de 65 y más años' => 5.09,
                    'Porcentaje de población no especificada' => 1.24,
                    'Fecundidad promedio' => 2.61,
                    'Porcentaje de población con discapacidad' => 9.70
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.19,
                    'Población Económicamente Activa masculina' => 74.53,
                    'Población Económicamente Activa femenina' => 25.47,
                    'Población Ocupada' => 88.63,
                    'Población Ocupada masculina' => 72.40,
                    'Población Ocupada femenina' => 27.60,
                    'Población Desocupada' => 11.37,
                    'Derechohabiencia' => 65.52
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 408,
                    'Ocupación por Vivienda' => 4.13,
                    'Viviendas con Electricidad' => 99.71,
                    'Viviendas con Agua' => 96.43,
                    'Viviendas con Drenaje' => 96.93,
                    'Viviendas con Televisión' => 98.41,
                    'Viviendas con Automóvil' => 34.96,
                    'Viviendas con Computadora' => 10.33
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 46,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 39.13,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 21.74,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 15.22,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 8.70,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 4.35
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
            'Centro latitud'  => 25.5315843765869,
            'Centro longitud' => -103.336336014844
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

} // Clase EjidoElAguila

?>
