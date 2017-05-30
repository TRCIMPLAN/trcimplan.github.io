<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Polvorera
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
 * Clase Polvorera
 */
class Polvorera extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Polvorera';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'polvorera';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Polvorera en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Polvorera';
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
                    'Población total' => 1210,
                    'Porcentaje de población masculina' => 48.92,
                    'Porcentaje de población femenina' => 51.08,
                    'Porcentaje de población de 0 a 14 años' => 27.23,
                    'Porcentaje de población de 15 a 64 años' => 65.01,
                    'Porcentaje de población de 65 y más años' => 7.76,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.23,
                    'Porcentaje de población con discapacidad' => 3.78
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.55,
                    'Población Económicamente Activa masculina' => 71.20,
                    'Población Económicamente Activa femenina' => 28.80,
                    'Población Ocupada' => 97.44,
                    'Población Ocupada masculina' => 70.88,
                    'Población Ocupada femenina' => 29.12,
                    'Población Desocupada' => 2.56,
                    'Derechohabiencia' => 71.42
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 324,
                    'Ocupación por Vivienda' => 3.73,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.98,
                    'Viviendas con Drenaje' => 99.91,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 34.04,
                    'Viviendas con Computadora' => 18.93
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 17,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 76.47,
                    'Segunda actividad nombre' => 'Educativos',
                    'Segunda actividad porcentaje' => 5.88,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 5.88,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 5.88,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 5.88
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
            'Centro latitud'  => 25.5253242957465,
            'Centro longitud' => -103.469410262457
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

} // Clase Polvorera

?>
