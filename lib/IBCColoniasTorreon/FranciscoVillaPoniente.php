<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon FranciscoVillaPoniente
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
 * Clase FranciscoVillaPoniente
 */
class FranciscoVillaPoniente extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Francisco Villa Poniente';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'francisco-villa-poniente';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Francisco Villa Poniente en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Francisco Villa Poniente';
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
                    'Población total' => 2101,
                    'Porcentaje de población masculina' => 50.02,
                    'Porcentaje de población femenina' => 49.98,
                    'Porcentaje de población de 0 a 14 años' => 21.65,
                    'Porcentaje de población de 15 a 64 años' => 64.21,
                    'Porcentaje de población de 65 y más años' => 12.41,
                    'Porcentaje de población no especificada' => 1.73,
                    'Fecundidad promedio' => 2.28,
                    'Porcentaje de población con discapacidad' => 8.31
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.24,
                    'Población Económicamente Activa masculina' => 62.32,
                    'Población Económicamente Activa femenina' => 37.68,
                    'Población Ocupada' => 91.50,
                    'Población Ocupada masculina' => 61.24,
                    'Población Ocupada femenina' => 38.76,
                    'Población Desocupada' => 8.50,
                    'Derechohabiencia' => 65.03
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 579,
                    'Ocupación por Vivienda' => 3.63,
                    'Viviendas con Electricidad' => 99.75,
                    'Viviendas con Agua' => 99.40,
                    'Viviendas con Drenaje' => 99.23,
                    'Viviendas con Televisión' => 98.88,
                    'Viviendas con Automóvil' => 55.71,
                    'Viviendas con Computadora' => 39.05
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 66,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 33.33,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 22.73,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 12.12,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 7.58,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 7.58
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
            'Centro latitud'  => 25.5478104368427,
            'Centro longitud' => -103.461224830764
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

} // Clase FranciscoVillaPoniente

?>
