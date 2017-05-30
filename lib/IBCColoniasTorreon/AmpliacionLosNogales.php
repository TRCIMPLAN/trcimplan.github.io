<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon AmpliacionLosNogales
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
 * Clase AmpliacionLosNogales
 */
class AmpliacionLosNogales extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ampliación Los Nogales';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'ampliacion-los-nogales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Ampliación Los Nogales en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Ampliación Los Nogales';
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
                    'Población total' => 1460,
                    'Porcentaje de población masculina' => 47.12,
                    'Porcentaje de población femenina' => 52.88,
                    'Porcentaje de población de 0 a 14 años' => 19.38,
                    'Porcentaje de población de 15 a 64 años' => 66.58,
                    'Porcentaje de población de 65 y más años' => 11.16,
                    'Porcentaje de población no especificada' => 2.88,
                    'Fecundidad promedio' => 1.95,
                    'Porcentaje de población con discapacidad' => 12.12
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 48.79,
                    'Población Económicamente Activa masculina' => 60.55,
                    'Población Económicamente Activa femenina' => 39.45,
                    'Población Ocupada' => 95.71,
                    'Población Ocupada masculina' => 60.64,
                    'Población Ocupada femenina' => 39.36,
                    'Población Desocupada' => 4.29,
                    'Derechohabiencia' => 75.07
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 450,
                    'Ocupación por Vivienda' => 3.24,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.44,
                    'Viviendas con Drenaje' => 98.89,
                    'Viviendas con Televisión' => 99.33,
                    'Viviendas con Automóvil' => 83.11,
                    'Viviendas con Computadora' => 58.89
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 34,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 32.35,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 17.65,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 11.76,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 8.82,
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
            'Centro latitud'  => 25.5699253924568,
            'Centro longitud' => -103.445013773719
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

} // Clase AmpliacionLosNogales

?>
