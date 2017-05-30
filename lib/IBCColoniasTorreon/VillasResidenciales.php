<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillasResidenciales
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
 * Clase VillasResidenciales
 */
class VillasResidenciales extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Villas Residenciales';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'villas-residenciales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Villas Residenciales en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Villas Residenciales';
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
                    'Población total' => 322,
                    'Porcentaje de población masculina' => 47.52,
                    'Porcentaje de población femenina' => 52.48,
                    'Porcentaje de población de 0 a 14 años' => 18.63,
                    'Porcentaje de población de 15 a 64 años' => 76.09,
                    'Porcentaje de población de 65 y más años' => 4.35,
                    'Porcentaje de población no especificada' => 0.93,
                    'Fecundidad promedio' => 1.53,
                    'Porcentaje de población con discapacidad' => 0.93
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.71,
                    'Población Económicamente Activa masculina' => 56.64,
                    'Población Económicamente Activa femenina' => 43.36,
                    'Población Ocupada' => 92.52,
                    'Población Ocupada masculina' => 54.89,
                    'Población Ocupada femenina' => 45.11,
                    'Población Desocupada' => 7.48,
                    'Derechohabiencia' => 79.81
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 92,
                    'Ocupación por Vivienda' => 3.50,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.91,
                    'Viviendas con Automóvil' => 90.22,
                    'Viviendas con Computadora' => 88.04
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 12,
                    'Primer actividad nombre' => 'Manejo de Residuos',
                    'Primer actividad porcentaje' => 25.00,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Cuarta actividad porcentaje' => 8.33,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 8.33
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
            'Centro latitud'  => 25.5219866553756,
            'Centro longitud' => -103.397605346064
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

} // Clase VillasResidenciales

?>
