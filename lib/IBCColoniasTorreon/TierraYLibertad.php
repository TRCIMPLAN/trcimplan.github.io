<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon TierraYLibertad
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
 * Clase TierraYLibertad
 */
class TierraYLibertad extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Tierra y Libertad';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'tierra-y-libertad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Tierra y Libertad en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Tierra y Libertad';
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
                    'Población total' => 3806,
                    'Porcentaje de población masculina' => 49.08,
                    'Porcentaje de población femenina' => 50.92,
                    'Porcentaje de población de 0 a 14 años' => 27.48,
                    'Porcentaje de población de 15 a 64 años' => 62.14,
                    'Porcentaje de población de 65 y más años' => 8.96,
                    'Porcentaje de población no especificada' => 1.42,
                    'Fecundidad promedio' => 2.90,
                    'Porcentaje de población con discapacidad' => 8.96
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.07,
                    'Población Económicamente Activa masculina' => 64.59,
                    'Población Económicamente Activa femenina' => 35.41,
                    'Población Ocupada' => 89.13,
                    'Población Ocupada masculina' => 63.14,
                    'Población Ocupada femenina' => 36.86,
                    'Población Desocupada' => 10.87,
                    'Derechohabiencia' => 63.61
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 920,
                    'Ocupación por Vivienda' => 4.14,
                    'Viviendas con Electricidad' => 99.67,
                    'Viviendas con Agua' => 99.57,
                    'Viviendas con Drenaje' => 99.57,
                    'Viviendas con Televisión' => 98.48,
                    'Viviendas con Automóvil' => 34.31,
                    'Viviendas con Computadora' => 18.95
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 115,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 43.48,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 13.91,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 13.04,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 12.17,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 5.22
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
            'Centro latitud'  => 25.5535280288997,
            'Centro longitud' => -103.413611832349
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

} // Clase TierraYLibertad

?>
