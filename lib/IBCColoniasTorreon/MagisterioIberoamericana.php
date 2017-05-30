<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon MagisterioIberoamericana
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
 * Clase MagisterioIberoamericana
 */
class MagisterioIberoamericana extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Magisterio - Iberoamericana';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'magisterio-iberoamericana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Magisterio - Iberoamericana en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Magisterio - Iberoamericana';
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
                    'Población total' => 33,
                    'Porcentaje de población masculina' => 52.63,
                    'Porcentaje de población femenina' => 47.37,
                    'Porcentaje de población de 0 a 14 años' => 36.63,
                    'Porcentaje de población de 15 a 64 años' => 57.32,
                    'Porcentaje de población de 65 y más años' => 1.30,
                    'Porcentaje de población no especificada' => 4.75,
                    'Fecundidad promedio' => 1.56,
                    'Porcentaje de población con discapacidad' => 1.15
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 62.02,
                    'Población Económicamente Activa masculina' => 63.39,
                    'Población Económicamente Activa femenina' => 36.61,
                    'Población Ocupada' => 97.11,
                    'Población Ocupada masculina' => 62.96,
                    'Población Ocupada femenina' => 37.04,
                    'Población Desocupada' => 2.89,
                    'Derechohabiencia' => 73.18
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 8,
                    'Ocupación por Vivienda' => 4.12,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 94.26,
                    'Viviendas con Computadora' => 86.83
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 6,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 33.33,
                    'Segunda actividad nombre' => 'Industria Manufacturera',
                    'Segunda actividad porcentaje' => 33.33,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Comercio Mayoreo',
                    'Cuarta actividad porcentaje' => 16.67
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
            'Centro latitud'  => 25.599862886268,
            'Centro longitud' => -103.396355173246
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

} // Clase MagisterioIberoamericana

?>
