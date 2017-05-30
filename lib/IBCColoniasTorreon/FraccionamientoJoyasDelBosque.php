<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon FraccionamientoJoyasDelBosque
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
 * Clase FraccionamientoJoyasDelBosque
 */
class FraccionamientoJoyasDelBosque extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Fraccionamiento Joyas del Bosque';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'fraccionamiento-joyas-del-bosque';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Fraccionamiento Joyas del Bosque en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Fraccionamiento Joyas del Bosque';
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
                    'Población total' => 831,
                    'Porcentaje de población masculina' => 49.10,
                    'Porcentaje de población femenina' => 50.90,
                    'Porcentaje de población de 0 a 14 años' => 37.06,
                    'Porcentaje de población de 15 a 64 años' => 61.01,
                    'Porcentaje de población de 65 y más años' => 1.56,
                    'Porcentaje de población no especificada' => 0.37,
                    'Fecundidad promedio' => 2.22,
                    'Porcentaje de población con discapacidad' => 0.90
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 61.22,
                    'Población Económicamente Activa masculina' => 66.19,
                    'Población Económicamente Activa femenina' => 33.81,
                    'Población Ocupada' => 85.96,
                    'Población Ocupada masculina' => 62.99,
                    'Población Ocupada femenina' => 37.01,
                    'Población Desocupada' => 14.04,
                    'Derechohabiencia' => 68.83
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 221,
                    'Ocupación por Vivienda' => 3.76,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.55,
                    'Viviendas con Automóvil' => 31.20,
                    'Viviendas con Computadora' => 11.25
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 17,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 70.59,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 23.53,
                    'Tercera actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Tercera actividad porcentaje' => 5.88
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
            'Centro latitud'  => 25.5536812879906,
            'Centro longitud' => -103.323946628209
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

} // Clase FraccionamientoJoyasDelBosque

?>
