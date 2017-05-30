<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillasDelBosque
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
 * Clase VillasDelBosque
 */
class VillasDelBosque extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Villas del Bosque';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'villas-del-bosque';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Villas del Bosque en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Villas del Bosque';
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
                    'Población total' => 3077,
                    'Porcentaje de población masculina' => 48.52,
                    'Porcentaje de población femenina' => 51.48,
                    'Porcentaje de población de 0 a 14 años' => 36.17,
                    'Porcentaje de población de 15 a 64 años' => 62.59,
                    'Porcentaje de población de 65 y más años' => 0.91,
                    'Porcentaje de población no especificada' => 0.33,
                    'Fecundidad promedio' => 1.82,
                    'Porcentaje de población con discapacidad' => 2.21
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 59.33,
                    'Población Económicamente Activa masculina' => 64.82,
                    'Población Económicamente Activa femenina' => 35.18,
                    'Población Ocupada' => 93.19,
                    'Población Ocupada masculina' => 64.27,
                    'Población Ocupada femenina' => 35.73,
                    'Población Desocupada' => 6.81,
                    'Derechohabiencia' => 74.39
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 840,
                    'Ocupación por Vivienda' => 3.66,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.64,
                    'Viviendas con Drenaje' => 99.88,
                    'Viviendas con Televisión' => 97.98,
                    'Viviendas con Automóvil' => 41.71,
                    'Viviendas con Computadora' => 22.60
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 70,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 55.71,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 17.14,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 17.14,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 4.29,
                    'Quinta actividad nombre' => 'Manejo de Residuos',
                    'Quinta actividad porcentaje' => 2.86
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
            'Centro latitud'  => 25.5492631387122,
            'Centro longitud' => -103.323464886286
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

} // Clase VillasDelBosque

?>
