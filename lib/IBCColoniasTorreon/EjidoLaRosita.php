<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon EjidoLaRosita
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
 * Clase EjidoLaRosita
 */
class EjidoLaRosita extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ejido La Rosita';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'ejido-la-rosita';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Ejido La Rosita en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Ejido La Rosita';
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
                    'Población total' => 603,
                    'Porcentaje de población masculina' => 49.50,
                    'Porcentaje de población femenina' => 50.50,
                    'Porcentaje de población de 0 a 14 años' => 33.27,
                    'Porcentaje de población de 15 a 64 años' => 60.83,
                    'Porcentaje de población de 65 y más años' => 5.88,
                    'Porcentaje de población no especificada' => 0.02,
                    'Fecundidad promedio' => 2.46,
                    'Porcentaje de población con discapacidad' => 6.02
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 47.01,
                    'Población Económicamente Activa masculina' => 78.63,
                    'Población Económicamente Activa femenina' => 21.37,
                    'Población Ocupada' => 82.60,
                    'Población Ocupada masculina' => 75.87,
                    'Población Ocupada femenina' => 24.13,
                    'Población Desocupada' => 17.40,
                    'Derechohabiencia' => 57.21
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 149,
                    'Ocupación por Vivienda' => 4.05,
                    'Viviendas con Electricidad' => 99.35,
                    'Viviendas con Agua' => 92.61,
                    'Viviendas con Drenaje' => 85.85,
                    'Viviendas con Televisión' => 94.50,
                    'Viviendas con Automóvil' => 34.39,
                    'Viviendas con Computadora' => 15.08
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 15,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 33.33,
                    'Segunda actividad nombre' => 'Educativos',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 20.00,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 13.33,
                    'Quinta actividad nombre' => 'Gubernamentales',
                    'Quinta actividad porcentaje' => 6.67
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
            'Centro latitud'  => 25.5230389055523,
            'Centro longitud' => -103.338249628484
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

} // Clase EjidoLaRosita

?>
