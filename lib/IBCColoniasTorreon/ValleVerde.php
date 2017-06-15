<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ValleVerde
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
 * Clase ValleVerde
 */
class ValleVerde extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Valle Verde';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'valle-verde';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Valle Verde en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Valle Verde';
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
                    'Población total' => 1080,
                    'Porcentaje de población masculina' => 50.37,
                    'Porcentaje de población femenina' => 49.63,
                    'Porcentaje de población de 0 a 14 años' => 16.61,
                    'Porcentaje de población de 15 a 64 años' => 66.60,
                    'Porcentaje de población de 65 y más años' => 7.00,
                    'Porcentaje de población no especificada' => 9.79,
                    'Fecundidad promedio' => 2.04,
                    'Porcentaje de población con discapacidad' => 3.96
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.43,
                    'Población Económicamente Activa masculina' => 62.32,
                    'Población Económicamente Activa femenina' => 37.68,
                    'Población Ocupada' => 94.67,
                    'Población Ocupada masculina' => 62.09,
                    'Población Ocupada femenina' => 37.91,
                    'Población Desocupada' => 5.33,
                    'Derechohabiencia' => 75.19
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 287,
                    'Ocupación por Vivienda' => 3.76,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.30,
                    'Viviendas con Automóvil' => 64.75,
                    'Viviendas con Computadora' => 50.37
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 25,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 48.00,
                    'Segunda actividad nombre' => 'Educativos',
                    'Segunda actividad porcentaje' => 16.00,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 8.00,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 8.00,
                    'Quinta actividad nombre' => 'Financieros y Seguros',
                    'Quinta actividad porcentaje' => 4.00
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
            'Centro latitud'  => 25.5506621932214,
            'Centro longitud' => -103.371424050875
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

} // Clase ValleVerde

?>
