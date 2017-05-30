<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon AngelesResidencialRinconAurora
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
 * Clase AngelesResidencialRinconAurora
 */
class AngelesResidencialRinconAurora extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Angeles Residencial - Rincón Aurora';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'angeles-residencial-rincon-aurora';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Angeles Residencial - Rincón Aurora en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Angeles Residencial - Rincón Aurora';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Indicadores Básicos de Colonias > Colonias de Torreón';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = FALSE;
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
                    'Población total' => 438,
                    'Porcentaje de población masculina' => 47.95,
                    'Porcentaje de población femenina' => 52.05,
                    'Porcentaje de población de 0 a 14 años' => 20.78,
                    'Porcentaje de población de 15 a 64 años' => 74.66,
                    'Porcentaje de población de 65 y más años' => 1.83,
                    'Porcentaje de población no especificada' => 2.73,
                    'Fecundidad promedio' => 1.45,
                    'Porcentaje de población con discapacidad' => 1.40
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.02,
                    'Población Económicamente Activa masculina' => 50.25,
                    'Población Económicamente Activa femenina' => 49.75,
                    'Población Ocupada' => 94.83,
                    'Población Ocupada masculina' => 51.81,
                    'Población Ocupada femenina' => 48.19,
                    'Población Desocupada' => 5.17,
                    'Derechohabiencia' => 85.84
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 121,
                    'Ocupación por Vivienda' => 3.62,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.35,
                    'Viviendas con Automóvil' => 95.04,
                    'Viviendas con Computadora' => 91.74
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 3,
                    'Primer actividad nombre' => 'Salud',
                    'Primer actividad porcentaje' => 33.33,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 33.33,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 33.33
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
            'Centro latitud'  => 25.5306066537669,
            'Centro longitud' => -103.400543976657
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

} // Clase AngelesResidencialRinconAurora

?>
