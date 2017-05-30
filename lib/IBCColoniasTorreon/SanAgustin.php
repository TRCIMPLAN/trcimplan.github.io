<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon SanAgustin
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
 * Clase SanAgustin
 */
class SanAgustin extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'San Agustín';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'san-agustin';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia San Agustín en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, San Agustín';
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
                    'Población total' => 902,
                    'Porcentaje de población masculina' => 51.20,
                    'Porcentaje de población femenina' => 48.80,
                    'Porcentaje de población de 0 a 14 años' => 36.95,
                    'Porcentaje de población de 15 a 64 años' => 59.69,
                    'Porcentaje de población de 65 y más años' => 2.31,
                    'Porcentaje de población no especificada' => 1.05,
                    'Fecundidad promedio' => 2.04,
                    'Porcentaje de población con discapacidad' => 7.51
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.68,
                    'Población Económicamente Activa masculina' => 61.03,
                    'Población Económicamente Activa femenina' => 38.97,
                    'Población Ocupada' => 86.82,
                    'Población Ocupada masculina' => 57.67,
                    'Población Ocupada femenina' => 42.33,
                    'Población Desocupada' => 13.18,
                    'Derechohabiencia' => 53.55
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 258,
                    'Ocupación por Vivienda' => 3.50,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 97.20,
                    'Viviendas con Drenaje' => 88.28,
                    'Viviendas con Televisión' => 97.58,
                    'Viviendas con Automóvil' => 49.61,
                    'Viviendas con Computadora' => 25.31
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 14,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 57.14,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 14.29,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 7.14,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 7.14,
                    'Quinta actividad nombre' => 'Construcción',
                    'Quinta actividad porcentaje' => 7.14
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
            'Centro latitud'  => 25.5821939218164,
            'Centro longitud' => -103.367314395466
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

} // Clase SanAgustin

?>
