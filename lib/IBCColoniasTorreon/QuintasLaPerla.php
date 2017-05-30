<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon QuintasLaPerla
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
 * Clase QuintasLaPerla
 */
class QuintasLaPerla extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Quintas La Perla';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'quintas-la-perla';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Quintas La Perla en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Quintas La Perla';
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
                    'Población total' => 212,
                    'Porcentaje de población masculina' => 48.08,
                    'Porcentaje de población femenina' => 51.92,
                    'Porcentaje de población de 0 a 14 años' => 35.44,
                    'Porcentaje de población de 15 a 64 años' => 63.56,
                    'Porcentaje de población de 65 y más años' => 0.51,
                    'Porcentaje de población no especificada' => 0.49,
                    'Fecundidad promedio' => 1.22,
                    'Porcentaje de población con discapacidad' => 1.45
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 74.02,
                    'Población Económicamente Activa masculina' => 56.95,
                    'Población Económicamente Activa femenina' => 43.05,
                    'Población Ocupada' => 99.91,
                    'Población Ocupada masculina' => 56.92,
                    'Población Ocupada femenina' => 43.08,
                    'Población Desocupada' => 0.09,
                    'Derechohabiencia' => 89.66
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 70,
                    'Ocupación por Vivienda' => 3.03,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 93.33,
                    'Viviendas con Automóvil' => 84.00,
                    'Viviendas con Computadora' => 53.57
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 2,
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
            'Centro latitud'  => 25.5022985749197,
            'Centro longitud' => -103.352956064736
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

} // Clase QuintasLaPerla

?>
