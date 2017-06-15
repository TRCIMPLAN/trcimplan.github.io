<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Amistad
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
 * Clase Amistad
 */
class Amistad extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Amistad';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'amistad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Amistad en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Amistad';
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
                    'Población total' => 4466,
                    'Porcentaje de población masculina' => 49.31,
                    'Porcentaje de población femenina' => 50.69,
                    'Porcentaje de población de 0 a 14 años' => 34.62,
                    'Porcentaje de población de 15 a 64 años' => 62.32,
                    'Porcentaje de población de 65 y más años' => 1.39,
                    'Porcentaje de población no especificada' => 1.67,
                    'Fecundidad promedio' => 1.68,
                    'Porcentaje de población con discapacidad' => 3.80
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.75,
                    'Población Económicamente Activa masculina' => 60.82,
                    'Población Económicamente Activa femenina' => 39.18,
                    'Población Ocupada' => 93.09,
                    'Población Ocupada masculina' => 60.72,
                    'Población Ocupada femenina' => 39.28,
                    'Población Desocupada' => 6.91,
                    'Derechohabiencia' => 78.55
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1268,
                    'Ocupación por Vivienda' => 3.52,
                    'Viviendas con Electricidad' => 99.87,
                    'Viviendas con Agua' => 99.87,
                    'Viviendas con Drenaje' => 99.95,
                    'Viviendas con Televisión' => 99.48,
                    'Viviendas con Automóvil' => 57.38,
                    'Viviendas con Computadora' => 40.94
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 57,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.88,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 14.04,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 14.04,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 5.26,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 3.51
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
            'Centro latitud'  => 25.5528973500356,
            'Centro longitud' => -103.361215564305
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

} // Clase Amistad

?>
