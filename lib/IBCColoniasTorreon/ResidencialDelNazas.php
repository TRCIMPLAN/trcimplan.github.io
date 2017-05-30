<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ResidencialDelNazas
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
 * Clase ResidencialDelNazas
 */
class ResidencialDelNazas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Residencial del Nazas';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'residencial-del-nazas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Residencial del Nazas en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Residencial del Nazas';
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
                    'Población total' => 1290,
                    'Porcentaje de población masculina' => 49.34,
                    'Porcentaje de población femenina' => 50.66,
                    'Porcentaje de población de 0 a 14 años' => 31.90,
                    'Porcentaje de población de 15 a 64 años' => 61.10,
                    'Porcentaje de población de 65 y más años' => 4.82,
                    'Porcentaje de población no especificada' => 2.18,
                    'Fecundidad promedio' => 1.90,
                    'Porcentaje de población con discapacidad' => 2.48
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.91,
                    'Población Económicamente Activa masculina' => 59.11,
                    'Población Económicamente Activa femenina' => 40.89,
                    'Población Ocupada' => 91.86,
                    'Población Ocupada masculina' => 58.78,
                    'Población Ocupada femenina' => 41.22,
                    'Población Desocupada' => 8.14,
                    'Derechohabiencia' => 80.58
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 329,
                    'Ocupación por Vivienda' => 3.92,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.48,
                    'Viviendas con Drenaje' => 99.78,
                    'Viviendas con Televisión' => 99.16,
                    'Viviendas con Automóvil' => 71.41,
                    'Viviendas con Computadora' => 56.77
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 46,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 39.13,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 21.74,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 15.22,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 13.04,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 2.17
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
            'Centro latitud'  => 25.5375872848331,
            'Centro longitud' => -103.35539803761
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

} // Clase ResidencialDelNazas

?>
