<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon AviacionSanIgnacio2Etapa
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
 * Clase AviacionSanIgnacio2Etapa
 */
class AviacionSanIgnacio2Etapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Aviación San Ignacio 2° Etapa';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'aviacion-san-ignacio-2-etapa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Aviación San Ignacio 2° Etapa en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Aviación San Ignacio 2° Etapa';
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
                    'Población total' => 302,
                    'Porcentaje de población masculina' => 52.98,
                    'Porcentaje de población femenina' => 47.02,
                    'Porcentaje de población de 0 a 14 años' => 40.07,
                    'Porcentaje de población de 15 a 64 años' => 58.61,
                    'Porcentaje de población de 65 y más años' => 0.33,
                    'Porcentaje de población no especificada' => 0.99,
                    'Fecundidad promedio' => 1.70,
                    'Porcentaje de población con discapacidad' => 1.30
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.04,
                    'Población Económicamente Activa masculina' => 69.16,
                    'Población Económicamente Activa femenina' => 30.84,
                    'Población Ocupada' => 95.11,
                    'Población Ocupada masculina' => 67.65,
                    'Población Ocupada femenina' => 32.35,
                    'Población Desocupada' => 4.89,
                    'Derechohabiencia' => 77.48
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 80,
                    'Ocupación por Vivienda' => 3.78,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 72.50,
                    'Viviendas con Computadora' => 54.29
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
            'Centro latitud'  => 25.5641368160378,
            'Centro longitud' => -103.390990311822
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

} // Clase AviacionSanIgnacio2Etapa

?>
