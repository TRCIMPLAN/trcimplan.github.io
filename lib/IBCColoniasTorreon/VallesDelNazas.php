<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VallesDelNazas
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
 * Clase VallesDelNazas
 */
class VallesDelNazas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Valles del Nazas';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'valles-del-nazas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Valles del Nazas en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Valles del Nazas';
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
                    'Población total' => 1941,
                    'Porcentaje de población masculina' => 48.84,
                    'Porcentaje de población femenina' => 51.16,
                    'Porcentaje de población de 0 a 14 años' => 34.88,
                    'Porcentaje de población de 15 a 64 años' => 60.64,
                    'Porcentaje de población de 65 y más años' => 2.94,
                    'Porcentaje de población no especificada' => 1.54,
                    'Fecundidad promedio' => 1.72,
                    'Porcentaje de población con discapacidad' => 1.98
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.55,
                    'Población Económicamente Activa masculina' => 61.64,
                    'Población Económicamente Activa femenina' => 38.36,
                    'Población Ocupada' => 96.16,
                    'Población Ocupada masculina' => 61.40,
                    'Población Ocupada femenina' => 38.60,
                    'Población Desocupada' => 3.84,
                    'Derechohabiencia' => 78.67
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 497,
                    'Ocupación por Vivienda' => 3.91,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.59,
                    'Viviendas con Automóvil' => 68.01,
                    'Viviendas con Computadora' => 55.94
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 49,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 38.78,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 26.53,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 14.29,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 6.12,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 4.08
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
            'Centro latitud'  => 25.5375192778333,
            'Centro longitud' => -103.360275141703
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

} // Clase VallesDelNazas

?>
