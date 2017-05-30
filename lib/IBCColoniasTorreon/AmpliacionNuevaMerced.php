<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon AmpliacionNuevaMerced
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
 * Clase AmpliacionNuevaMerced
 */
class AmpliacionNuevaMerced extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ampliación Nueva Merced';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'ampliacion-nueva-merced';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Ampliación Nueva Merced en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Ampliación Nueva Merced';
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
                    'Población total' => 2179,
                    'Porcentaje de población masculina' => 50.07,
                    'Porcentaje de población femenina' => 49.93,
                    'Porcentaje de población de 0 a 14 años' => 33.83,
                    'Porcentaje de población de 15 a 64 años' => 61.99,
                    'Porcentaje de población de 65 y más años' => 3.34,
                    'Porcentaje de población no especificada' => 0.84,
                    'Fecundidad promedio' => 2.39,
                    'Porcentaje de población con discapacidad' => 4.84
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.65,
                    'Población Económicamente Activa masculina' => 69.06,
                    'Población Económicamente Activa femenina' => 30.94,
                    'Población Ocupada' => 87.11,
                    'Población Ocupada masculina' => 69.55,
                    'Población Ocupada femenina' => 30.45,
                    'Población Desocupada' => 12.89,
                    'Derechohabiencia' => 61.71
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 497,
                    'Ocupación por Vivienda' => 4.38,
                    'Viviendas con Electricidad' => 98.89,
                    'Viviendas con Agua' => 97.87,
                    'Viviendas con Drenaje' => 95.02,
                    'Viviendas con Televisión' => 95.43,
                    'Viviendas con Automóvil' => 34.73,
                    'Viviendas con Computadora' => 13.02
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 37,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 48.65,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 24.32,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 8.11,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 5.41,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 5.41
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
            'Centro latitud'  => 25.4957847398735,
            'Centro longitud' => -103.398177219495
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

} // Clase AmpliacionNuevaMerced

?>
