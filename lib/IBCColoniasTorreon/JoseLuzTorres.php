<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon JoseLuzTorres
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
 * Clase JoseLuzTorres
 */
class JoseLuzTorres extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'José Luz Torres';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'jose-luz-torres';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia José Luz Torres en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, José Luz Torres';
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
                    'Población total' => 3729,
                    'Porcentaje de población masculina' => 49.48,
                    'Porcentaje de población femenina' => 50.52,
                    'Porcentaje de población de 0 a 14 años' => 38.35,
                    'Porcentaje de población de 15 a 64 años' => 59.06,
                    'Porcentaje de población de 65 y más años' => 2.40,
                    'Porcentaje de población no especificada' => 0.19,
                    'Fecundidad promedio' => 2.43,
                    'Porcentaje de población con discapacidad' => 6.29
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.87,
                    'Población Económicamente Activa masculina' => 73.65,
                    'Población Económicamente Activa femenina' => 26.35,
                    'Población Ocupada' => 89.25,
                    'Población Ocupada masculina' => 72.52,
                    'Población Ocupada femenina' => 27.48,
                    'Población Desocupada' => 10.75,
                    'Derechohabiencia' => 59.14
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 875,
                    'Ocupación por Vivienda' => 4.26,
                    'Viviendas con Electricidad' => 99.34,
                    'Viviendas con Agua' => 98.08,
                    'Viviendas con Drenaje' => 95.90,
                    'Viviendas con Televisión' => 96.58,
                    'Viviendas con Automóvil' => 38.04,
                    'Viviendas con Computadora' => 16.86
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 94,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 41.49,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.21,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 12.77,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 12.77,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 4.26
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
            'Centro latitud'  => 25.4997318257941,
            'Centro longitud' => -103.390943381142
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

} // Clase JoseLuzTorres

?>
