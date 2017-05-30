<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LatinoamericanoIi
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
 * Clase LatinoamericanoIi
 */
class LatinoamericanoIi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Latinoamericano II';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'latinoamericano-ii';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Latinoamericano II en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Latinoamericano II';
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
                    'Población total' => 458,
                    'Porcentaje de población masculina' => 48.46,
                    'Porcentaje de población femenina' => 51.54,
                    'Porcentaje de población de 0 a 14 años' => 30.94,
                    'Porcentaje de población de 15 a 64 años' => 65.53,
                    'Porcentaje de población de 65 y más años' => 2.87,
                    'Porcentaje de población no especificada' => 0.66,
                    'Fecundidad promedio' => 1.87,
                    'Porcentaje de población con discapacidad' => 3.63
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.55,
                    'Población Económicamente Activa masculina' => 62.22,
                    'Población Económicamente Activa femenina' => 37.78,
                    'Población Ocupada' => 92.91,
                    'Población Ocupada masculina' => 61.89,
                    'Población Ocupada femenina' => 38.11,
                    'Población Desocupada' => 7.09,
                    'Derechohabiencia' => 77.42
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 114,
                    'Ocupación por Vivienda' => 4.02,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.64,
                    'Viviendas con Automóvil' => 66.63,
                    'Viviendas con Computadora' => 55.92
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 10,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 30.00,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 10.00,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 10.00
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
            'Centro latitud'  => 25.5263717413963,
            'Centro longitud' => -103.351498633942
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

} // Clase LatinoamericanoIi

?>
