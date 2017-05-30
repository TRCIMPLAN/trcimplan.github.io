<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ElOasis
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
 * Clase ElOasis
 */
class ElOasis extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El Oasis';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-oasis';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia El Oasis en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, El Oasis';
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
                    'Población total' => 213,
                    'Porcentaje de población masculina' => 51.13,
                    'Porcentaje de población femenina' => 48.87,
                    'Porcentaje de población de 0 a 14 años' => 28.76,
                    'Porcentaje de población de 15 a 64 años' => 69.18,
                    'Porcentaje de población de 65 y más años' => 1.99,
                    'Porcentaje de población no especificada' => 0.07,
                    'Fecundidad promedio' => 1.55,
                    'Porcentaje de población con discapacidad' => 0.96
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.67,
                    'Población Económicamente Activa masculina' => 69.07,
                    'Población Económicamente Activa femenina' => 30.93,
                    'Población Ocupada' => 99.93,
                    'Población Ocupada masculina' => 69.07,
                    'Población Ocupada femenina' => 30.93,
                    'Población Desocupada' => 0.07,
                    'Derechohabiencia' => 81.43
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 56,
                    'Ocupación por Vivienda' => 3.80,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.54,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 85.74,
                    'Viviendas con Computadora' => 80.67
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 1,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 100.00
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
            'Centro latitud'  => 25.5135750746108,
            'Centro longitud' => -103.388679082284
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

} // Clase ElOasis

?>
