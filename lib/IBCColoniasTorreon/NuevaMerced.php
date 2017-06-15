<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon NuevaMerced
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
 * Clase NuevaMerced
 */
class NuevaMerced extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Nueva Merced';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'nueva-merced';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Nueva Merced en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Nueva Merced';
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
                    'Población total' => 1479,
                    'Porcentaje de población masculina' => 49.63,
                    'Porcentaje de población femenina' => 50.37,
                    'Porcentaje de población de 0 a 14 años' => 33.91,
                    'Porcentaje de población de 15 a 64 años' => 62.47,
                    'Porcentaje de población de 65 y más años' => 3.41,
                    'Porcentaje de población no especificada' => 0.21,
                    'Fecundidad promedio' => 2.43,
                    'Porcentaje de población con discapacidad' => 3.82
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.71,
                    'Población Económicamente Activa masculina' => 78.43,
                    'Población Económicamente Activa femenina' => 21.57,
                    'Población Ocupada' => 91.94,
                    'Población Ocupada masculina' => 77.50,
                    'Población Ocupada femenina' => 22.50,
                    'Población Desocupada' => 8.06,
                    'Derechohabiencia' => 49.42
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 352,
                    'Ocupación por Vivienda' => 4.20,
                    'Viviendas con Electricidad' => 99.52,
                    'Viviendas con Agua' => 98.09,
                    'Viviendas con Drenaje' => 98.66,
                    'Viviendas con Televisión' => 98.38,
                    'Viviendas con Automóvil' => 36.49,
                    'Viviendas con Computadora' => 15.87
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 42,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 52.38,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 14.29,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 11.90,
                    'Cuarta actividad nombre' => 'Comercio Mayoreo',
                    'Cuarta actividad porcentaje' => 9.52,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 7.14
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
            'Centro latitud'  => 25.497011117997,
            'Centro longitud' => -103.393788242767
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

} // Clase NuevaMerced

?>
