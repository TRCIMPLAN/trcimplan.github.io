<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon BellaVista
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
 * Clase BellaVista
 */
class BellaVista extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Bella Vista';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'bella-vista';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Bella Vista en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Bella Vista';
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
                    'Población total' => 737,
                    'Porcentaje de población masculina' => 48.98,
                    'Porcentaje de población femenina' => 51.02,
                    'Porcentaje de población de 0 a 14 años' => 28.22,
                    'Porcentaje de población de 15 a 64 años' => 64.86,
                    'Porcentaje de población de 65 y más años' => 6.11,
                    'Porcentaje de población no especificada' => 0.81,
                    'Fecundidad promedio' => 2.47,
                    'Porcentaje de población con discapacidad' => 6.94
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.04,
                    'Población Económicamente Activa masculina' => 62.65,
                    'Población Económicamente Activa femenina' => 37.35,
                    'Población Ocupada' => 91.69,
                    'Población Ocupada masculina' => 61.54,
                    'Población Ocupada femenina' => 38.46,
                    'Población Desocupada' => 8.31,
                    'Derechohabiencia' => 69.47
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 190,
                    'Ocupación por Vivienda' => 3.88,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.47,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.42,
                    'Viviendas con Automóvil' => 45.06,
                    'Viviendas con Computadora' => 24.84
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 18,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 55.56,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 5.56,
                    'Cuarta actividad nombre' => 'Manejo de Residuos',
                    'Cuarta actividad porcentaje' => 5.56,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 5.56
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
            'Centro latitud'  => 25.5026873823463,
            'Centro longitud' => -103.407942586188
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

} // Clase BellaVista

?>
