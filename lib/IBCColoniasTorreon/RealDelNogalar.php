<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon RealDelNogalar
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
 * Clase RealDelNogalar
 */
class RealDelNogalar extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Real Del Nogalar';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'real-del-nogalar';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Real Del Nogalar en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Real Del Nogalar';
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
                    'Población total' => 1,
                    'Porcentaje de población masculina' => 51.68,
                    'Porcentaje de población femenina' => 48.32,
                    'Porcentaje de población de 0 a 14 años' => 32.22,
                    'Porcentaje de población de 15 a 64 años' => 58.70,
                    'Porcentaje de población de 65 y más años' => 1.95,
                    'Porcentaje de población no especificada' => 7.13,
                    'Fecundidad promedio' => 1.66,
                    'Porcentaje de población con discapacidad' => 1.73
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.10,
                    'Población Económicamente Activa masculina' => 63.38,
                    'Población Económicamente Activa femenina' => 36.62,
                    'Población Ocupada' => 95.74,
                    'Población Ocupada masculina' => 62.97,
                    'Población Ocupada femenina' => 37.03,
                    'Población Desocupada' => 4.26,
                    'Derechohabiencia' => 73.41
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 0
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
            'Centro latitud'  => 25.6018915071148,
            'Centro longitud' => -103.392569636667
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

} // Clase RealDelNogalar

?>
