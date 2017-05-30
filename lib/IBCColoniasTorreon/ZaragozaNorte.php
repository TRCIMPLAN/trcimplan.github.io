<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ZaragozaNorte
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
 * Clase ZaragozaNorte
 */
class ZaragozaNorte extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Zaragoza Norte';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'zaragoza-norte';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Zaragoza Norte en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Zaragoza Norte';
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
                    'Población total' => 131,
                    'Porcentaje de población masculina' => 47.24,
                    'Porcentaje de población femenina' => 52.76,
                    'Porcentaje de población de 0 a 14 años' => 42.95,
                    'Porcentaje de población de 15 a 64 años' => 55.32,
                    'Porcentaje de población de 65 y más años' => 0.90,
                    'Porcentaje de población no especificada' => 0.83,
                    'Fecundidad promedio' => 2.34,
                    'Porcentaje de población con discapacidad' => 3.04
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.62,
                    'Población Económicamente Activa masculina' => 69.21,
                    'Población Económicamente Activa femenina' => 30.79,
                    'Población Ocupada' => 84.96,
                    'Población Ocupada masculina' => 69.51,
                    'Población Ocupada femenina' => 30.49,
                    'Población Desocupada' => 15.04,
                    'Derechohabiencia' => 74.92
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 31,
                    'Ocupación por Vivienda' => 4.23,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 94.03,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 49.33,
                    'Viviendas con Computadora' => 38.03
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 1,
                    'Primer actividad nombre' => 'Comercio Menudeo',
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
            'Centro latitud'  => 25.5171776047164,
            'Centro longitud' => -103.35850740715
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

} // Clase ZaragozaNorte

?>
