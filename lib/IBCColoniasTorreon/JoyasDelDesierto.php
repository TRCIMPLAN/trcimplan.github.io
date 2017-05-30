<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon JoyasDelDesierto
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
 * Clase JoyasDelDesierto
 */
class JoyasDelDesierto extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Joyas del Desierto';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'joyas-del-desierto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Joyas del Desierto en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Joyas del Desierto';
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
                    'Población total' => 1556,
                    'Porcentaje de población masculina' => 49.51,
                    'Porcentaje de población femenina' => 50.49,
                    'Porcentaje de población de 0 a 14 años' => 36.33,
                    'Porcentaje de población de 15 a 64 años' => 62.66,
                    'Porcentaje de población de 65 y más años' => 0.73,
                    'Porcentaje de población no especificada' => 0.28,
                    'Fecundidad promedio' => 1.75,
                    'Porcentaje de población con discapacidad' => 2.68
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 65.76,
                    'Población Económicamente Activa masculina' => 61.04,
                    'Población Económicamente Activa femenina' => 38.96,
                    'Población Ocupada' => 93.63,
                    'Población Ocupada masculina' => 60.97,
                    'Población Ocupada femenina' => 39.03,
                    'Población Desocupada' => 6.37,
                    'Derechohabiencia' => 77.35
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 440,
                    'Ocupación por Vivienda' => 3.54,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 99.86,
                    'Viviendas con Televisión' => 98.49,
                    'Viviendas con Automóvil' => 60.96,
                    'Viviendas con Computadora' => 36.36
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 9,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 77.78,
                    'Segunda actividad nombre' => 'Educativos',
                    'Segunda actividad porcentaje' => 11.11,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 11.11
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
            'Centro latitud'  => 25.541760476953,
            'Centro longitud' => -103.315367323181
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

} // Clase JoyasDelDesierto

?>
