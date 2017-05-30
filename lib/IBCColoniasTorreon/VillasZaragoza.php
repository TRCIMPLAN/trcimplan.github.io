<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillasZaragoza
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
 * Clase VillasZaragoza
 */
class VillasZaragoza extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Villas Zaragoza';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'villas-zaragoza';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Villas Zaragoza en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Villas Zaragoza';
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
                    'Población total' => 6123,
                    'Porcentaje de población masculina' => 49.83,
                    'Porcentaje de población femenina' => 50.17,
                    'Porcentaje de población de 0 a 14 años' => 36.00,
                    'Porcentaje de población de 15 a 64 años' => 62.17,
                    'Porcentaje de población de 65 y más años' => 1.56,
                    'Porcentaje de población no especificada' => 0.27,
                    'Fecundidad promedio' => 1.82,
                    'Porcentaje de población con discapacidad' => 2.16
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 64.64,
                    'Población Económicamente Activa masculina' => 64.42,
                    'Población Económicamente Activa femenina' => 35.58,
                    'Población Ocupada' => 91.87,
                    'Población Ocupada masculina' => 64.02,
                    'Población Ocupada femenina' => 35.98,
                    'Población Desocupada' => 8.13,
                    'Derechohabiencia' => 75.15
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1725,
                    'Ocupación por Vivienda' => 3.55,
                    'Viviendas con Electricidad' => 99.68,
                    'Viviendas con Agua' => 99.79,
                    'Viviendas con Drenaje' => 99.68,
                    'Viviendas con Televisión' => 97.59,
                    'Viviendas con Automóvil' => 41.97,
                    'Viviendas con Computadora' => 28.27
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 127,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 46.46,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 19.69,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 18.11,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 7.87,
                    'Quinta actividad nombre' => 'Manejo de Residuos',
                    'Quinta actividad porcentaje' => 3.94
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
            'Centro latitud'  => 25.5102510862535,
            'Centro longitud' => -103.347413279401
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

} // Clase VillasZaragoza

?>
