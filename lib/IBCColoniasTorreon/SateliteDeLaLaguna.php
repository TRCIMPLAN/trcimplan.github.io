<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon SateliteDeLaLaguna
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
 * Clase SateliteDeLaLaguna
 */
class SateliteDeLaLaguna extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Satélite de La Laguna';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'satelite-de-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Satélite de La Laguna en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Satélite de La Laguna';
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
                    'Población total' => 1012,
                    'Porcentaje de población masculina' => 46.54,
                    'Porcentaje de población femenina' => 53.46,
                    'Porcentaje de población de 0 a 14 años' => 28.95,
                    'Porcentaje de población de 15 a 64 años' => 67.39,
                    'Porcentaje de población de 65 y más años' => 3.56,
                    'Porcentaje de población no especificada' => 0.10,
                    'Fecundidad promedio' => 1.80,
                    'Porcentaje de población con discapacidad' => 2.09
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.60,
                    'Población Económicamente Activa masculina' => 59.82,
                    'Población Económicamente Activa femenina' => 40.18,
                    'Población Ocupada' => 86.29,
                    'Población Ocupada masculina' => 61.58,
                    'Población Ocupada femenina' => 38.42,
                    'Población Desocupada' => 13.71,
                    'Derechohabiencia' => 84.68
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 269,
                    'Ocupación por Vivienda' => 3.76,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.63,
                    'Viviendas con Automóvil' => 55.01,
                    'Viviendas con Computadora' => 48.05
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 34,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 32.35,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 23.53,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 11.76,
                    'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Cuarta actividad porcentaje' => 11.76,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 8.82
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
            'Centro latitud'  => 25.5601041009021,
            'Centro longitud' => -103.394426363432
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

} // Clase SateliteDeLaLaguna

?>
