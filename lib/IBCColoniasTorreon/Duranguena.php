<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Duranguena
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
 * Clase Duranguena
 */
class Duranguena extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Durangueña';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'duranguena';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Durangueña en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Durangueña';
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
                    'Población total' => 996,
                    'Porcentaje de población masculina' => 48.48,
                    'Porcentaje de población femenina' => 51.52,
                    'Porcentaje de población de 0 a 14 años' => 27.66,
                    'Porcentaje de población de 15 a 64 años' => 62.70,
                    'Porcentaje de población de 65 y más años' => 9.64,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.55,
                    'Porcentaje de población con discapacidad' => 8.88
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 48.95,
                    'Población Económicamente Activa masculina' => 70.54,
                    'Población Económicamente Activa femenina' => 29.46,
                    'Población Ocupada' => 94.67,
                    'Población Ocupada masculina' => 69.25,
                    'Población Ocupada femenina' => 30.75,
                    'Población Desocupada' => 5.33,
                    'Derechohabiencia' => 46.92
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 266,
                    'Ocupación por Vivienda' => 3.74,
                    'Viviendas con Electricidad' => 97.71,
                    'Viviendas con Agua' => 93.31,
                    'Viviendas con Drenaje' => 98.88,
                    'Viviendas con Televisión' => 94.49,
                    'Viviendas con Automóvil' => 12.32,
                    'Viviendas con Computadora' => 5.80
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 10,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 70.00,
                    'Segunda actividad nombre' => 'Industria Manufacturera',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Tercera actividad porcentaje' => 10.00
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
            'Centro latitud'  => 25.5331055891246,
            'Centro longitud' => -103.470271201769
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

} // Clase Duranguena

?>
