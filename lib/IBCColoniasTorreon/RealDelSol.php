<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon RealDelSol
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
 * Clase RealDelSol
 */
class RealDelSol extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Real del Sol';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'real-del-sol';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Real del Sol en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Real del Sol';
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
                    'Población total' => 497,
                    'Porcentaje de población masculina' => 51.91,
                    'Porcentaje de población femenina' => 48.09,
                    'Porcentaje de población de 0 a 14 años' => 38.83,
                    'Porcentaje de población de 15 a 64 años' => 59.56,
                    'Porcentaje de población de 65 y más años' => 1.61,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.21,
                    'Porcentaje de población con discapacidad' => 1.99
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 63.00,
                    'Población Económicamente Activa masculina' => 69.42,
                    'Población Económicamente Activa femenina' => 30.58,
                    'Población Ocupada' => 95.97,
                    'Población Ocupada masculina' => 68.69,
                    'Población Ocupada femenina' => 31.31,
                    'Población Desocupada' => 4.03,
                    'Derechohabiencia' => 74.85
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 138,
                    'Ocupación por Vivienda' => 3.60,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.28,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.28,
                    'Viviendas con Automóvil' => 39.12,
                    'Viviendas con Computadora' => 26.62
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 8,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 75.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 25.00
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
            'Centro latitud'  => 25.5558590537195,
            'Centro longitud' => -103.329197303031
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

} // Clase RealDelSol

?>
