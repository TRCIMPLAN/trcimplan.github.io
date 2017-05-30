<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ResidencialLosFresnos
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
 * Clase ResidencialLosFresnos
 */
class ResidencialLosFresnos extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Residencial Los Fresnos';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'residencial-los-fresnos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Residencial Los Fresnos en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Residencial Los Fresnos';
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
                    'Población total' => 936,
                    'Porcentaje de población masculina' => 46.58,
                    'Porcentaje de población femenina' => 53.42,
                    'Porcentaje de población de 0 a 14 años' => 27.56,
                    'Porcentaje de población de 15 a 64 años' => 69.23,
                    'Porcentaje de población de 65 y más años' => 2.46,
                    'Porcentaje de población no especificada' => 0.75,
                    'Fecundidad promedio' => 1.54,
                    'Porcentaje de población con discapacidad' => 1.39
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.05,
                    'Población Económicamente Activa masculina' => 66.76,
                    'Población Económicamente Activa femenina' => 33.24,
                    'Población Ocupada' => 98.31,
                    'Población Ocupada masculina' => 66.48,
                    'Población Ocupada femenina' => 33.52,
                    'Población Desocupada' => 1.69,
                    'Derechohabiencia' => 88.57
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 235,
                    'Ocupación por Vivienda' => 3.98,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 99.57,
                    'Viviendas con Televisión' => 97.87,
                    'Viviendas con Automóvil' => 97.87,
                    'Viviendas con Computadora' => 92.77
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
            'Centro latitud'  => 25.5743218397115,
            'Centro longitud' => -103.402280433689
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

} // Clase ResidencialLosFresnos

?>
