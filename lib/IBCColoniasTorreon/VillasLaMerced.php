<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillasLaMerced
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
 * Clase VillasLaMerced
 */
class VillasLaMerced extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Villas La Merced';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'villas-la-merced';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Villas La Merced en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Villas La Merced';
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
                    'Población total' => 15139,
                    'Porcentaje de población masculina' => 48.69,
                    'Porcentaje de población femenina' => 51.31,
                    'Porcentaje de población de 0 a 14 años' => 30.34,
                    'Porcentaje de población de 15 a 64 años' => 64.57,
                    'Porcentaje de población de 65 y más años' => 3.61,
                    'Porcentaje de población no especificada' => 1.48,
                    'Fecundidad promedio' => 1.93,
                    'Porcentaje de población con discapacidad' => 2.99
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.42,
                    'Población Económicamente Activa masculina' => 61.33,
                    'Población Económicamente Activa femenina' => 38.67,
                    'Población Ocupada' => 91.82,
                    'Población Ocupada masculina' => 60.90,
                    'Población Ocupada femenina' => 39.10,
                    'Población Desocupada' => 8.18,
                    'Derechohabiencia' => 75.19
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 3837,
                    'Ocupación por Vivienda' => 3.95,
                    'Viviendas con Electricidad' => 99.90,
                    'Viviendas con Agua' => 99.53,
                    'Viviendas con Drenaje' => 99.35,
                    'Viviendas con Televisión' => 99.01,
                    'Viviendas con Automóvil' => 65.39,
                    'Viviendas con Computadora' => 48.99
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 431,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 39.44,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 16.24,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 14.62,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 6.03,
                    'Quinta actividad nombre' => 'Manejo de Residuos',
                    'Quinta actividad porcentaje' => 3.25
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
            'Centro latitud'  => 25.5070159997728,
            'Centro longitud' => -103.394285835192
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

} // Clase VillasLaMerced

?>
