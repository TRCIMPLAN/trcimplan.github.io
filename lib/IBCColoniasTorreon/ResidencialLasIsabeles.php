<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ResidencialLasIsabeles
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
 * Clase ResidencialLasIsabeles
 */
class ResidencialLasIsabeles extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Residencial Las Isabeles';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'residencial-las-isabeles';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Residencial Las Isabeles en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Residencial Las Isabeles';
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
                    'Población total' => 464,
                    'Porcentaje de población masculina' => 48.28,
                    'Porcentaje de población femenina' => 51.72,
                    'Porcentaje de población de 0 a 14 años' => 31.90,
                    'Porcentaje de población de 15 a 64 años' => 60.13,
                    'Porcentaje de población de 65 y más años' => 0.22,
                    'Porcentaje de población no especificada' => 7.75,
                    'Fecundidad promedio' => 1.56,
                    'Porcentaje de población con discapacidad' => 0.47
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.24,
                    'Población Económicamente Activa masculina' => 68.71,
                    'Población Económicamente Activa femenina' => 31.29,
                    'Población Ocupada' => 98.13,
                    'Población Ocupada masculina' => 68.12,
                    'Población Ocupada femenina' => 31.88,
                    'Población Desocupada' => 1.87,
                    'Derechohabiencia' => 83.89
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 100,
                    'Ocupación por Vivienda' => 4.64,
                    'Viviendas con Electricidad' => 99.00,
                    'Viviendas con Agua' => 97.00,
                    'Viviendas con Drenaje' => 98.00,
                    'Viviendas con Televisión' => 99.00,
                    'Viviendas con Automóvil' => 99.00,
                    'Viviendas con Computadora' => 98.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 5,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 80.00,
                    'Segunda actividad nombre' => 'Educativos',
                    'Segunda actividad porcentaje' => 20.00
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
            'Centro latitud'  => 25.5905239193903,
            'Centro longitud' => -103.41019802224
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

} // Clase ResidencialLasIsabeles

?>
