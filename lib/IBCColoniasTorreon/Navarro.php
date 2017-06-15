<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Navarro
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
 * Clase Navarro
 */
class Navarro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Navarro';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'navarro';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Navarro en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Navarro';
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
                    'Población total' => 1613,
                    'Porcentaje de población masculina' => 43.67,
                    'Porcentaje de población femenina' => 56.33,
                    'Porcentaje de población de 0 a 14 años' => 12.28,
                    'Porcentaje de población de 15 a 64 años' => 68.30,
                    'Porcentaje de población de 65 y más años' => 15.82,
                    'Porcentaje de población no especificada' => 3.60,
                    'Fecundidad promedio' => 1.92,
                    'Porcentaje de población con discapacidad' => 3.31
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.85,
                    'Población Económicamente Activa masculina' => 57.06,
                    'Población Económicamente Activa femenina' => 42.94,
                    'Población Ocupada' => 93.03,
                    'Población Ocupada masculina' => 57.18,
                    'Población Ocupada femenina' => 42.82,
                    'Población Desocupada' => 6.97,
                    'Derechohabiencia' => 73.82
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 458,
                    'Ocupación por Vivienda' => 3.52,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.84,
                    'Viviendas con Drenaje' => 99.84,
                    'Viviendas con Televisión' => 99.62,
                    'Viviendas con Automóvil' => 87.60,
                    'Viviendas con Computadora' => 76.43
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 251,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 43.03,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 17.13,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 7.17,
                    'Cuarta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Cuarta actividad porcentaje' => 6.77,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 4.38
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
            'Centro latitud'  => 25.5612915636397,
            'Centro longitud' => -103.429131923391
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

} // Clase Navarro

?>
