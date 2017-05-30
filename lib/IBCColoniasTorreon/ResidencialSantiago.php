<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ResidencialSantiago
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
 * Clase ResidencialSantiago
 */
class ResidencialSantiago extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Residencial Santiago';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'residencial-santiago';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Residencial Santiago en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Residencial Santiago';
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
                    'Población total' => 348,
                    'Porcentaje de población masculina' => 50.57,
                    'Porcentaje de población femenina' => 49.43,
                    'Porcentaje de población de 0 a 14 años' => 34.77,
                    'Porcentaje de población de 15 a 64 años' => 61.78,
                    'Porcentaje de población de 65 y más años' => 2.59,
                    'Porcentaje de población no especificada' => 0.86,
                    'Fecundidad promedio' => 2.08,
                    'Porcentaje de población con discapacidad' => 2.76
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 62.14,
                    'Población Económicamente Activa masculina' => 70.20,
                    'Población Económicamente Activa femenina' => 29.80,
                    'Población Ocupada' => 96.58,
                    'Población Ocupada masculina' => 71.23,
                    'Población Ocupada femenina' => 28.77,
                    'Población Desocupada' => 3.42,
                    'Derechohabiencia' => 83.33
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 104,
                    'Ocupación por Vivienda' => 3.35,
                    'Viviendas con Electricidad' => 99.04,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 99.04,
                    'Viviendas con Televisión' => 96.15,
                    'Viviendas con Automóvil' => 50.18,
                    'Viviendas con Computadora' => 35.73
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 6,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Educativos',
                    'Segunda actividad porcentaje' => 50.00
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
            'Centro latitud'  => 25.5512942711696,
            'Centro longitud' => -103.380353652145
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

} // Clase ResidencialSantiago

?>
