<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon SegundaRinconadaDeLaUnion
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
 * Clase SegundaRinconadaDeLaUnion
 */
class SegundaRinconadaDeLaUnion extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Segunda Rinconada de La Unión';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'segunda-rinconada-de-la-union';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Segunda Rinconada de La Unión en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Segunda Rinconada de La Unión';
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
                    'Población total' => 962,
                    'Porcentaje de población masculina' => 48.91,
                    'Porcentaje de población femenina' => 51.09,
                    'Porcentaje de población de 0 a 14 años' => 32.35,
                    'Porcentaje de población de 15 a 64 años' => 59.64,
                    'Porcentaje de población de 65 y más años' => 8.02,
                    'Porcentaje de población no especificada' => -0.01,
                    'Fecundidad promedio' => 2.60,
                    'Porcentaje de población con discapacidad' => 6.52
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 47.88,
                    'Población Económicamente Activa masculina' => 71.84,
                    'Población Económicamente Activa femenina' => 28.16,
                    'Población Ocupada' => 89.99,
                    'Población Ocupada masculina' => 69.93,
                    'Población Ocupada femenina' => 30.07,
                    'Población Desocupada' => 10.01,
                    'Derechohabiencia' => 72.37
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 246,
                    'Ocupación por Vivienda' => 3.91,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 96.15,
                    'Viviendas con Drenaje' => 99.88,
                    'Viviendas con Televisión' => 98.14,
                    'Viviendas con Automóvil' => 23.16,
                    'Viviendas con Computadora' => 12.23
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 10,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Educativos',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 20.00,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 10.00
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
            'Centro latitud'  => 25.5267730376677,
            'Centro longitud' => -103.46431509362
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

} // Clase SegundaRinconadaDeLaUnion

?>
