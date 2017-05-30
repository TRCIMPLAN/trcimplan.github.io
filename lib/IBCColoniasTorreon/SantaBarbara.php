<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon SantaBarbara
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
 * Clase SantaBarbara
 */
class SantaBarbara extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Santa Bárbara';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'santa-barbara';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Santa Bárbara en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Santa Bárbara';
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
                    'Población total' => 299,
                    'Porcentaje de población masculina' => 49.50,
                    'Porcentaje de población femenina' => 50.50,
                    'Porcentaje de población de 0 a 14 años' => 24.08,
                    'Porcentaje de población de 15 a 64 años' => 73.24,
                    'Porcentaje de población de 65 y más años' => 1.67,
                    'Porcentaje de población no especificada' => 1.01,
                    'Fecundidad promedio' => 1.52,
                    'Porcentaje de población con discapacidad' => 1.00
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 58.75,
                    'Población Económicamente Activa masculina' => 53.90,
                    'Población Económicamente Activa femenina' => 46.10,
                    'Población Ocupada' => 95.56,
                    'Población Ocupada masculina' => 52.59,
                    'Población Ocupada femenina' => 47.41,
                    'Población Desocupada' => 4.44,
                    'Derechohabiencia' => 77.26
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 91,
                    'Ocupación por Vivienda' => 3.29,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.90,
                    'Viviendas con Automóvil' => 85.71,
                    'Viviendas con Computadora' => 71.43
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 3,
                    'Primer actividad nombre' => 'Comercio Mayoreo',
                    'Primer actividad porcentaje' => 66.67,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
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
            'Centro latitud'  => 25.5337257623517,
            'Centro longitud' => -103.390996578889
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

} // Clase SantaBarbara

?>
