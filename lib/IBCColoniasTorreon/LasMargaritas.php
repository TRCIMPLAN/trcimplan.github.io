<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LasMargaritas
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
 * Clase LasMargaritas
 */
class LasMargaritas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Las Margaritas';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'las-margaritas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Las Margaritas en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Las Margaritas';
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
                    'Población total' => 1494,
                    'Porcentaje de población masculina' => 47.32,
                    'Porcentaje de población femenina' => 52.68,
                    'Porcentaje de población de 0 a 14 años' => 14.67,
                    'Porcentaje de población de 15 a 64 años' => 60.58,
                    'Porcentaje de población de 65 y más años' => 14.34,
                    'Porcentaje de población no especificada' => 10.41,
                    'Fecundidad promedio' => 1.94,
                    'Porcentaje de población con discapacidad' => 4.51
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.46,
                    'Población Económicamente Activa masculina' => 56.30,
                    'Población Económicamente Activa femenina' => 43.70,
                    'Población Ocupada' => 92.99,
                    'Población Ocupada masculina' => 56.48,
                    'Población Ocupada femenina' => 43.52,
                    'Población Desocupada' => 7.01,
                    'Derechohabiencia' => 68.94
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 398,
                    'Ocupación por Vivienda' => 3.75,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 99.50,
                    'Viviendas con Televisión' => 98.74,
                    'Viviendas con Automóvil' => 88.60,
                    'Viviendas con Computadora' => 76.69
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 81,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 25.93,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 18.52,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 9.88,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 7.41,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 7.41
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
            'Centro latitud'  => 25.5630437838483,
            'Centro longitud' => -103.446705345554
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

} // Clase LasMargaritas

?>
