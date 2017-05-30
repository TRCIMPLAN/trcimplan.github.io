<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon RicardoFloresMagon
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
 * Clase RicardoFloresMagon
 */
class RicardoFloresMagon extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ricardo Flores Magon';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'ricardo-flores-magon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Ricardo Flores Magon en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Ricardo Flores Magon';
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
                    'Población total' => 320,
                    'Porcentaje de población masculina' => 49.38,
                    'Porcentaje de población femenina' => 50.62,
                    'Porcentaje de población de 0 a 14 años' => 29.06,
                    'Porcentaje de población de 15 a 64 años' => 65.00,
                    'Porcentaje de población de 65 y más años' => 3.12,
                    'Porcentaje de población no especificada' => 2.82,
                    'Fecundidad promedio' => 2.40,
                    'Porcentaje de población con discapacidad' => 0.41
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 58.02,
                    'Población Económicamente Activa masculina' => 65.96,
                    'Población Económicamente Activa femenina' => 34.04,
                    'Población Ocupada' => 85.63,
                    'Población Ocupada masculina' => 65.85,
                    'Población Ocupada femenina' => 34.15,
                    'Población Desocupada' => 14.37,
                    'Derechohabiencia' => 51.25
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 73,
                    'Ocupación por Vivienda' => 4.38,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 35.62,
                    'Viviendas con Computadora' => 19.18
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 3,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 66.67,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 33.33
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
            'Centro latitud'  => 25.5970697030545,
            'Centro longitud' => -103.414864743146
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

} // Clase RicardoFloresMagon

?>
