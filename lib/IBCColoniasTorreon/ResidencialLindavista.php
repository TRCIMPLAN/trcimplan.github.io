<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ResidencialLindavista
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
 * Clase ResidencialLindavista
 */
class ResidencialLindavista extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Residencial Lindavista';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'residencial-lindavista';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Lindavista en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Residencial Lindavista';
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
                    'Población total' => 32,
                    'Porcentaje de población masculina' => 46.88,
                    'Porcentaje de población femenina' => 53.12,
                    'Porcentaje de población de 0 a 14 años' => 21.88,
                    'Porcentaje de población de 15 a 64 años' => 78.12,
                    'Porcentaje de población de 65 y más años' => 0.00,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.64,
                    'Porcentaje de población con discapacidad' => 0.00
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.00,
                    'Población Económicamente Activa masculina' => 61.54,
                    'Población Económicamente Activa femenina' => 38.46,
                    'Población Ocupada' => 100.00,
                    'Población Ocupada masculina' => 61.54,
                    'Población Ocupada femenina' => 38.46,
                    'Población Desocupada' => 0.00,
                    'Derechohabiencia' => 81.25
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 8,
                    'Ocupación por Vivienda' => 4.00,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 100.00,
                    'Viviendas con Computadora' => 100.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 0
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
            'Centro latitud'  => 25.5214247285112,
            'Centro longitud' => -103.379108277052
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

} // Clase ResidencialLindavista

?>
