<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ElTajito
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
 * Clase ElTajito
 */
class ElTajito extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El Tajito';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-tajito';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia El Tajito en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, El Tajito';
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
                    'Población total' => 2914,
                    'Porcentaje de población masculina' => 48.01,
                    'Porcentaje de población femenina' => 51.99,
                    'Porcentaje de población de 0 a 14 años' => 20.05,
                    'Porcentaje de población de 15 a 64 años' => 72.42,
                    'Porcentaje de población de 65 y más años' => 6.44,
                    'Porcentaje de población no especificada' => 1.09,
                    'Fecundidad promedio' => 1.93,
                    'Porcentaje de población con discapacidad' => 4.62
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.38,
                    'Población Económicamente Activa masculina' => 58.00,
                    'Población Económicamente Activa femenina' => 42.00,
                    'Población Ocupada' => 95.02,
                    'Población Ocupada masculina' => 57.72,
                    'Población Ocupada femenina' => 42.28,
                    'Población Desocupada' => 4.98,
                    'Derechohabiencia' => 78.07
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 818,
                    'Ocupación por Vivienda' => 3.56,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.88,
                    'Viviendas con Drenaje' => 99.88,
                    'Viviendas con Televisión' => 99.63,
                    'Viviendas con Automóvil' => 78.61,
                    'Viviendas con Computadora' => 64.55
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 99,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 35.35,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 25.25,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 8.08,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 8.08,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 7.07
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
            'Centro latitud'  => 25.5709627336207,
            'Centro longitud' => -103.43138140579
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

} // Clase ElTajito

?>
