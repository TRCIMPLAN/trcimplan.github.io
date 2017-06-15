<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ExHaciendaLosAngeles
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
 * Clase ExHaciendaLosAngeles
 */
class ExHaciendaLosAngeles extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Ex-Hacienda Los Ángeles';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'ex-hacienda-los-angeles';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ex-Hacienda Los Ángeles en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Ex-Hacienda Los Ángeles';
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
                    'Población total' => 346,
                    'Porcentaje de población masculina' => 52.44,
                    'Porcentaje de población femenina' => 47.56,
                    'Porcentaje de población de 0 a 14 años' => 21.87,
                    'Porcentaje de población de 15 a 64 años' => 73.47,
                    'Porcentaje de población de 65 y más años' => 4.65,
                    'Porcentaje de población no especificada' => 0.01,
                    'Fecundidad promedio' => 1.84,
                    'Porcentaje de población con discapacidad' => 1.52
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.55,
                    'Población Económicamente Activa masculina' => 56.82,
                    'Población Económicamente Activa femenina' => 43.18,
                    'Población Ocupada' => 93.62,
                    'Población Ocupada masculina' => 57.62,
                    'Población Ocupada femenina' => 42.38,
                    'Población Desocupada' => 6.38,
                    'Derechohabiencia' => 86.57
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 94,
                    'Ocupación por Vivienda' => 3.68,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.83,
                    'Viviendas con Automóvil' => 85.92,
                    'Viviendas con Computadora' => 82.16
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 16,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 43.75,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 37.50,
                    'Tercera actividad nombre' => 'Inmobiliarios',
                    'Tercera actividad porcentaje' => 12.50,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 6.25
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
            'Centro latitud'  => 25.529624003059,
            'Centro longitud' => -103.396804493662
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

} // Clase ExHaciendaLosAngeles

?>
