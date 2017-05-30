<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon RinconDelPedregal
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
 * Clase RinconDelPedregal
 */
class RinconDelPedregal extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Rincón del Pedregal';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'rincon-del-pedregal';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Rincón del Pedregal en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Rincón del Pedregal';
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
                    'Población total' => 1064,
                    'Porcentaje de población masculina' => 50.00,
                    'Porcentaje de población femenina' => 50.00,
                    'Porcentaje de población de 0 a 14 años' => 37.97,
                    'Porcentaje de población de 15 a 64 años' => 58.55,
                    'Porcentaje de población de 65 y más años' => 2.35,
                    'Porcentaje de población no especificada' => 1.13,
                    'Fecundidad promedio' => 1.95,
                    'Porcentaje de población con discapacidad' => 2.48
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.71,
                    'Población Económicamente Activa masculina' => 63.73,
                    'Población Económicamente Activa femenina' => 36.27,
                    'Población Ocupada' => 87.47,
                    'Población Ocupada masculina' => 62.71,
                    'Población Ocupada femenina' => 37.29,
                    'Población Desocupada' => 12.53,
                    'Derechohabiencia' => 72.93
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 280,
                    'Ocupación por Vivienda' => 3.80,
                    'Viviendas con Electricidad' => 99.64,
                    'Viviendas con Agua' => 99.64,
                    'Viviendas con Drenaje' => 99.29,
                    'Viviendas con Televisión' => 98.93,
                    'Viviendas con Automóvil' => 50.36,
                    'Viviendas con Computadora' => 31.09
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 18,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 38.89,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 22.22,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 22.22,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 11.11,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 5.56
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
            'Centro latitud'  => 25.5488717171878,
            'Centro longitud' => -103.354933952843
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

} // Clase RinconDelPedregal

?>
