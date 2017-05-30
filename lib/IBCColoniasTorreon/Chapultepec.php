<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Chapultepec
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
 * Clase Chapultepec
 */
class Chapultepec extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Chapultepec';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'chapultepec';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Chapultepec en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Chapultepec';
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
                    'Población total' => 338,
                    'Porcentaje de población masculina' => 45.86,
                    'Porcentaje de población femenina' => 54.14,
                    'Porcentaje de población de 0 a 14 años' => 34.62,
                    'Porcentaje de población de 15 a 64 años' => 63.02,
                    'Porcentaje de población de 65 y más años' => 1.48,
                    'Porcentaje de población no especificada' => 0.88,
                    'Fecundidad promedio' => 1.45,
                    'Porcentaje de población con discapacidad' => 1.69
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 65.67,
                    'Población Económicamente Activa masculina' => 57.84,
                    'Población Económicamente Activa femenina' => 42.16,
                    'Población Ocupada' => 94.50,
                    'Población Ocupada masculina' => 57.81,
                    'Población Ocupada femenina' => 42.19,
                    'Población Desocupada' => 5.50,
                    'Derechohabiencia' => 84.62
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 95,
                    'Ocupación por Vivienda' => 3.56,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 95.79,
                    'Viviendas con Computadora' => 78.19
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 11,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 27.27,
                    'Segunda actividad nombre' => 'Inmobiliarios',
                    'Segunda actividad porcentaje' => 18.18,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 18.18,
                    'Cuarta actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Cuarta actividad porcentaje' => 18.18,
                    'Quinta actividad nombre' => 'Financieros y Seguros',
                    'Quinta actividad porcentaje' => 9.09
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
            'Centro latitud'  => 25.5483427652864,
            'Centro longitud' => -103.359175215759
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

} // Clase Chapultepec

?>
