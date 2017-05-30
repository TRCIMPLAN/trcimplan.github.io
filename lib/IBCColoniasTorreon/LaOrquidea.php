<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LaOrquidea
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
 * Clase LaOrquidea
 */
class LaOrquidea extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Orquídea';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-orquidea';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia La Orquídea en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, La Orquídea';
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
                    'Población total' => 77,
                    'Porcentaje de población masculina' => 47.81,
                    'Porcentaje de población femenina' => 52.19,
                    'Porcentaje de población de 0 a 14 años' => 24.22,
                    'Porcentaje de población de 15 a 64 años' => 66.28,
                    'Porcentaje de población de 65 y más años' => 9.47,
                    'Porcentaje de población no especificada' => 0.03,
                    'Fecundidad promedio' => 3.03,
                    'Porcentaje de población con discapacidad' => 19.54
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.29,
                    'Población Económicamente Activa masculina' => 65.05,
                    'Población Económicamente Activa femenina' => 34.95,
                    'Población Ocupada' => 96.65,
                    'Población Ocupada masculina' => 63.93,
                    'Población Ocupada femenina' => 36.07,
                    'Población Desocupada' => 3.35,
                    'Derechohabiencia' => 58.44
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 22,
                    'Ocupación por Vivienda' => 3.50,
                    'Viviendas con Electricidad' => 99.53,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 94.93,
                    'Viviendas con Automóvil' => 72.47,
                    'Viviendas con Computadora' => 17.97
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 1,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 100.00
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
            'Centro latitud'  => 25.5254206393336,
            'Centro longitud' => -103.377511045102
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

} // Clase LaOrquidea

?>
