<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ResidencialVictoria
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
 * Clase ResidencialVictoria
 */
class ResidencialVictoria extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Residencial Victoria';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'residencial-victoria';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Victoria en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Residencial Victoria';
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
                    'Población total' => 1111,
                    'Porcentaje de población masculina' => 47.61,
                    'Porcentaje de población femenina' => 52.39,
                    'Porcentaje de población de 0 a 14 años' => 36.45,
                    'Porcentaje de población de 15 a 64 años' => 59.86,
                    'Porcentaje de población de 65 y más años' => 2.07,
                    'Porcentaje de población no especificada' => 1.62,
                    'Fecundidad promedio' => 1.92,
                    'Porcentaje de población con discapacidad' => 3.22
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 61.07,
                    'Población Económicamente Activa masculina' => 61.76,
                    'Población Económicamente Activa femenina' => 38.24,
                    'Población Ocupada' => 89.14,
                    'Población Ocupada masculina' => 61.22,
                    'Población Ocupada femenina' => 38.78,
                    'Población Desocupada' => 10.86,
                    'Derechohabiencia' => 77.32
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 296,
                    'Ocupación por Vivienda' => 3.75,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.66,
                    'Viviendas con Automóvil' => 51.68,
                    'Viviendas con Computadora' => 27.42
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 38,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 31.58,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 28.95,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 10.53,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 5.26,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 5.26
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
            'Centro latitud'  => 25.5469986999726,
            'Centro longitud' => -103.35519979782
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

} // Clase ResidencialVictoria

?>
