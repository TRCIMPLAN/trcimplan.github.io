<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LasLuisas
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
 * Clase LasLuisas
 */
class LasLuisas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Las Luisas';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'las-luisas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Las Luisas en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Las Luisas';
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
                    'Población total' => 1738,
                    'Porcentaje de población masculina' => 50.12,
                    'Porcentaje de población femenina' => 49.88,
                    'Porcentaje de población de 0 a 14 años' => 33.03,
                    'Porcentaje de población de 15 a 64 años' => 62.55,
                    'Porcentaje de población de 65 y más años' => 4.41,
                    'Porcentaje de población no especificada' => 0.01,
                    'Fecundidad promedio' => 2.50,
                    'Porcentaje de población con discapacidad' => 12.46
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.97,
                    'Población Económicamente Activa masculina' => 69.45,
                    'Población Económicamente Activa femenina' => 30.55,
                    'Población Ocupada' => 92.18,
                    'Población Ocupada masculina' => 67.70,
                    'Población Ocupada femenina' => 32.30,
                    'Población Desocupada' => 7.82,
                    'Derechohabiencia' => 65.36
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 433,
                    'Ocupación por Vivienda' => 4.01,
                    'Viviendas con Electricidad' => 99.54,
                    'Viviendas con Agua' => 99.54,
                    'Viviendas con Drenaje' => 99.08,
                    'Viviendas con Televisión' => 97.92,
                    'Viviendas con Automóvil' => 41.42,
                    'Viviendas con Computadora' => 21.43
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 53,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 39.62,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 24.53,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 20.75,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 7.55,
                    'Quinta actividad nombre' => 'Financieros y Seguros',
                    'Quinta actividad porcentaje' => 1.89
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
            'Centro latitud'  => 25.4936513231121,
            'Centro longitud' => -103.410103920619
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

} // Clase LasLuisas

?>
