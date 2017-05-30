<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Morelos
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
 * Clase Morelos
 */
class Morelos extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Morelos';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'morelos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Morelos en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Morelos';
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
                    'Población total' => 1315,
                    'Porcentaje de población masculina' => 47.90,
                    'Porcentaje de población femenina' => 52.10,
                    'Porcentaje de población de 0 a 14 años' => 22.08,
                    'Porcentaje de población de 15 a 64 años' => 68.21,
                    'Porcentaje de población de 65 y más años' => 9.71,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.32,
                    'Porcentaje de población con discapacidad' => 5.07
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.48,
                    'Población Económicamente Activa masculina' => 68.79,
                    'Población Económicamente Activa femenina' => 31.21,
                    'Población Ocupada' => 94.27,
                    'Población Ocupada masculina' => 67.40,
                    'Población Ocupada femenina' => 32.60,
                    'Población Desocupada' => 5.73,
                    'Derechohabiencia' => 70.08
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 353,
                    'Ocupación por Vivienda' => 3.73,
                    'Viviendas con Electricidad' => 99.74,
                    'Viviendas con Agua' => 99.16,
                    'Viviendas con Drenaje' => 99.45,
                    'Viviendas con Televisión' => 97.17,
                    'Viviendas con Automóvil' => 31.76,
                    'Viviendas con Computadora' => 21.88
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 39,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 35.90,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.51,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 20.51,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 12.82,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 5.13
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
            'Centro latitud'  => 25.5279020919013,
            'Centro longitud' => -103.467140555743
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

} // Clase Morelos

?>
