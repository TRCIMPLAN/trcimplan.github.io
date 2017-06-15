<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VistaHermosa
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
 * Clase VistaHermosa
 */
class VistaHermosa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Vista Hermosa';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'vista-hermosa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Vista Hermosa en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Vista Hermosa';
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
                    'Población total' => 641,
                    'Porcentaje de población masculina' => 51.57,
                    'Porcentaje de población femenina' => 48.43,
                    'Porcentaje de población de 0 a 14 años' => 30.13,
                    'Porcentaje de población de 15 a 64 años' => 63.56,
                    'Porcentaje de población de 65 y más años' => 6.31,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.79,
                    'Porcentaje de población con discapacidad' => 5.95
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.72,
                    'Población Económicamente Activa masculina' => 73.66,
                    'Población Económicamente Activa femenina' => 26.34,
                    'Población Ocupada' => 96.87,
                    'Población Ocupada masculina' => 73.23,
                    'Población Ocupada femenina' => 26.77,
                    'Población Desocupada' => 3.13,
                    'Derechohabiencia' => 59.95
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 158,
                    'Ocupación por Vivienda' => 4.06,
                    'Viviendas con Electricidad' => 99.83,
                    'Viviendas con Agua' => 94.71,
                    'Viviendas con Drenaje' => 94.08,
                    'Viviendas con Televisión' => 97.91,
                    'Viviendas con Automóvil' => 20.77,
                    'Viviendas con Computadora' => 10.86
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 9,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 55.56,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 22.22,
                    'Tercera actividad nombre' => 'Gubernamentales',
                    'Tercera actividad porcentaje' => 11.11,
                    'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Cuarta actividad porcentaje' => 11.11
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
            'Centro latitud'  => 25.5406909451365,
            'Centro longitud' => -103.483033523336
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

} // Clase VistaHermosa

?>
