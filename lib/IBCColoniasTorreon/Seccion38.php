<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Seccion38
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
 * Clase Seccion38
 */
class Seccion38 extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Sección 38';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'seccion-38';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Sección 38 en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Sección 38';
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
                    'Población total' => 895,
                    'Porcentaje de población masculina' => 47.60,
                    'Porcentaje de población femenina' => 52.40,
                    'Porcentaje de población de 0 a 14 años' => 25.14,
                    'Porcentaje de población de 15 a 64 años' => 69.83,
                    'Porcentaje de población de 65 y más años' => 4.69,
                    'Porcentaje de población no especificada' => 0.34,
                    'Fecundidad promedio' => 1.73,
                    'Porcentaje de población con discapacidad' => 0.56
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.17,
                    'Población Económicamente Activa masculina' => 55.39,
                    'Población Económicamente Activa femenina' => 44.61,
                    'Población Ocupada' => 97.21,
                    'Población Ocupada masculina' => 55.16,
                    'Población Ocupada femenina' => 44.84,
                    'Población Desocupada' => 2.79,
                    'Derechohabiencia' => 85.36
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 230,
                    'Ocupación por Vivienda' => 3.89,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.57,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 88.16,
                    'Viviendas con Computadora' => 76.29
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 23,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 39.13,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 30.43,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 13.04,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 4.35,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 4.35
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
            'Centro latitud'  => 25.5198822063757,
            'Centro longitud' => -103.38291665506
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

} // Clase Seccion38

?>
