<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon JoyasDelOriente
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
 * Clase JoyasDelOriente
 */
class JoyasDelOriente extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Joyas del Oriente';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'joyas-del-oriente';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Joyas del Oriente en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Joyas del Oriente';
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
                    'Población total' => 3037,
                    'Porcentaje de población masculina' => 49.98,
                    'Porcentaje de población femenina' => 50.02,
                    'Porcentaje de población de 0 a 14 años' => 35.78,
                    'Porcentaje de población de 15 a 64 años' => 61.98,
                    'Porcentaje de población de 65 y más años' => 1.15,
                    'Porcentaje de población no especificada' => 1.09,
                    'Fecundidad promedio' => 1.88,
                    'Porcentaje de población con discapacidad' => 2.20
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 59.76,
                    'Población Económicamente Activa masculina' => 66.37,
                    'Población Económicamente Activa femenina' => 33.63,
                    'Población Ocupada' => 92.95,
                    'Población Ocupada masculina' => 65.37,
                    'Población Ocupada femenina' => 34.63,
                    'Población Desocupada' => 7.05,
                    'Derechohabiencia' => 74.83
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 820,
                    'Ocupación por Vivienda' => 3.70,
                    'Viviendas con Electricidad' => 99.95,
                    'Viviendas con Agua' => 99.82,
                    'Viviendas con Drenaje' => 99.58,
                    'Viviendas con Televisión' => 99.09,
                    'Viviendas con Automóvil' => 54.31,
                    'Viviendas con Computadora' => 31.45
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 59,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 44.07,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 18.64,
                    'Tercera actividad nombre' => 'Manejo de Residuos',
                    'Tercera actividad porcentaje' => 8.47,
                    'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Cuarta actividad porcentaje' => 8.47,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 6.78
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
            'Centro latitud'  => 25.5458067132118,
            'Centro longitud' => -103.328463170428
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

} // Clase JoyasDelOriente

?>
