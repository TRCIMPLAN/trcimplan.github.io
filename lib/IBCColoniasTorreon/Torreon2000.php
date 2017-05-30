<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Torreon2000
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
 * Clase Torreon2000
 */
class Torreon2000 extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón 2000';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-2000';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Torreón 2000 en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Torreón 2000';
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
                    'Población total' => 922,
                    'Porcentaje de población masculina' => 49.57,
                    'Porcentaje de población femenina' => 50.43,
                    'Porcentaje de población de 0 a 14 años' => 36.98,
                    'Porcentaje de población de 15 a 64 años' => 60.30,
                    'Porcentaje de población de 65 y más años' => 2.06,
                    'Porcentaje de población no especificada' => 0.66,
                    'Fecundidad promedio' => 1.75,
                    'Porcentaje de población con discapacidad' => 1.22
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.50,
                    'Población Económicamente Activa masculina' => 62.10,
                    'Población Económicamente Activa femenina' => 37.90,
                    'Población Ocupada' => 94.63,
                    'Población Ocupada masculina' => 60.91,
                    'Población Ocupada femenina' => 39.09,
                    'Población Desocupada' => 5.37,
                    'Derechohabiencia' => 80.48
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 242,
                    'Ocupación por Vivienda' => 3.81,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.59,
                    'Viviendas con Automóvil' => 76.45,
                    'Viviendas con Computadora' => 55.37
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 9,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 66.67,
                    'Segunda actividad nombre' => 'Manejo de Residuos',
                    'Segunda actividad porcentaje' => 11.11,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 11.11,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 11.11
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
            'Centro latitud'  => 25.5703552266105,
            'Centro longitud' => -103.392432063985
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

} // Clase Torreon2000

?>
