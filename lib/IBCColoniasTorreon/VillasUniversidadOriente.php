<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillasUniversidadOriente
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
 * Clase VillasUniversidadOriente
 */
class VillasUniversidadOriente extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Villas Universidad Oriente';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'villas-universidad-oriente';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Villas Universidad Oriente en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Villas Universidad Oriente';
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
                    'Población total' => 1095,
                    'Porcentaje de población masculina' => 49.04,
                    'Porcentaje de población femenina' => 50.96,
                    'Porcentaje de población de 0 a 14 años' => 34.16,
                    'Porcentaje de población de 15 a 64 años' => 62.83,
                    'Porcentaje de población de 65 y más años' => 3.01,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.09,
                    'Porcentaje de población con discapacidad' => 1.37
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 62.38,
                    'Población Económicamente Activa masculina' => 67.81,
                    'Población Económicamente Activa femenina' => 32.19,
                    'Población Ocupada' => 91.93,
                    'Población Ocupada masculina' => 67.29,
                    'Población Ocupada femenina' => 32.71,
                    'Población Desocupada' => 8.07,
                    'Derechohabiencia' => 72.69
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 326,
                    'Ocupación por Vivienda' => 3.36,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 97.85,
                    'Viviendas con Automóvil' => 38.04,
                    'Viviendas con Computadora' => 16.19
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 19,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 68.42,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 10.53,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 5.26,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 5.26,
                    'Quinta actividad nombre' => 'Manejo de Residuos',
                    'Quinta actividad porcentaje' => 5.26
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
            'Centro latitud'  => 25.5455587202165,
            'Centro longitud' => -103.314660564849
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

} // Clase VillasUniversidadOriente

?>
