<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillaFlorida
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
 * Clase VillaFlorida
 */
class VillaFlorida extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Villa Florida';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'villa-florida';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villa Florida en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Villa Florida';
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
                    'Población total' => 2636,
                    'Porcentaje de población masculina' => 49.28,
                    'Porcentaje de población femenina' => 50.72,
                    'Porcentaje de población de 0 a 14 años' => 22.53,
                    'Porcentaje de población de 15 a 64 años' => 71.93,
                    'Porcentaje de población de 65 y más años' => 3.83,
                    'Porcentaje de población no especificada' => 1.71,
                    'Fecundidad promedio' => 1.84,
                    'Porcentaje de población con discapacidad' => 4.44
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.99,
                    'Población Económicamente Activa masculina' => 58.80,
                    'Población Económicamente Activa femenina' => 41.20,
                    'Población Ocupada' => 94.32,
                    'Población Ocupada masculina' => 58.06,
                    'Población Ocupada femenina' => 41.94,
                    'Población Desocupada' => 5.68,
                    'Derechohabiencia' => 70.64
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 722,
                    'Ocupación por Vivienda' => 3.65,
                    'Viviendas con Electricidad' => 99.72,
                    'Viviendas con Agua' => 98.89,
                    'Viviendas con Drenaje' => 98.61,
                    'Viviendas con Televisión' => 99.17,
                    'Viviendas con Automóvil' => 71.88,
                    'Viviendas con Computadora' => 60.25
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 53,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 41.51,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 24.53,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 20.75,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 3.77,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 3.77
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
            'Centro latitud'  => 25.5877103409075,
            'Centro longitud' => -103.411096738169
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

} // Clase VillaFlorida

?>
