<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon EugenioAguirreBenavides
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
 * Clase EugenioAguirreBenavides
 */
class EugenioAguirreBenavides extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Eugenio Aguirre Benavides';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'eugenio-aguirre-benavides';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Eugenio Aguirre Benavides en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Eugenio Aguirre Benavides';
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
                    'Población total' => 1846,
                    'Porcentaje de población masculina' => 47.51,
                    'Porcentaje de población femenina' => 52.49,
                    'Porcentaje de población de 0 a 14 años' => 23.51,
                    'Porcentaje de población de 15 a 64 años' => 62.35,
                    'Porcentaje de población de 65 y más años' => 9.43,
                    'Porcentaje de población no especificada' => 4.71,
                    'Fecundidad promedio' => 2.26,
                    'Porcentaje de población con discapacidad' => 4.24
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.28,
                    'Población Económicamente Activa masculina' => 62.62,
                    'Población Económicamente Activa femenina' => 37.38,
                    'Población Ocupada' => 94.55,
                    'Población Ocupada masculina' => 61.15,
                    'Población Ocupada femenina' => 38.85,
                    'Población Desocupada' => 5.45,
                    'Derechohabiencia' => 60.35
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 457,
                    'Ocupación por Vivienda' => 4.04,
                    'Viviendas con Electricidad' => 99.78,
                    'Viviendas con Agua' => 99.56,
                    'Viviendas con Drenaje' => 99.12,
                    'Viviendas con Televisión' => 99.56,
                    'Viviendas con Automóvil' => 48.16,
                    'Viviendas con Computadora' => 33.05
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 67,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 34.33,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 26.87,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 11.94,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 8.96,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 4.48
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
            'Centro latitud'  => 25.5516630267943,
            'Centro longitud' => -103.458480314356
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

} // Clase EugenioAguirreBenavides

?>
