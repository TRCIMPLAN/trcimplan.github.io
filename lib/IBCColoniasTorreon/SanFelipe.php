<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon SanFelipe
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
 * Clase SanFelipe
 */
class SanFelipe extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'San Felipe';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'san-felipe';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia San Felipe en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, San Felipe';
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
                    'Población total' => 3771,
                    'Porcentaje de población masculina' => 47.64,
                    'Porcentaje de población femenina' => 52.36,
                    'Porcentaje de población de 0 a 14 años' => 27.20,
                    'Porcentaje de población de 15 a 64 años' => 67.78,
                    'Porcentaje de población de 65 y más años' => 4.11,
                    'Porcentaje de población no especificada' => 0.91,
                    'Fecundidad promedio' => 1.75,
                    'Porcentaje de población con discapacidad' => 9.09
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.73,
                    'Población Económicamente Activa masculina' => 57.22,
                    'Población Económicamente Activa femenina' => 42.78,
                    'Población Ocupada' => 95.40,
                    'Población Ocupada masculina' => 56.98,
                    'Población Ocupada femenina' => 43.02,
                    'Población Desocupada' => 4.60,
                    'Derechohabiencia' => 82.20
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1027,
                    'Ocupación por Vivienda' => 3.67,
                    'Viviendas con Electricidad' => 99.83,
                    'Viviendas con Agua' => 98.86,
                    'Viviendas con Drenaje' => 99.83,
                    'Viviendas con Televisión' => 99.25,
                    'Viviendas con Automóvil' => 80.06,
                    'Viviendas con Computadora' => 66.62
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 144,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 31.94,
                    'Segunda actividad nombre' => 'Comercio Mayoreo',
                    'Segunda actividad porcentaje' => 14.58,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 11.11,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 11.11,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 6.94
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
            'Centro latitud'  => 25.5400071413994,
            'Centro longitud' => -103.380870033296
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

} // Clase SanFelipe

?>
