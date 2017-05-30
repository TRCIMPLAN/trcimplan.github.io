<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon JoseRamirezMijares
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
 * Clase JoseRamirezMijares
 */
class JoseRamirezMijares extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'José Ramírez Mijares';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'jose-ramirez-mijares';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia José Ramírez Mijares en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, José Ramírez Mijares';
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
                    'Población total' => 1914,
                    'Porcentaje de población masculina' => 47.54,
                    'Porcentaje de población femenina' => 52.46,
                    'Porcentaje de población de 0 a 14 años' => 28.44,
                    'Porcentaje de población de 15 a 64 años' => 64.69,
                    'Porcentaje de población de 65 y más años' => 6.80,
                    'Porcentaje de población no especificada' => 0.07,
                    'Fecundidad promedio' => 2.32,
                    'Porcentaje de población con discapacidad' => 6.68
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.53,
                    'Población Económicamente Activa masculina' => 71.10,
                    'Población Económicamente Activa femenina' => 28.90,
                    'Población Ocupada' => 93.88,
                    'Población Ocupada masculina' => 70.07,
                    'Población Ocupada femenina' => 29.93,
                    'Población Desocupada' => 6.12,
                    'Derechohabiencia' => 68.75
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 488,
                    'Ocupación por Vivienda' => 3.92,
                    'Viviendas con Electricidad' => 97.71,
                    'Viviendas con Agua' => 95.85,
                    'Viviendas con Drenaje' => 96.26,
                    'Viviendas con Televisión' => 95.83,
                    'Viviendas con Automóvil' => 32.82,
                    'Viviendas con Computadora' => 15.15
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 40,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 52.50,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 15.00,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 12.50,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 5.00,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 5.00
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
            'Centro latitud'  => 25.5210163245231,
            'Centro longitud' => -103.471146383972
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

} // Clase JoseRamirezMijares

?>
