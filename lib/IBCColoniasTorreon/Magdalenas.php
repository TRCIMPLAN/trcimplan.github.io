<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Magdalenas
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
 * Clase Magdalenas
 */
class Magdalenas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Magdalenas';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'magdalenas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Magdalenas en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Magdalenas';
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
                    'Población total' => 4329,
                    'Porcentaje de población masculina' => 48.79,
                    'Porcentaje de población femenina' => 51.21,
                    'Porcentaje de población de 0 a 14 años' => 26.15,
                    'Porcentaje de población de 15 a 64 años' => 62.98,
                    'Porcentaje de población de 65 y más años' => 9.05,
                    'Porcentaje de población no especificada' => 1.82,
                    'Fecundidad promedio' => 2.60,
                    'Porcentaje de población con discapacidad' => 3.22
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.94,
                    'Población Económicamente Activa masculina' => 67.55,
                    'Población Económicamente Activa femenina' => 32.45,
                    'Población Ocupada' => 94.33,
                    'Población Ocupada masculina' => 66.70,
                    'Población Ocupada femenina' => 33.30,
                    'Población Desocupada' => 5.67,
                    'Derechohabiencia' => 64.05
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1054,
                    'Ocupación por Vivienda' => 4.11,
                    'Viviendas con Electricidad' => 99.86,
                    'Viviendas con Agua' => 99.57,
                    'Viviendas con Drenaje' => 99.48,
                    'Viviendas con Televisión' => 98.43,
                    'Viviendas con Automóvil' => 46.00,
                    'Viviendas con Computadora' => 28.83
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 268,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 29.10,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 26.49,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 19.40,
                    'Cuarta actividad nombre' => 'Comercio Mayoreo',
                    'Cuarta actividad porcentaje' => 6.72,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 4.85
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
            'Centro latitud'  => 25.5651788088761,
            'Centro longitud' => -103.418266011713
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

} // Clase Magdalenas

?>
