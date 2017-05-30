<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon SanDiego
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
 * Clase SanDiego
 */
class SanDiego extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'San Diego';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'san-diego';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia San Diego en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, San Diego';
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
                    'Población total' => 162,
                    'Porcentaje de población masculina' => 45.06,
                    'Porcentaje de población femenina' => 54.94,
                    'Porcentaje de población de 0 a 14 años' => 25.93,
                    'Porcentaje de población de 15 a 64 años' => 70.37,
                    'Porcentaje de población de 65 y más años' => 3.70,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.75,
                    'Porcentaje de población con discapacidad' => 3.70
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 64.80,
                    'Población Económicamente Activa masculina' => 51.85,
                    'Población Económicamente Activa femenina' => 48.15,
                    'Población Ocupada' => 94.82,
                    'Población Ocupada masculina' => 50.65,
                    'Población Ocupada femenina' => 49.35,
                    'Población Desocupada' => 5.18,
                    'Derechohabiencia' => 88.27
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 54,
                    'Ocupación por Vivienda' => 3.00,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 83.33,
                    'Viviendas con Computadora' => 40.74
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 2,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 50.00
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
            'Centro latitud'  => 25.536499662245,
            'Centro longitud' => -103.337893210298
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

} // Clase SanDiego

?>
