<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon EjidoSanAntonioDeLosBravos
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
 * Clase EjidoSanAntonioDeLosBravos
 */
class EjidoSanAntonioDeLosBravos extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Ejido San Antonio de Los Bravos';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'ejido-san-antonio-de-los-bravos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido San Antonio de Los Bravos en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Ejido San Antonio de Los Bravos';
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
                    'Población total' => 2428,
                    'Porcentaje de población masculina' => 48.64,
                    'Porcentaje de población femenina' => 51.36,
                    'Porcentaje de población de 0 a 14 años' => 28.28,
                    'Porcentaje de población de 15 a 64 años' => 66.23,
                    'Porcentaje de población de 65 y más años' => 5.48,
                    'Porcentaje de población no especificada' => 0.01,
                    'Fecundidad promedio' => 2.37,
                    'Porcentaje de población con discapacidad' => 7.51
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.55,
                    'Población Económicamente Activa masculina' => 66.81,
                    'Población Económicamente Activa femenina' => 33.19,
                    'Población Ocupada' => 88.53,
                    'Población Ocupada masculina' => 64.39,
                    'Población Ocupada femenina' => 35.61,
                    'Población Desocupada' => 11.47,
                    'Derechohabiencia' => 75.70
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 590,
                    'Ocupación por Vivienda' => 4.12,
                    'Viviendas con Electricidad' => 99.55,
                    'Viviendas con Agua' => 99.55,
                    'Viviendas con Drenaje' => 97.68,
                    'Viviendas con Televisión' => 98.69,
                    'Viviendas con Automóvil' => 44.13,
                    'Viviendas con Computadora' => 31.06
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 31,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 48.39,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 16.13,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 9.68,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 6.45,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 6.45
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
            'Centro latitud'  => 25.552791628889,
            'Centro longitud' => -103.38255814488
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

} // Clase EjidoSanAntonioDeLosBravos

?>
