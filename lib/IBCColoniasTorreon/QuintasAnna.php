<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon QuintasAnna
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
 * Clase QuintasAnna
 */
class QuintasAnna extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Quintas Anna';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'quintas-anna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Quintas Anna en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Quintas Anna';
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
                    'Población total' => 167,
                    'Porcentaje de población masculina' => 49.10,
                    'Porcentaje de población femenina' => 50.90,
                    'Porcentaje de población de 0 a 14 años' => 33.53,
                    'Porcentaje de población de 15 a 64 años' => 53.29,
                    'Porcentaje de población de 65 y más años' => 2.40,
                    'Porcentaje de población no especificada' => 10.78,
                    'Fecundidad promedio' => 2.00,
                    'Porcentaje de población con discapacidad' => 2.40
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 61.54,
                    'Población Económicamente Activa masculina' => 68.75,
                    'Población Económicamente Activa femenina' => 31.25,
                    'Población Ocupada' => 95.09,
                    'Población Ocupada masculina' => 68.85,
                    'Población Ocupada femenina' => 31.15,
                    'Población Desocupada' => 4.91,
                    'Derechohabiencia' => 72.46
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 41,
                    'Ocupación por Vivienda' => 4.07,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 97.56,
                    'Viviendas con Automóvil' => 46.34,
                    'Viviendas con Computadora' => 29.27
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 8,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 37.50,
                    'Tercera actividad nombre' => 'Agricultura',
                    'Tercera actividad porcentaje' => 12.50
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
            'Centro latitud'  => 25.6005183971764,
            'Centro longitud' => -103.367419560409
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

} // Clase QuintasAnna

?>
