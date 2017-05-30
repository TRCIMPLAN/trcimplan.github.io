<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LasFloresCooperativaHabitacional
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
 * Clase LasFloresCooperativaHabitacional
 */
class LasFloresCooperativaHabitacional extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Las Flores Cooperativa Habitacional';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'las-flores-cooperativa-habitacional';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Las Flores Cooperativa Habitacional en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Las Flores Cooperativa Habitacional';
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
                    'Población total' => 159,
                    'Porcentaje de población masculina' => 45.28,
                    'Porcentaje de población femenina' => 54.72,
                    'Porcentaje de población de 0 a 14 años' => 23.90,
                    'Porcentaje de población de 15 a 64 años' => 69.81,
                    'Porcentaje de población de 65 y más años' => 6.29,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.88,
                    'Porcentaje de población con discapacidad' => 5.95
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.47,
                    'Población Económicamente Activa masculina' => 61.97,
                    'Población Económicamente Activa femenina' => 38.03,
                    'Población Ocupada' => 98.57,
                    'Población Ocupada masculina' => 62.86,
                    'Población Ocupada femenina' => 37.14,
                    'Población Desocupada' => 1.43,
                    'Derechohabiencia' => 71.70
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 41,
                    'Ocupación por Vivienda' => 3.88,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 87.80,
                    'Viviendas con Computadora' => 70.73
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
            'Centro latitud'  => 25.525810168232,
            'Centro longitud' => -103.383048687245
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

} // Clase LasFloresCooperativaHabitacional

?>
