<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Horizonte
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
 * Clase Horizonte
 */
class Horizonte extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Horizonte';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'horizonte';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Horizonte en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Horizonte';
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
                    'Población total' => 249,
                    'Porcentaje de población masculina' => 46.18,
                    'Porcentaje de población femenina' => 53.82,
                    'Porcentaje de población de 0 a 14 años' => 23.29,
                    'Porcentaje de población de 15 a 64 años' => 70.68,
                    'Porcentaje de población de 65 y más años' => 6.02,
                    'Porcentaje de población no especificada' => 0.01,
                    'Fecundidad promedio' => 1.79,
                    'Porcentaje de población con discapacidad' => 2.87
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.16,
                    'Población Económicamente Activa masculina' => 56.14,
                    'Población Económicamente Activa femenina' => 43.86,
                    'Población Ocupada' => 92.49,
                    'Población Ocupada masculina' => 53.77,
                    'Población Ocupada femenina' => 46.23,
                    'Población Desocupada' => 7.51,
                    'Derechohabiencia' => 75.10
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 79,
                    'Ocupación por Vivienda' => 3.15,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 97.47,
                    'Viviendas con Automóvil' => 75.95,
                    'Viviendas con Computadora' => 68.35
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 6,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 33.33,
                    'Segunda actividad nombre' => 'Salud',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 16.67,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 16.67
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
            'Centro latitud'  => 25.5367394346653,
            'Centro longitud' => -103.383306067117
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

} // Clase Horizonte

?>
