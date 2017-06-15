<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon SolDeOriente3Etapa
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
 * Clase SolDeOriente3Etapa
 */
class SolDeOriente3Etapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Sol de Oriente 3° Etapa';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'sol-de-oriente-3-etapa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Sol de Oriente 3° Etapa en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Sol de Oriente 3° Etapa';
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
                    'Población total' => 906,
                    'Porcentaje de población masculina' => 49.12,
                    'Porcentaje de población femenina' => 50.88,
                    'Porcentaje de población de 0 a 14 años' => 34.88,
                    'Porcentaje de población de 15 a 64 años' => 63.36,
                    'Porcentaje de población de 65 y más años' => 1.43,
                    'Porcentaje de población no especificada' => 0.33,
                    'Fecundidad promedio' => 1.60,
                    'Porcentaje de población con discapacidad' => 1.80
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 62.56,
                    'Población Económicamente Activa masculina' => 59.34,
                    'Población Económicamente Activa femenina' => 40.66,
                    'Población Ocupada' => 95.74,
                    'Población Ocupada masculina' => 60.00,
                    'Población Ocupada femenina' => 40.00,
                    'Población Desocupada' => 4.26,
                    'Derechohabiencia' => 83.89
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 258,
                    'Ocupación por Vivienda' => 3.51,
                    'Viviendas con Electricidad' => 98.84,
                    'Viviendas con Agua' => 99.22,
                    'Viviendas con Drenaje' => 99.22,
                    'Viviendas con Televisión' => 98.45,
                    'Viviendas con Automóvil' => 75.97,
                    'Viviendas con Computadora' => 52.33
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 13,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 53.85,
                    'Segunda actividad nombre' => 'Financieros y Seguros',
                    'Segunda actividad porcentaje' => 23.08,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 7.69,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 7.69,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 7.69
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
            'Centro latitud'  => 25.5381718833565,
            'Centro longitud' => -103.327554195822
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

} // Clase SolDeOriente3Etapa

?>
