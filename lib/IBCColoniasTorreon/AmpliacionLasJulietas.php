<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon AmpliacionLasJulietas
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
 * Clase AmpliacionLasJulietas
 */
class AmpliacionLasJulietas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ampliación Las Julietas';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'ampliacion-las-julietas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Ampliación Las Julietas en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Ampliación Las Julietas';
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
                    'Población total' => 1017,
                    'Porcentaje de población masculina' => 50.54,
                    'Porcentaje de población femenina' => 49.46,
                    'Porcentaje de población de 0 a 14 años' => 32.74,
                    'Porcentaje de población de 15 a 64 años' => 61.46,
                    'Porcentaje de población de 65 y más años' => 4.03,
                    'Porcentaje de población no especificada' => 1.77,
                    'Fecundidad promedio' => 2.32,
                    'Porcentaje de población con discapacidad' => 2.16
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.97,
                    'Población Económicamente Activa masculina' => 69.68,
                    'Población Económicamente Activa femenina' => 30.32,
                    'Población Ocupada' => 89.85,
                    'Población Ocupada masculina' => 67.39,
                    'Población Ocupada femenina' => 32.61,
                    'Población Desocupada' => 10.15,
                    'Derechohabiencia' => 61.55
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 250,
                    'Ocupación por Vivienda' => 4.07,
                    'Viviendas con Electricidad' => 99.20,
                    'Viviendas con Agua' => 98.40,
                    'Viviendas con Drenaje' => 96.80,
                    'Viviendas con Televisión' => 98.00,
                    'Viviendas con Automóvil' => 53.60,
                    'Viviendas con Computadora' => 27.86
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 18,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 27.78,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 27.78,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 11.11,
                    'Quinta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Quinta actividad porcentaje' => 5.56
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
            'Centro latitud'  => 25.5007717731445,
            'Centro longitud' => -103.398792187804
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

} // Clase AmpliacionLasJulietas

?>
