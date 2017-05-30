<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Carolinas
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
 * Clase Carolinas
 */
class Carolinas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Carolinas';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'carolinas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Carolinas en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Carolinas';
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
                    'Población total' => 5694,
                    'Porcentaje de población masculina' => 47.93,
                    'Porcentaje de población femenina' => 52.07,
                    'Porcentaje de población de 0 a 14 años' => 23.92,
                    'Porcentaje de población de 15 a 64 años' => 64.86,
                    'Porcentaje de población de 65 y más años' => 9.06,
                    'Porcentaje de población no especificada' => 2.16,
                    'Fecundidad promedio' => 2.57,
                    'Porcentaje de población con discapacidad' => 3.16
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.65,
                    'Población Económicamente Activa masculina' => 63.82,
                    'Población Económicamente Activa femenina' => 36.18,
                    'Población Ocupada' => 84.57,
                    'Población Ocupada masculina' => 62.51,
                    'Población Ocupada femenina' => 37.49,
                    'Población Desocupada' => 15.43,
                    'Derechohabiencia' => 63.52
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1520,
                    'Ocupación por Vivienda' => 3.75,
                    'Viviendas con Electricidad' => 99.94,
                    'Viviendas con Agua' => 99.75,
                    'Viviendas con Drenaje' => 99.55,
                    'Viviendas con Televisión' => 98.56,
                    'Viviendas con Automóvil' => 44.27,
                    'Viviendas con Computadora' => 29.12
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 151,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.40,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 21.85,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 12.58,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 7.95,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 5.30
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
            'Centro latitud'  => 25.5553244231542,
            'Centro longitud' => -103.40769316004
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

} // Clase Carolinas

?>
