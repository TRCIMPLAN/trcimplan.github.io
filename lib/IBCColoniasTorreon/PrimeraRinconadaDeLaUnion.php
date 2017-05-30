<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon PrimeraRinconadaDeLaUnion
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
 * Clase PrimeraRinconadaDeLaUnion
 */
class PrimeraRinconadaDeLaUnion extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Primera Rinconada de La Unión';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'primera-rinconada-de-la-union';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Primera Rinconada de La Unión en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Primera Rinconada de La Unión';
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
                    'Población total' => 837,
                    'Porcentaje de población masculina' => 50.49,
                    'Porcentaje de población femenina' => 49.51,
                    'Porcentaje de población de 0 a 14 años' => 27.82,
                    'Porcentaje de población de 15 a 64 años' => 62.23,
                    'Porcentaje de población de 65 y más años' => 9.95,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.36,
                    'Porcentaje de población con discapacidad' => 5.92
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.24,
                    'Población Económicamente Activa masculina' => 72.42,
                    'Población Económicamente Activa femenina' => 27.58,
                    'Población Ocupada' => 94.75,
                    'Población Ocupada masculina' => 70.97,
                    'Población Ocupada femenina' => 29.03,
                    'Población Desocupada' => 5.25,
                    'Derechohabiencia' => 64.76
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 230,
                    'Ocupación por Vivienda' => 3.64,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.96,
                    'Viviendas con Drenaje' => 99.97,
                    'Viviendas con Televisión' => 98.19,
                    'Viviendas con Automóvil' => 17.72,
                    'Viviendas con Computadora' => 16.22
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 12,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 66.67,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 25.00,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 8.33
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
            'Centro latitud'  => 25.5282285021809,
            'Centro longitud' => -103.46180301521
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

} // Clase PrimeraRinconadaDeLaUnion

?>
