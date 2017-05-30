<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ResidencialLasEtnias
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
 * Clase ResidencialLasEtnias
 */
class ResidencialLasEtnias extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Residencial Las Etnias';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'residencial-las-etnias';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Residencial Las Etnias en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Residencial Las Etnias';
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
                    'Población total' => 3787,
                    'Porcentaje de población masculina' => 48.69,
                    'Porcentaje de población femenina' => 51.31,
                    'Porcentaje de población de 0 a 14 años' => 34.25,
                    'Porcentaje de población de 15 a 64 años' => 61.18,
                    'Porcentaje de población de 65 y más años' => 2.59,
                    'Porcentaje de población no especificada' => 1.98,
                    'Fecundidad promedio' => 1.62,
                    'Porcentaje de población con discapacidad' => 1.13
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 62.27,
                    'Población Económicamente Activa masculina' => 61.97,
                    'Población Económicamente Activa femenina' => 38.03,
                    'Población Ocupada' => 95.42,
                    'Población Ocupada masculina' => 60.81,
                    'Población Ocupada femenina' => 39.19,
                    'Población Desocupada' => 4.58,
                    'Derechohabiencia' => 81.57
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1067,
                    'Ocupación por Vivienda' => 3.55,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.91,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.34,
                    'Viviendas con Automóvil' => 78.35,
                    'Viviendas con Computadora' => 57.45
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 62,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.32,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 17.74,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 11.29,
                    'Cuarta actividad nombre' => 'Comercio Mayoreo',
                    'Cuarta actividad porcentaje' => 9.68,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 6.45
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
            'Centro latitud'  => 25.5561054579306,
            'Centro longitud' => -103.388786810928
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

} // Clase ResidencialLasEtnias

?>
