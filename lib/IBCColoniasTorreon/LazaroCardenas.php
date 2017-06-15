<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LazaroCardenas
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
 * Clase LazaroCardenas
 */
class LazaroCardenas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Lázaro Cárdenas';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'lazaro-cardenas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Lázaro Cárdenas en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Lázaro Cárdenas';
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
                    'Población total' => 5473,
                    'Porcentaje de población masculina' => 49.54,
                    'Porcentaje de población femenina' => 50.46,
                    'Porcentaje de población de 0 a 14 años' => 33.00,
                    'Porcentaje de población de 15 a 64 años' => 62.32,
                    'Porcentaje de población de 65 y más años' => 4.63,
                    'Porcentaje de población no especificada' => 0.05,
                    'Fecundidad promedio' => 2.53,
                    'Porcentaje de población con discapacidad' => 9.89
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.71,
                    'Población Económicamente Activa masculina' => 71.22,
                    'Población Económicamente Activa femenina' => 28.78,
                    'Población Ocupada' => 90.49,
                    'Población Ocupada masculina' => 70.40,
                    'Población Ocupada femenina' => 29.60,
                    'Población Desocupada' => 9.51,
                    'Derechohabiencia' => 64.77
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1381,
                    'Ocupación por Vivienda' => 3.96,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 97.09,
                    'Viviendas con Drenaje' => 96.79,
                    'Viviendas con Televisión' => 97.08,
                    'Viviendas con Automóvil' => 40.24,
                    'Viviendas con Computadora' => 17.62
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 166,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 43.98,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 19.28,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 11.45,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 9.04,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 4.22
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
            'Centro latitud'  => 25.498797218206,
            'Centro longitud' => -103.417541407603
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

} // Clase LazaroCardenas

?>
