<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LaPerla
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
 * Clase LaPerla
 */
class LaPerla extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Perla';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-perla';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia La Perla en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, La Perla';
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
                    'Población total' => 2587,
                    'Porcentaje de población masculina' => 50.17,
                    'Porcentaje de población femenina' => 49.83,
                    'Porcentaje de población de 0 a 14 años' => 39.47,
                    'Porcentaje de población de 15 a 64 años' => 58.56,
                    'Porcentaje de población de 65 y más años' => 1.74,
                    'Porcentaje de población no especificada' => 0.23,
                    'Fecundidad promedio' => 1.91,
                    'Porcentaje de población con discapacidad' => 2.24
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.92,
                    'Población Económicamente Activa masculina' => 70.98,
                    'Población Económicamente Activa femenina' => 29.02,
                    'Población Ocupada' => 94.67,
                    'Población Ocupada masculina' => 69.76,
                    'Población Ocupada femenina' => 30.24,
                    'Población Desocupada' => 5.33,
                    'Derechohabiencia' => 72.44
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 679,
                    'Ocupación por Vivienda' => 3.81,
                    'Viviendas con Electricidad' => 99.85,
                    'Viviendas con Agua' => 99.85,
                    'Viviendas con Drenaje' => 99.85,
                    'Viviendas con Televisión' => 99.12,
                    'Viviendas con Automóvil' => 45.51,
                    'Viviendas con Computadora' => 27.69
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 87,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 41.38,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 28.74,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 16.09,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 5.75,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 3.45
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
            'Centro latitud'  => 25.4987958629911,
            'Centro longitud' => -103.357998458745
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

} // Clase LaPerla

?>
