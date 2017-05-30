<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon AmpliacionLazaroCardenas
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
 * Clase AmpliacionLazaroCardenas
 */
class AmpliacionLazaroCardenas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ampliación Lázaro Cardenas';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'ampliacion-lazaro-cardenas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Ampliación Lázaro Cardenas en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Ampliación Lázaro Cardenas';
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
                    'Población total' => 2755,
                    'Porcentaje de población masculina' => 48.46,
                    'Porcentaje de población femenina' => 51.54,
                    'Porcentaje de población de 0 a 14 años' => 27.22,
                    'Porcentaje de población de 15 a 64 años' => 67.59,
                    'Porcentaje de población de 65 y más años' => 4.65,
                    'Porcentaje de población no especificada' => 0.54,
                    'Fecundidad promedio' => 2.00,
                    'Porcentaje de población con discapacidad' => 13.92
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.43,
                    'Población Económicamente Activa masculina' => 64.85,
                    'Población Económicamente Activa femenina' => 35.15,
                    'Población Ocupada' => 93.87,
                    'Población Ocupada masculina' => 64.02,
                    'Población Ocupada femenina' => 35.98,
                    'Población Desocupada' => 6.13,
                    'Derechohabiencia' => 72.99
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 699,
                    'Ocupación por Vivienda' => 3.94,
                    'Viviendas con Electricidad' => 99.71,
                    'Viviendas con Agua' => 99.28,
                    'Viviendas con Drenaje' => 99.71,
                    'Viviendas con Televisión' => 98.00,
                    'Viviendas con Automóvil' => 60.28,
                    'Viviendas con Computadora' => 44.43
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 64,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 43.75,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.31,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 12.50,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 9.38,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 4.69
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
            'Centro latitud'  => 25.4998399555853,
            'Centro longitud' => -103.411332296563
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

} // Clase AmpliacionLazaroCardenas

?>
