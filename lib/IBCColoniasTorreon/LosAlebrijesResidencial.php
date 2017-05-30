<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LosAlebrijesResidencial
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
 * Clase LosAlebrijesResidencial
 */
class LosAlebrijesResidencial extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Los Alebrijes Residencial';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'los-alebrijes-residencial';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Los Alebrijes Residencial en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Los Alebrijes Residencial';
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
                    'Población total' => 221,
                    'Porcentaje de población masculina' => 48.42,
                    'Porcentaje de población femenina' => 51.58,
                    'Porcentaje de población de 0 a 14 años' => 24.43,
                    'Porcentaje de población de 15 a 64 años' => 65.61,
                    'Porcentaje de población de 65 y más años' => 1.81,
                    'Porcentaje de población no especificada' => 8.15,
                    'Fecundidad promedio' => 1.47,
                    'Porcentaje de población con discapacidad' => 0.00
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 64.78,
                    'Población Económicamente Activa masculina' => 53.40,
                    'Población Económicamente Activa femenina' => 46.60,
                    'Población Ocupada' => 94.91,
                    'Población Ocupada masculina' => 53.06,
                    'Población Ocupada femenina' => 46.94,
                    'Población Desocupada' => 5.09,
                    'Derechohabiencia' => 83.71
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 66,
                    'Ocupación por Vivienda' => 3.35,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 96.97,
                    'Viviendas con Computadora' => 86.36
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
            'Centro latitud'  => 25.6011728332659,
            'Centro longitud' => -103.378461413448
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

} // Clase LosAlebrijesResidencial

?>
