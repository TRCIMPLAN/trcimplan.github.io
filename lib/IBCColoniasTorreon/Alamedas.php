<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Alamedas
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
 * Clase Alamedas
 */
class Alamedas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Alamedas';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'alamedas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Alamedas en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Alamedas';
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
                    'Población total' => 7044,
                    'Porcentaje de población masculina' => 48.18,
                    'Porcentaje de población femenina' => 51.82,
                    'Porcentaje de población de 0 a 14 años' => 21.54,
                    'Porcentaje de población de 15 a 64 años' => 69.28,
                    'Porcentaje de población de 65 y más años' => 8.66,
                    'Porcentaje de población no especificada' => 0.52,
                    'Fecundidad promedio' => 2.37,
                    'Porcentaje de población con discapacidad' => 7.55
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.92,
                    'Población Económicamente Activa masculina' => 63.47,
                    'Población Económicamente Activa femenina' => 36.53,
                    'Población Ocupada' => 93.62,
                    'Población Ocupada masculina' => 62.75,
                    'Población Ocupada femenina' => 37.25,
                    'Población Desocupada' => 6.38,
                    'Derechohabiencia' => 77.61
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1850,
                    'Ocupación por Vivienda' => 3.81,
                    'Viviendas con Electricidad' => 99.84,
                    'Viviendas con Agua' => 99.35,
                    'Viviendas con Drenaje' => 99.68,
                    'Viviendas con Televisión' => 99.62,
                    'Viviendas con Automóvil' => 57.98,
                    'Viviendas con Computadora' => 41.97
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 122,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 45.90,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 19.67,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 18.03,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 4.92,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 3.28
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
            'Centro latitud'  => 25.5709774992304,
            'Centro longitud' => -103.436011706782
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

} // Clase Alamedas

?>
