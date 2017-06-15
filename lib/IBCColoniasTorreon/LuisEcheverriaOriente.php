<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LuisEcheverriaOriente
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
 * Clase LuisEcheverriaOriente
 */
class LuisEcheverriaOriente extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Luis Echeverría Oriente';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'luis-echeverria-oriente';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Luis Echeverría Oriente en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Luis Echeverría Oriente';
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
                    'Población total' => 1027,
                    'Porcentaje de población masculina' => 47.32,
                    'Porcentaje de población femenina' => 52.68,
                    'Porcentaje de población de 0 a 14 años' => 21.13,
                    'Porcentaje de población de 15 a 64 años' => 68.84,
                    'Porcentaje de población de 65 y más años' => 9.74,
                    'Porcentaje de población no especificada' => 0.29,
                    'Fecundidad promedio' => 2.29,
                    'Porcentaje de población con discapacidad' => 5.22
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.77,
                    'Población Económicamente Activa masculina' => 61.16,
                    'Población Económicamente Activa femenina' => 38.84,
                    'Población Ocupada' => 88.15,
                    'Población Ocupada masculina' => 61.00,
                    'Población Ocupada femenina' => 39.00,
                    'Población Desocupada' => 11.85,
                    'Derechohabiencia' => 75.07
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 273,
                    'Ocupación por Vivienda' => 3.76,
                    'Viviendas con Electricidad' => 99.27,
                    'Viviendas con Agua' => 99.27,
                    'Viviendas con Drenaje' => 99.27,
                    'Viviendas con Televisión' => 97.07,
                    'Viviendas con Automóvil' => 53.11,
                    'Viviendas con Computadora' => 41.03
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 54,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 31.48,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 14.81,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 12.96,
                    'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Cuarta actividad porcentaje' => 11.11,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 11.11
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
            'Centro latitud'  => 25.5291463608231,
            'Centro longitud' => -103.439873935976
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

} // Clase LuisEcheverriaOriente

?>
