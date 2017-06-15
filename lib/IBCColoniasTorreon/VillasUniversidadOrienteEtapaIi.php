<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillasUniversidadOrienteEtapaIi
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
 * Clase VillasUniversidadOrienteEtapaIi
 */
class VillasUniversidadOrienteEtapaIi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Villas Universidad Oriente Etapa II';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'villas-universidad-oriente-etapa-ii';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas Universidad Oriente Etapa II en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Villas Universidad Oriente Etapa II';
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
                    'Población total' => 176,
                    'Porcentaje de población masculina' => 51.14,
                    'Porcentaje de población femenina' => 48.86,
                    'Porcentaje de población de 0 a 14 años' => 32.95,
                    'Porcentaje de población de 15 a 64 años' => 66.48,
                    'Porcentaje de población de 65 y más años' => 0.57,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.71,
                    'Porcentaje de población con discapacidad' => 2.81
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 68.60,
                    'Población Económicamente Activa masculina' => 68.67,
                    'Población Económicamente Activa femenina' => 31.33,
                    'Población Ocupada' => 85.03,
                    'Población Ocupada masculina' => 68.06,
                    'Población Ocupada femenina' => 31.94,
                    'Población Desocupada' => 14.97,
                    'Derechohabiencia' => 90.34
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 53,
                    'Ocupación por Vivienda' => 3.32,
                    'Viviendas con Electricidad' => 98.11,
                    'Viviendas con Agua' => 98.11,
                    'Viviendas con Drenaje' => 98.11,
                    'Viviendas con Televisión' => 98.11,
                    'Viviendas con Automóvil' => 67.92,
                    'Viviendas con Computadora' => 30.19
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 11,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 63.64,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 18.18,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 18.18
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
            'Centro latitud'  => 25.5475273956684,
            'Centro longitud' => -103.317769477547
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

} // Clase VillasUniversidadOrienteEtapaIi

?>
