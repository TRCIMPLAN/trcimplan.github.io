<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Estrella
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
 * Clase Estrella
 */
class Estrella extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Estrella';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'estrella';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Estrella en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Estrella';
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
                    'Población total' => 3210,
                    'Porcentaje de población masculina' => 46.21,
                    'Porcentaje de población femenina' => 53.79,
                    'Porcentaje de población de 0 a 14 años' => 14.01,
                    'Porcentaje de población de 15 a 64 años' => 69.79,
                    'Porcentaje de población de 65 y más años' => 12.41,
                    'Porcentaje de población no especificada' => 3.79,
                    'Fecundidad promedio' => 1.84,
                    'Porcentaje de población con discapacidad' => 2.34
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.36,
                    'Población Económicamente Activa masculina' => 57.52,
                    'Población Económicamente Activa femenina' => 42.48,
                    'Población Ocupada' => 95.36,
                    'Población Ocupada masculina' => 57.13,
                    'Población Ocupada femenina' => 42.87,
                    'Población Desocupada' => 4.64,
                    'Derechohabiencia' => 73.49
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 923,
                    'Ocupación por Vivienda' => 3.48,
                    'Viviendas con Electricidad' => 99.91,
                    'Viviendas con Agua' => 99.48,
                    'Viviendas con Drenaje' => 99.80,
                    'Viviendas con Televisión' => 99.37,
                    'Viviendas con Automóvil' => 92.14,
                    'Viviendas con Computadora' => 80.39
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 151,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 27.81,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 13.91,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 13.91,
                    'Cuarta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Cuarta actividad porcentaje' => 10.60,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 5.96
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
            'Centro latitud'  => 25.5638194885792,
            'Centro longitud' => -103.422953013424
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

} // Clase Estrella

?>
