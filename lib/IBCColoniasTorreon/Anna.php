<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Anna
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
 * Clase Anna
 */
class Anna extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Anna';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'anna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Anna en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Anna';
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
                    'Población total' => 4877,
                    'Porcentaje de población masculina' => 48.48,
                    'Porcentaje de población femenina' => 51.52,
                    'Porcentaje de población de 0 a 14 años' => 37.34,
                    'Porcentaje de población de 15 a 64 años' => 59.23,
                    'Porcentaje de población de 65 y más años' => 2.12,
                    'Porcentaje de población no especificada' => 1.31,
                    'Fecundidad promedio' => 1.85,
                    'Porcentaje de población con discapacidad' => 1.52
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 59.98,
                    'Población Económicamente Activa masculina' => 65.30,
                    'Población Económicamente Activa femenina' => 34.70,
                    'Población Ocupada' => 94.67,
                    'Población Ocupada masculina' => 64.81,
                    'Población Ocupada femenina' => 35.19,
                    'Población Desocupada' => 5.33,
                    'Derechohabiencia' => 75.03
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1262,
                    'Ocupación por Vivienda' => 3.86,
                    'Viviendas con Electricidad' => 99.75,
                    'Viviendas con Agua' => 99.67,
                    'Viviendas con Drenaje' => 99.51,
                    'Viviendas con Televisión' => 99.20,
                    'Viviendas con Automóvil' => 50.72,
                    'Viviendas con Computadora' => 25.26
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 83,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 53.01,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 10.84,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 9.64,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 8.43,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 4.82
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
            'Centro latitud'  => 25.6034999710903,
            'Centro longitud' => -103.367800853321
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

} // Clase Anna

?>
