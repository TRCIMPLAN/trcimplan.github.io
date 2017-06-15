<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon RinconDeLaJoya
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
 * Clase RinconDeLaJoya
 */
class RinconDeLaJoya extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Rincón de La Joya';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'rincon-de-la-joya';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Rincón de La Joya en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Rincón de La Joya';
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
                    'Población total' => 153,
                    'Porcentaje de población masculina' => 50.32,
                    'Porcentaje de población femenina' => 49.68,
                    'Porcentaje de población de 0 a 14 años' => 38.93,
                    'Porcentaje de población de 15 a 64 años' => 60.37,
                    'Porcentaje de población de 65 y más años' => 0.68,
                    'Porcentaje de población no especificada' => 0.02,
                    'Fecundidad promedio' => 1.94,
                    'Porcentaje de población con discapacidad' => 4.60
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.70,
                    'Población Económicamente Activa masculina' => 67.67,
                    'Población Económicamente Activa femenina' => 32.33,
                    'Población Ocupada' => 93.15,
                    'Población Ocupada masculina' => 67.15,
                    'Población Ocupada femenina' => 32.85,
                    'Población Desocupada' => 6.85,
                    'Derechohabiencia' => 64.40
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 44,
                    'Ocupación por Vivienda' => 3.48,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 34.33,
                    'Viviendas con Computadora' => 30.39
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 10,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 30.00,
                    'Tercera actividad nombre' => 'Inmobiliarios',
                    'Tercera actividad porcentaje' => 10.00,
                    'Cuarta actividad nombre' => 'Manejo de Residuos',
                    'Cuarta actividad porcentaje' => 10.00
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
            'Centro latitud'  => 25.5510476315806,
            'Centro longitud' => -103.316316189485
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

} // Clase RinconDeLaJoya

?>
