<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VeintiochoDeAbril
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
 * Clase VeintiochoDeAbril
 */
class VeintiochoDeAbril extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Veintiocho de Abril';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'veintiocho-de-abril';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Veintiocho de Abril en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Veintiocho de Abril';
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
                    'Población total' => 757,
                    'Porcentaje de población masculina' => 46.76,
                    'Porcentaje de población femenina' => 53.24,
                    'Porcentaje de población de 0 a 14 años' => 24.31,
                    'Porcentaje de población de 15 a 64 años' => 63.28,
                    'Porcentaje de población de 65 y más años' => 9.64,
                    'Porcentaje de población no especificada' => 2.77,
                    'Fecundidad promedio' => 2.15,
                    'Porcentaje de población con discapacidad' => 6.53
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.01,
                    'Población Económicamente Activa masculina' => 65.23,
                    'Población Económicamente Activa femenina' => 34.77,
                    'Población Ocupada' => 93.69,
                    'Población Ocupada masculina' => 63.73,
                    'Población Ocupada femenina' => 36.27,
                    'Población Desocupada' => 6.31,
                    'Derechohabiencia' => 60.90
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 194,
                    'Ocupación por Vivienda' => 3.90,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.97,
                    'Viviendas con Automóvil' => 41.63,
                    'Viviendas con Computadora' => 37.46
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 19,
                    'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Primer actividad porcentaje' => 31.58,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 26.32,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 21.05,
                    'Cuarta actividad nombre' => 'Manejo de Residuos',
                    'Cuarta actividad porcentaje' => 10.53,
                    'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Quinta actividad porcentaje' => 10.53
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
            'Centro latitud'  => 25.546581302371,
            'Centro longitud' => -103.464808682328
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

} // Clase VeintiochoDeAbril

?>
