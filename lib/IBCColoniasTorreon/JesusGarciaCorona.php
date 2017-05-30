<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon JesusGarciaCorona
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
 * Clase JesusGarciaCorona
 */
class JesusGarciaCorona extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Jesús García Corona';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'jesus-garcia-corona';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Jesús García Corona en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Jesús García Corona';
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
                    'Población total' => 175,
                    'Porcentaje de población masculina' => 50.29,
                    'Porcentaje de población femenina' => 49.71,
                    'Porcentaje de población de 0 a 14 años' => 28.00,
                    'Porcentaje de población de 15 a 64 años' => 62.86,
                    'Porcentaje de población de 65 y más años' => 7.43,
                    'Porcentaje de población no especificada' => 1.71,
                    'Fecundidad promedio' => 2.86,
                    'Porcentaje de población con discapacidad' => 6.29
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.30,
                    'Población Económicamente Activa masculina' => 73.97,
                    'Población Económicamente Activa femenina' => 26.03,
                    'Población Ocupada' => 84.46,
                    'Población Ocupada masculina' => 76.19,
                    'Población Ocupada femenina' => 23.81,
                    'Población Desocupada' => 15.54,
                    'Derechohabiencia' => 42.29
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 38,
                    'Ocupación por Vivienda' => 4.61,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 89.47,
                    'Viviendas con Automóvil' => 31.58,
                    'Viviendas con Computadora' => 22.43
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 5,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 40.00,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 20.00
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
            'Centro latitud'  => 25.5300215225869,
            'Centro longitud' => -103.384458603629
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

} // Clase JesusGarciaCorona

?>
