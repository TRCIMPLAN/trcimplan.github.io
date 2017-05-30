<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Zacatecas
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
 * Clase Zacatecas
 */
class Zacatecas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Zacatecas';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'zacatecas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Zacatecas en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Zacatecas';
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
                    'Población total' => 311,
                    'Porcentaje de población masculina' => 47.59,
                    'Porcentaje de población femenina' => 52.41,
                    'Porcentaje de población de 0 a 14 años' => 22.90,
                    'Porcentaje de población de 15 a 64 años' => 67.78,
                    'Porcentaje de población de 65 y más años' => 8.29,
                    'Porcentaje de población no especificada' => 1.03,
                    'Fecundidad promedio' => 2.62,
                    'Porcentaje de población con discapacidad' => 3.68
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 45.95,
                    'Población Económicamente Activa masculina' => 73.09,
                    'Población Económicamente Activa femenina' => 26.91,
                    'Población Ocupada' => 90.90,
                    'Población Ocupada masculina' => 73.31,
                    'Población Ocupada femenina' => 26.69,
                    'Población Desocupada' => 9.10,
                    'Derechohabiencia' => 71.70
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 85,
                    'Ocupación por Vivienda' => 3.66,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 98.82,
                    'Viviendas con Televisión' => 98.82,
                    'Viviendas con Automóvil' => 19.82,
                    'Viviendas con Computadora' => 11.06
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 6,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 66.67,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 16.67
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
            'Centro latitud'  => 25.5197887711547,
            'Centro longitud' => -103.448995517232
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

} // Clase Zacatecas

?>
