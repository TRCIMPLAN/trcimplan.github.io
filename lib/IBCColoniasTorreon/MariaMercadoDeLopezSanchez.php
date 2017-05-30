<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon MariaMercadoDeLopezSanchez
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
 * Clase MariaMercadoDeLopezSanchez
 */
class MariaMercadoDeLopezSanchez extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'María Mercado de López Sánchez';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'maria-mercado-de-lopez-sanchez';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia María Mercado de López Sánchez en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, María Mercado de López Sánchez';
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
                    'Población total' => 2527,
                    'Porcentaje de población masculina' => 50.80,
                    'Porcentaje de población femenina' => 49.20,
                    'Porcentaje de población de 0 a 14 años' => 36.88,
                    'Porcentaje de población de 15 a 64 años' => 52.26,
                    'Porcentaje de población de 65 y más años' => 2.37,
                    'Porcentaje de población no especificada' => 8.49,
                    'Fecundidad promedio' => 2.49,
                    'Porcentaje de población con discapacidad' => 2.92
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.17,
                    'Población Económicamente Activa masculina' => 78.35,
                    'Población Económicamente Activa femenina' => 21.65,
                    'Población Ocupada' => 91.77,
                    'Población Ocupada masculina' => 77.90,
                    'Población Ocupada femenina' => 22.10,
                    'Población Desocupada' => 8.23,
                    'Derechohabiencia' => 46.25
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 653,
                    'Ocupación por Vivienda' => 3.87,
                    'Viviendas con Electricidad' => 82.57,
                    'Viviendas con Agua' => 33.12,
                    'Viviendas con Drenaje' => 59.62,
                    'Viviendas con Televisión' => 74.88,
                    'Viviendas con Automóvil' => 28.23,
                    'Viviendas con Computadora' => 4.42
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 145,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.00,
                    'Segunda actividad nombre' => 'Inmobiliarios',
                    'Segunda actividad porcentaje' => 18.62,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 13.79,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 7.59,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 7.59
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
            'Centro latitud'  => 25.5023011822216,
            'Centro longitud' => -103.372802142728
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

} // Clase MariaMercadoDeLopezSanchez

?>
