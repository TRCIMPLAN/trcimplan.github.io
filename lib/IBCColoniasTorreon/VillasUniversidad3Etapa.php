<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillasUniversidad3Etapa
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
 * Clase VillasUniversidad3Etapa
 */
class VillasUniversidad3Etapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Villas Universidad 3° Etapa';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'villas-universidad-3-etapa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas Universidad 3° Etapa en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Villas Universidad 3° Etapa';
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
                    'Población total' => 994,
                    'Porcentaje de población masculina' => 47.79,
                    'Porcentaje de población femenina' => 52.21,
                    'Porcentaje de población de 0 a 14 años' => 39.74,
                    'Porcentaje de población de 15 a 64 años' => 57.75,
                    'Porcentaje de población de 65 y más años' => 2.21,
                    'Porcentaje de población no especificada' => 0.30,
                    'Fecundidad promedio' => 2.02,
                    'Porcentaje de población con discapacidad' => 1.43
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 62.88,
                    'Población Económicamente Activa masculina' => 66.33,
                    'Población Económicamente Activa femenina' => 33.67,
                    'Población Ocupada' => 88.35,
                    'Población Ocupada masculina' => 66.57,
                    'Población Ocupada femenina' => 33.43,
                    'Población Desocupada' => 11.65,
                    'Derechohabiencia' => 76.26
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 273,
                    'Ocupación por Vivienda' => 3.64,
                    'Viviendas con Electricidad' => 99.63,
                    'Viviendas con Agua' => 99.63,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.63,
                    'Viviendas con Automóvil' => 41.76,
                    'Viviendas con Computadora' => 19.41
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 18,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 11.11,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 5.56
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
            'Centro latitud'  => 25.5453467690351,
            'Centro longitud' => -103.32056178099
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

} // Clase VillasUniversidad3Etapa

?>
