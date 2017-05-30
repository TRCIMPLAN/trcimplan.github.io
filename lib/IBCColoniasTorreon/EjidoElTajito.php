<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon EjidoElTajito
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
 * Clase EjidoElTajito
 */
class EjidoElTajito extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ejido El Tajito';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'ejido-el-tajito';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Ejido El Tajito en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Ejido El Tajito';
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
                    'Población total' => 2252,
                    'Porcentaje de población masculina' => 50.04,
                    'Porcentaje de población femenina' => 49.96,
                    'Porcentaje de población de 0 a 14 años' => 28.83,
                    'Porcentaje de población de 15 a 64 años' => 65.46,
                    'Porcentaje de población de 65 y más años' => 5.17,
                    'Porcentaje de población no especificada' => 0.54,
                    'Fecundidad promedio' => 2.37,
                    'Porcentaje de población con discapacidad' => 3.49
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.18,
                    'Población Económicamente Activa masculina' => 70.83,
                    'Población Económicamente Activa femenina' => 29.17,
                    'Población Ocupada' => 92.50,
                    'Población Ocupada masculina' => 70.06,
                    'Población Ocupada femenina' => 29.94,
                    'Población Desocupada' => 7.50,
                    'Derechohabiencia' => 62.92
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 522,
                    'Ocupación por Vivienda' => 4.31,
                    'Viviendas con Electricidad' => 99.78,
                    'Viviendas con Agua' => 99.59,
                    'Viviendas con Drenaje' => 99.01,
                    'Viviendas con Televisión' => 99.01,
                    'Viviendas con Automóvil' => 42.89,
                    'Viviendas con Computadora' => 18.91
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 112,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 34.82,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 29.46,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 8.93,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 8.04,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 7.14
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
            'Centro latitud'  => 25.5758673997964,
            'Centro longitud' => -103.421340478867
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

} // Clase EjidoElTajito

?>
