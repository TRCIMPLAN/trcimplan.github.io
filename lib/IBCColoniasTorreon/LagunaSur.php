<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LagunaSur
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
 * Clase LagunaSur
 */
class LagunaSur extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Laguna Sur';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'laguna-sur';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Laguna Sur en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Laguna Sur';
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
                    'Población total' => 2361,
                    'Porcentaje de población masculina' => 50.30,
                    'Porcentaje de población femenina' => 49.70,
                    'Porcentaje de población de 0 a 14 años' => 34.21,
                    'Porcentaje de población de 15 a 64 años' => 61.58,
                    'Porcentaje de población de 65 y más años' => 3.56,
                    'Porcentaje de población no especificada' => 0.65,
                    'Fecundidad promedio' => 2.29,
                    'Porcentaje de población con discapacidad' => 3.21
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.75,
                    'Población Económicamente Activa masculina' => 73.14,
                    'Población Económicamente Activa femenina' => 26.86,
                    'Población Ocupada' => 91.94,
                    'Población Ocupada masculina' => 72.76,
                    'Población Ocupada femenina' => 27.24,
                    'Población Desocupada' => 8.06,
                    'Derechohabiencia' => 61.32
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 577,
                    'Ocupación por Vivienda' => 4.09,
                    'Viviendas con Electricidad' => 99.44,
                    'Viviendas con Agua' => 98.71,
                    'Viviendas con Drenaje' => 97.80,
                    'Viviendas con Televisión' => 96.97,
                    'Viviendas con Automóvil' => 40.21,
                    'Viviendas con Computadora' => 17.56
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 93,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 36.56,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 26.88,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 15.05,
                    'Cuarta actividad nombre' => 'Comercio Mayoreo',
                    'Cuarta actividad porcentaje' => 7.53,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 5.38
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
            'Centro latitud'  => 25.5793096247487,
            'Centro longitud' => -103.421682339786
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

} // Clase LagunaSur

?>
