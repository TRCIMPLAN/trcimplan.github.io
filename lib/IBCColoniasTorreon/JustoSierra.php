<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon JustoSierra
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
 * Clase JustoSierra
 */
class JustoSierra extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Justo Sierra';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'justo-sierra';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Justo Sierra en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Justo Sierra';
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
                    'Población total' => 120,
                    'Porcentaje de población masculina' => 43.74,
                    'Porcentaje de población femenina' => 56.26,
                    'Porcentaje de población de 0 a 14 años' => 27.02,
                    'Porcentaje de población de 15 a 64 años' => 61.47,
                    'Porcentaje de población de 65 y más años' => 11.50,
                    'Porcentaje de población no especificada' => 0.01,
                    'Fecundidad promedio' => 2.68,
                    'Porcentaje de población con discapacidad' => 3.57
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 42.97,
                    'Población Económicamente Activa masculina' => 83.15,
                    'Población Económicamente Activa femenina' => 16.85,
                    'Población Ocupada' => 91.13,
                    'Población Ocupada masculina' => 81.79,
                    'Población Ocupada femenina' => 18.21,
                    'Población Desocupada' => 8.87,
                    'Derechohabiencia' => 71.09
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 34,
                    'Ocupación por Vivienda' => 3.53,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.22,
                    'Viviendas con Drenaje' => 95.23,
                    'Viviendas con Televisión' => 95.26,
                    'Viviendas con Automóvil' => 24.73,
                    'Viviendas con Computadora' => 10.05
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 4,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Educativos',
                    'Segunda actividad porcentaje' => 25.00,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 25.00
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
            'Centro latitud'  => 25.5215637480165,
            'Centro longitud' => -103.450112422281
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

} // Clase JustoSierra

?>
