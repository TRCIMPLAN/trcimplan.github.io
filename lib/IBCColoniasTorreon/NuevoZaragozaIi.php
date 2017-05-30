<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon NuevoZaragozaIi
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
 * Clase NuevoZaragozaIi
 */
class NuevoZaragozaIi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Nuevo Zaragoza II';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'nuevo-zaragoza-ii';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Nuevo Zaragoza II en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Nuevo Zaragoza II';
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
                    'Población total' => 23,
                    'Porcentaje de población masculina' => 43.48,
                    'Porcentaje de población femenina' => 56.52,
                    'Porcentaje de población de 0 a 14 años' => 39.13,
                    'Porcentaje de población de 15 a 64 años' => 60.87,
                    'Porcentaje de población de 65 y más años' => 0.00,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.13,
                    'Porcentaje de población con discapacidad' => 1.86
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 73.33,
                    'Población Económicamente Activa masculina' => 63.64,
                    'Población Económicamente Activa femenina' => 36.36,
                    'Población Ocupada' => 78.64,
                    'Población Ocupada masculina' => 55.56,
                    'Población Ocupada femenina' => 44.44,
                    'Población Desocupada' => 21.36,
                    'Derechohabiencia' => 86.96
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 7,
                    'Ocupación por Vivienda' => 3.29,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 57.14,
                    'Viviendas con Computadora' => 42.86
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 1,
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
            'Centro latitud'  => 25.5211644572193,
            'Centro longitud' => -103.3495008016
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

} // Clase NuevoZaragozaIi

?>
