<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ResidencialTecnologico
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
 * Clase ResidencialTecnologico
 */
class ResidencialTecnologico extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Residencial Tecnológico';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'residencial-tecnologico';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Tecnológico en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Residencial Tecnológico';
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
                    'Población total' => 92,
                    'Porcentaje de población masculina' => 41.30,
                    'Porcentaje de población femenina' => 58.70,
                    'Porcentaje de población de 0 a 14 años' => 16.30,
                    'Porcentaje de población de 15 a 64 años' => 81.52,
                    'Porcentaje de población de 65 y más años' => 2.17,
                    'Porcentaje de población no especificada' => 0.01,
                    'Fecundidad promedio' => 1.38,
                    'Porcentaje de población con discapacidad' => 0.00
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.00,
                    'Población Económicamente Activa masculina' => 56.10,
                    'Población Económicamente Activa femenina' => 43.90,
                    'Población Ocupada' => 100.00,
                    'Población Ocupada masculina' => 56.10,
                    'Población Ocupada femenina' => 43.90,
                    'Población Desocupada' => 0.00,
                    'Derechohabiencia' => 84.78
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 24,
                    'Ocupación por Vivienda' => 3.83,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 95.83,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 100.00,
                    'Viviendas con Computadora' => 91.67
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 102,
                    'Primer actividad nombre' => 'Salud',
                    'Primer actividad porcentaje' => 58.82,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 22.55,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 11.76,
                    'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Cuarta actividad porcentaje' => 1.96,
                    'Quinta actividad nombre' => 'Información Medios Masivos',
                    'Quinta actividad porcentaje' => 0.98
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
            'Centro latitud'  => 25.5161428849734,
            'Centro longitud' => -103.395129685295
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

} // Clase ResidencialTecnologico

?>
