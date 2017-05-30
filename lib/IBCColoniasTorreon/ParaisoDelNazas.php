<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ParaisoDelNazas
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
 * Clase ParaisoDelNazas
 */
class ParaisoDelNazas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Paraíso del Nazas';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'paraiso-del-nazas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Paraíso del Nazas en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Paraíso del Nazas';
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
                    'Población total' => 515,
                    'Porcentaje de población masculina' => 48.89,
                    'Porcentaje de población femenina' => 51.11,
                    'Porcentaje de población de 0 a 14 años' => 30.21,
                    'Porcentaje de población de 15 a 64 años' => 58.43,
                    'Porcentaje de población de 65 y más años' => 5.51,
                    'Porcentaje de población no especificada' => 5.85,
                    'Fecundidad promedio' => 1.97,
                    'Porcentaje de población con discapacidad' => 2.79
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 48.48,
                    'Población Económicamente Activa masculina' => 67.93,
                    'Población Económicamente Activa femenina' => 32.07,
                    'Población Ocupada' => 88.53,
                    'Población Ocupada masculina' => 66.34,
                    'Población Ocupada femenina' => 33.66,
                    'Población Desocupada' => 11.47,
                    'Derechohabiencia' => 60.29
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 123,
                    'Ocupación por Vivienda' => 4.19,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.86,
                    'Viviendas con Drenaje' => 94.72,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 73.27,
                    'Viviendas con Computadora' => 44.23
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 24,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 41.67,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 25.00,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Comercio Mayoreo',
                    'Cuarta actividad porcentaje' => 12.50,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 4.17
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
            'Centro latitud'  => 25.5751685323348,
            'Centro longitud' => -103.428363944547
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

} // Clase ParaisoDelNazas

?>
