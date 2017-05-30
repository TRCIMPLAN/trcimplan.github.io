<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LasQuintas
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
 * Clase LasQuintas
 */
class LasQuintas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Las Quintas';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'las-quintas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Las Quintas en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Las Quintas';
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
                    'Población total' => 535,
                    'Porcentaje de población masculina' => 46.73,
                    'Porcentaje de población femenina' => 53.27,
                    'Porcentaje de población de 0 a 14 años' => 27.66,
                    'Porcentaje de población de 15 a 64 años' => 66.73,
                    'Porcentaje de población de 65 y más años' => 1.68,
                    'Porcentaje de población no especificada' => 3.93,
                    'Fecundidad promedio' => 1.49,
                    'Porcentaje de población con discapacidad' => 0.99
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.87,
                    'Población Económicamente Activa masculina' => 57.50,
                    'Población Económicamente Activa femenina' => 42.50,
                    'Población Ocupada' => 98.56,
                    'Población Ocupada masculina' => 56.89,
                    'Población Ocupada femenina' => 43.11,
                    'Población Desocupada' => 1.44,
                    'Derechohabiencia' => 85.79
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 124,
                    'Ocupación por Vivienda' => 4.31,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.19,
                    'Viviendas con Drenaje' => 97.58,
                    'Viviendas con Televisión' => 98.39,
                    'Viviendas con Automóvil' => 97.58,
                    'Viviendas con Computadora' => 95.16
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 0
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
            'Centro latitud'  => 25.593656294103,
            'Centro longitud' => -103.409991252014
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

} // Clase LasQuintas

?>
