<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon SantaMaria
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
 * Clase SantaMaria
 */
class SantaMaria extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Santa María';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'santa-maria';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Santa María en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Santa María';
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
                    'Población total' => 1314,
                    'Porcentaje de población masculina' => 47.64,
                    'Porcentaje de población femenina' => 52.36,
                    'Porcentaje de población de 0 a 14 años' => 24.09,
                    'Porcentaje de población de 15 a 64 años' => 66.04,
                    'Porcentaje de población de 65 y más años' => 9.79,
                    'Porcentaje de población no especificada' => 0.08,
                    'Fecundidad promedio' => 2.40,
                    'Porcentaje de población con discapacidad' => 9.23
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 45.75,
                    'Población Económicamente Activa masculina' => 62.40,
                    'Población Económicamente Activa femenina' => 37.60,
                    'Población Ocupada' => 98.53,
                    'Población Ocupada masculina' => 62.05,
                    'Población Ocupada femenina' => 37.95,
                    'Población Desocupada' => 1.47,
                    'Derechohabiencia' => 71.23
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 363,
                    'Ocupación por Vivienda' => 3.62,
                    'Viviendas con Electricidad' => 99.17,
                    'Viviendas con Agua' => 98.90,
                    'Viviendas con Drenaje' => 99.45,
                    'Viviendas con Televisión' => 99.17,
                    'Viviendas con Automóvil' => 48.08,
                    'Viviendas con Computadora' => 33.02
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 393,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.46,
                    'Segunda actividad nombre' => 'Comercio Mayoreo',
                    'Segunda actividad porcentaje' => 30.53,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 8.14,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 7.38,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 6.11
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
            'Centro latitud'  => 25.5562943710177,
            'Centro longitud' => -103.426640888459
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

} // Clase SantaMaria

?>
