<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon SantaElena
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
 * Clase SantaElena
 */
class SantaElena extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Santa Elena';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'santa-elena';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Santa Elena en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Santa Elena';
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
                    'Población total' => 989,
                    'Porcentaje de población masculina' => 49.75,
                    'Porcentaje de población femenina' => 50.25,
                    'Porcentaje de población de 0 a 14 años' => 28.01,
                    'Porcentaje de población de 15 a 64 años' => 66.33,
                    'Porcentaje de población de 65 y más años' => 3.74,
                    'Porcentaje de población no especificada' => 1.92,
                    'Fecundidad promedio' => 1.64,
                    'Porcentaje de población con discapacidad' => 1.15
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.09,
                    'Población Económicamente Activa masculina' => 55.92,
                    'Población Económicamente Activa femenina' => 44.08,
                    'Población Ocupada' => 97.08,
                    'Población Ocupada masculina' => 55.37,
                    'Población Ocupada femenina' => 44.63,
                    'Población Desocupada' => 2.92,
                    'Derechohabiencia' => 81.19
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 263,
                    'Ocupación por Vivienda' => 3.76,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.62,
                    'Viviendas con Automóvil' => 91.63,
                    'Viviendas con Computadora' => 82.51
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 34,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 35.29,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 23.53,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 8.82,
                    'Cuarta actividad nombre' => 'Manejo de Residuos',
                    'Cuarta actividad porcentaje' => 5.88,
                    'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Quinta actividad porcentaje' => 5.88
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
            'Centro latitud'  => 25.513447608679,
            'Centro longitud' => -103.391617566984
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

} // Clase SantaElena

?>
