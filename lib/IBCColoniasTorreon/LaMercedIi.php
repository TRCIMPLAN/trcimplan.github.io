<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LaMercedIi
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
 * Clase LaMercedIi
 */
class LaMercedIi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'La Merced II';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'la-merced-ii';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia La Merced II en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, La Merced II';
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
                    'Población total' => 5097,
                    'Porcentaje de población masculina' => 48.68,
                    'Porcentaje de población femenina' => 51.32,
                    'Porcentaje de población de 0 a 14 años' => 22.41,
                    'Porcentaje de población de 15 a 64 años' => 72.57,
                    'Porcentaje de población de 65 y más años' => 3.67,
                    'Porcentaje de población no especificada' => 1.35,
                    'Fecundidad promedio' => 1.83,
                    'Porcentaje de población con discapacidad' => 3.88
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.72,
                    'Población Económicamente Activa masculina' => 60.61,
                    'Población Económicamente Activa femenina' => 39.39,
                    'Población Ocupada' => 91.48,
                    'Población Ocupada masculina' => 60.03,
                    'Población Ocupada femenina' => 39.97,
                    'Población Desocupada' => 8.52,
                    'Derechohabiencia' => 76.67
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1368,
                    'Ocupación por Vivienda' => 3.73,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.85,
                    'Viviendas con Drenaje' => 99.93,
                    'Viviendas con Televisión' => 99.63,
                    'Viviendas con Automóvil' => 65.94,
                    'Viviendas con Computadora' => 56.96
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 129,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 43.41,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 16.28,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 15.50,
                    'Cuarta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Cuarta actividad porcentaje' => 4.65,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 4.65
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
            'Centro latitud'  => 25.5237300729974,
            'Centro longitud' => -103.389585866142
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

} // Clase LaMercedIi

?>
