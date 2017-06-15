<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon EjidoLaJoya
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
 * Clase EjidoLaJoya
 */
class EjidoLaJoya extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Ejido La Joya';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'ejido-la-joya';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido La Joya en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Ejido La Joya';
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
                    'Población total' => 3054,
                    'Porcentaje de población masculina' => 47.64,
                    'Porcentaje de población femenina' => 52.36,
                    'Porcentaje de población de 0 a 14 años' => 30.80,
                    'Porcentaje de población de 15 a 64 años' => 62.64,
                    'Porcentaje de población de 65 y más años' => 6.41,
                    'Porcentaje de población no especificada' => 0.15,
                    'Fecundidad promedio' => 2.61,
                    'Porcentaje de población con discapacidad' => 4.40
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 45.43,
                    'Población Económicamente Activa masculina' => 73.39,
                    'Población Económicamente Activa femenina' => 26.61,
                    'Población Ocupada' => 88.78,
                    'Población Ocupada masculina' => 72.86,
                    'Población Ocupada femenina' => 27.14,
                    'Población Desocupada' => 11.22,
                    'Derechohabiencia' => 72.44
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 753,
                    'Ocupación por Vivienda' => 4.06,
                    'Viviendas con Electricidad' => 98.71,
                    'Viviendas con Agua' => 97.25,
                    'Viviendas con Drenaje' => 96.81,
                    'Viviendas con Televisión' => 95.93,
                    'Viviendas con Automóvil' => 47.95,
                    'Viviendas con Computadora' => 48.63
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 66,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 48.48,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 15.15,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 10.61,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 10.61,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 6.06
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
            'Centro latitud'  => 25.5435821191297,
            'Centro longitud' => -103.334089532857
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

} // Clase EjidoLaJoya

?>
