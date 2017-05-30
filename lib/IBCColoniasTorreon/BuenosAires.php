<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon BuenosAires
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
 * Clase BuenosAires
 */
class BuenosAires extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Buenos Aires';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'buenos-aires';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Buenos Aires en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Buenos Aires';
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
                    'Población total' => 238,
                    'Porcentaje de población masculina' => 45.66,
                    'Porcentaje de población femenina' => 54.34,
                    'Porcentaje de población de 0 a 14 años' => 29.81,
                    'Porcentaje de población de 15 a 64 años' => 67.09,
                    'Porcentaje de población de 65 y más años' => 3.10,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.12,
                    'Porcentaje de población con discapacidad' => 1.87
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.47,
                    'Población Económicamente Activa masculina' => 74.06,
                    'Población Económicamente Activa femenina' => 25.94,
                    'Población Ocupada' => 93.20,
                    'Población Ocupada masculina' => 73.43,
                    'Población Ocupada femenina' => 26.57,
                    'Población Desocupada' => 6.80,
                    'Derechohabiencia' => 74.90
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 62,
                    'Ocupación por Vivienda' => 3.84,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.12,
                    'Viviendas con Drenaje' => 99.19,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 25.82,
                    'Viviendas con Computadora' => 14.33
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 2,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 100.00
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
            'Centro latitud'  => 25.5164480248507,
            'Centro longitud' => -103.471119545627
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

} // Clase BuenosAires

?>
