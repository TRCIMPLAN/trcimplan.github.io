<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ResidencialElFresno
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
 * Clase ResidencialElFresno
 */
class ResidencialElFresno extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Residencial El Fresno';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'residencial-el-fresno';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial El Fresno en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Residencial El Fresno';
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
                    'Población total' => 1078,
                    'Porcentaje de población masculina' => 46.95,
                    'Porcentaje de población femenina' => 53.05,
                    'Porcentaje de población de 0 a 14 años' => 25.52,
                    'Porcentaje de población de 15 a 64 años' => 68.73,
                    'Porcentaje de población de 65 y más años' => 5.10,
                    'Porcentaje de población no especificada' => 0.65,
                    'Fecundidad promedio' => 1.62,
                    'Porcentaje de población con discapacidad' => 2.91
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.61,
                    'Población Económicamente Activa masculina' => 57.94,
                    'Población Económicamente Activa femenina' => 42.06,
                    'Población Ocupada' => 99.41,
                    'Población Ocupada masculina' => 57.98,
                    'Población Ocupada femenina' => 42.02,
                    'Población Desocupada' => 0.59,
                    'Derechohabiencia' => 86.11
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 282,
                    'Ocupación por Vivienda' => 3.82,
                    'Viviendas con Electricidad' => 99.68,
                    'Viviendas con Agua' => 99.68,
                    'Viviendas con Drenaje' => 99.68,
                    'Viviendas con Televisión' => 99.29,
                    'Viviendas con Automóvil' => 97.94,
                    'Viviendas con Computadora' => 92.79
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 303,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 48.51,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 17.49,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 6.93,
                    'Cuarta actividad nombre' => 'Financieros y Seguros',
                    'Cuarta actividad porcentaje' => 5.61,
                    'Quinta actividad nombre' => 'Manejo de Residuos',
                    'Quinta actividad porcentaje' => 2.97
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
            'Centro latitud'  => 25.5791616280276,
            'Centro longitud' => -103.407762956577
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

} // Clase ResidencialElFresno

?>
