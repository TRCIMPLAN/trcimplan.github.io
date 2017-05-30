<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillasDeLaIbero
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
 * Clase VillasDeLaIbero
 */
class VillasDeLaIbero extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Villas de La Ibero';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'villas-de-la-ibero';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Villas de La Ibero en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Villas de La Ibero';
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
                    'Población total' => 730,
                    'Porcentaje de población masculina' => 50.82,
                    'Porcentaje de población femenina' => 49.18,
                    'Porcentaje de población de 0 a 14 años' => 34.93,
                    'Porcentaje de población de 15 a 64 años' => 60.41,
                    'Porcentaje de población de 65 y más años' => 3.84,
                    'Porcentaje de población no especificada' => 0.82,
                    'Fecundidad promedio' => 1.47,
                    'Porcentaje de población con discapacidad' => 1.20
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 62.15,
                    'Población Económicamente Activa masculina' => 61.56,
                    'Población Económicamente Activa femenina' => 38.44,
                    'Población Ocupada' => 98.01,
                    'Población Ocupada masculina' => 61.46,
                    'Población Ocupada femenina' => 38.54,
                    'Población Desocupada' => 1.99,
                    'Derechohabiencia' => 81.64
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 202,
                    'Ocupación por Vivienda' => 3.61,
                    'Viviendas con Electricidad' => 99.01,
                    'Viviendas con Agua' => 99.01,
                    'Viviendas con Drenaje' => 99.01,
                    'Viviendas con Televisión' => 96.53,
                    'Viviendas con Automóvil' => 93.56,
                    'Viviendas con Computadora' => 88.61
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 6,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 66.67,
                    'Segunda actividad nombre' => 'Gubernamentales',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 16.67
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
            'Centro latitud'  => 25.5992751281874,
            'Centro longitud' => -103.400377172444
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

} // Clase VillasDeLaIbero

?>
