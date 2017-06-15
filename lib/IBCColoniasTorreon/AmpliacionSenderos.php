<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon AmpliacionSenderos
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
 * Clase AmpliacionSenderos
 */
class AmpliacionSenderos extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Ampliación Senderos';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'ampliacion-senderos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ampliación Senderos en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Ampliación Senderos';
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
                    'Población total' => 125,
                    'Porcentaje de población masculina' => 45.46,
                    'Porcentaje de población femenina' => 54.54,
                    'Porcentaje de población de 0 a 14 años' => 25.70,
                    'Porcentaje de población de 15 a 64 años' => 54.19,
                    'Porcentaje de población de 65 y más años' => 3.27,
                    'Porcentaje de población no especificada' => 16.84,
                    'Fecundidad promedio' => 1.60,
                    'Porcentaje de población con discapacidad' => 1.56
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 72.72,
                    'Población Económicamente Activa masculina' => 56.20,
                    'Población Económicamente Activa femenina' => 43.80,
                    'Población Ocupada' => 99.83,
                    'Población Ocupada masculina' => 56.15,
                    'Población Ocupada femenina' => 43.85,
                    'Población Desocupada' => 0.17,
                    'Derechohabiencia' => 70.46
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 35,
                    'Ocupación por Vivienda' => 3.57,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 93.79,
                    'Viviendas con Computadora' => 79.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 5,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.00,
                    'Segunda actividad nombre' => 'Salud',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 20.00,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 20.00
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
            'Centro latitud'  => 25.6238283941224,
            'Centro longitud' => -103.380073111399
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

} // Clase AmpliacionSenderos

?>
