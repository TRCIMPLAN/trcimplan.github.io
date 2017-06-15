<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LomaRealIi
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
 * Clase LomaRealIi
 */
class LomaRealIi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Loma Real II';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'loma-real-ii';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Loma Real II en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Loma Real II';
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
                    'Población total' => 1981,
                    'Porcentaje de población masculina' => 48.38,
                    'Porcentaje de población femenina' => 51.62,
                    'Porcentaje de población de 0 a 14 años' => 34.35,
                    'Porcentaje de población de 15 a 64 años' => 63.22,
                    'Porcentaje de población de 65 y más años' => 2.13,
                    'Porcentaje de población no especificada' => 0.30,
                    'Fecundidad promedio' => 1.87,
                    'Porcentaje de población con discapacidad' => 1.33
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 61.38,
                    'Población Económicamente Activa masculina' => 66.75,
                    'Población Económicamente Activa femenina' => 33.25,
                    'Población Ocupada' => 88.67,
                    'Población Ocupada masculina' => 65.58,
                    'Población Ocupada femenina' => 34.42,
                    'Población Desocupada' => 11.33,
                    'Derechohabiencia' => 73.89
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 557,
                    'Ocupación por Vivienda' => 3.56,
                    'Viviendas con Electricidad' => 99.72,
                    'Viviendas con Agua' => 99.72,
                    'Viviendas con Drenaje' => 99.72,
                    'Viviendas con Televisión' => 97.74,
                    'Viviendas con Automóvil' => 38.70,
                    'Viviendas con Computadora' => 21.55
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 51,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 62.75,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 15.69,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 13.73,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 3.92,
                    'Quinta actividad nombre' => 'Manejo de Residuos',
                    'Quinta actividad porcentaje' => 1.96
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
            'Centro latitud'  => 25.5475517028507,
            'Centro longitud' => -103.339253764972
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

} // Clase LomaRealIi

?>
