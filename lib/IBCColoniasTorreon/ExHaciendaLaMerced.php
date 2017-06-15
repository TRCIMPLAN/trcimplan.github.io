<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ExHaciendaLaMerced
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
 * Clase ExHaciendaLaMerced
 */
class ExHaciendaLaMerced extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Ex-Hacienda La Merced';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'ex-hacienda-la-merced';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ex-Hacienda La Merced en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Ex-Hacienda La Merced';
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
                    'Población total' => 86,
                    'Porcentaje de población masculina' => 42.90,
                    'Porcentaje de población femenina' => 57.10,
                    'Porcentaje de población de 0 a 14 años' => 21.22,
                    'Porcentaje de población de 15 a 64 años' => 63.19,
                    'Porcentaje de población de 65 y más años' => 15.58,
                    'Porcentaje de población no especificada' => 0.01,
                    'Fecundidad promedio' => 3.02,
                    'Porcentaje de población con discapacidad' => 6.96
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.83,
                    'Población Económicamente Activa masculina' => 66.15,
                    'Población Económicamente Activa femenina' => 33.85,
                    'Población Ocupada' => 83.52,
                    'Población Ocupada masculina' => 67.14,
                    'Población Ocupada femenina' => 32.86,
                    'Población Desocupada' => 16.48,
                    'Derechohabiencia' => 70.54
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 25,
                    'Ocupación por Vivienda' => 3.44,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 52.72,
                    'Viviendas con Computadora' => 48.34
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 11,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 54.55,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 18.18,
                    'Tercera actividad nombre' => 'Gubernamentales',
                    'Tercera actividad porcentaje' => 9.09,
                    'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Cuarta actividad porcentaje' => 9.09,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 9.09
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
            'Centro latitud'  => 25.5336692060095,
            'Centro longitud' => -103.385025713579
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

} // Clase ExHaciendaLaMerced

?>
