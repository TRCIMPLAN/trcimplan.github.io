<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LasBrisas
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
 * Clase LasBrisas
 */
class LasBrisas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Las Brisas';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'las-brisas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Las Brisas en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Las Brisas';
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
                    'Población total' => 3607,
                    'Porcentaje de población masculina' => 50.63,
                    'Porcentaje de población femenina' => 49.37,
                    'Porcentaje de población de 0 a 14 años' => 33.27,
                    'Porcentaje de población de 15 a 64 años' => 64.48,
                    'Porcentaje de población de 65 y más años' => 2.26,
                    'Porcentaje de población no especificada' => -0.01,
                    'Fecundidad promedio' => 2.07,
                    'Porcentaje de población con discapacidad' => 9.81
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.44,
                    'Población Económicamente Activa masculina' => 74.94,
                    'Población Económicamente Activa femenina' => 25.06,
                    'Población Ocupada' => 90.83,
                    'Población Ocupada masculina' => 73.96,
                    'Población Ocupada femenina' => 26.04,
                    'Población Desocupada' => 9.17,
                    'Derechohabiencia' => 70.21
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 901,
                    'Ocupación por Vivienda' => 4.00,
                    'Viviendas con Electricidad' => 99.89,
                    'Viviendas con Agua' => 98.55,
                    'Viviendas con Drenaje' => 99.00,
                    'Viviendas con Televisión' => 97.66,
                    'Viviendas con Automóvil' => 43.49,
                    'Viviendas con Computadora' => 25.18
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 41,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 43.90,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 14.63,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 14.63,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 9.76,
                    'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Quinta actividad porcentaje' => 7.32
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
            'Centro latitud'  => 25.4902207187318,
            'Centro longitud' => -103.406890150704
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

} // Clase LasBrisas

?>
