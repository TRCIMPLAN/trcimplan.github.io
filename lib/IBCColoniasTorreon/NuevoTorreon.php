<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon NuevoTorreon
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
 * Clase NuevoTorreon
 */
class NuevoTorreon extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Nuevo Torreón';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'nuevo-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Nuevo Torreón en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Nuevo Torreón';
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
                    'Población total' => 2469,
                    'Porcentaje de población masculina' => 47.63,
                    'Porcentaje de población femenina' => 52.37,
                    'Porcentaje de población de 0 a 14 años' => 19.98,
                    'Porcentaje de población de 15 a 64 años' => 64.45,
                    'Porcentaje de población de 65 y más años' => 10.99,
                    'Porcentaje de población no especificada' => 4.58,
                    'Fecundidad promedio' => 2.16,
                    'Porcentaje de población con discapacidad' => 3.29
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.77,
                    'Población Económicamente Activa masculina' => 60.23,
                    'Población Económicamente Activa femenina' => 39.77,
                    'Población Ocupada' => 92.72,
                    'Población Ocupada masculina' => 60.28,
                    'Población Ocupada femenina' => 39.72,
                    'Población Desocupada' => 7.28,
                    'Derechohabiencia' => 68.49
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 653,
                    'Ocupación por Vivienda' => 3.78,
                    'Viviendas con Electricidad' => 99.85,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 99.38,
                    'Viviendas con Televisión' => 98.77,
                    'Viviendas con Automóvil' => 72.15,
                    'Viviendas con Computadora' => 54.91
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 140,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 28.57,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 14.29,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 8.57,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 6.43
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
            'Centro latitud'  => 25.54265350859,
            'Centro longitud' => -103.408568915082
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

} // Clase NuevoTorreon

?>
