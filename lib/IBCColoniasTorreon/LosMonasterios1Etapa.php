<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LosMonasterios1Etapa
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
 * Clase LosMonasterios1Etapa
 */
class LosMonasterios1Etapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Los Monasterios 1° Etapa';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'los-monasterios-1-etapa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Los Monasterios 1° Etapa en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Los Monasterios 1° Etapa';
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
                    'Población total' => 389,
                    'Porcentaje de población masculina' => 46.91,
                    'Porcentaje de población femenina' => 53.09,
                    'Porcentaje de población de 0 a 14 años' => 38.70,
                    'Porcentaje de población de 15 a 64 años' => 60.19,
                    'Porcentaje de población de 65 y más años' => 1.08,
                    'Porcentaje de población no especificada' => 0.03,
                    'Fecundidad promedio' => 2.11,
                    'Porcentaje de población con discapacidad' => 1.59
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.41,
                    'Población Económicamente Activa masculina' => 65.70,
                    'Población Económicamente Activa femenina' => 34.30,
                    'Población Ocupada' => 97.23,
                    'Población Ocupada masculina' => 64.77,
                    'Población Ocupada femenina' => 35.23,
                    'Población Desocupada' => 2.77,
                    'Derechohabiencia' => 74.78
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 104,
                    'Ocupación por Vivienda' => 3.74,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.40,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.40,
                    'Viviendas con Automóvil' => 40.79,
                    'Viviendas con Computadora' => 20.99
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 18,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 38.89,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 22.22,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 22.22,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 11.11,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
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
            'Centro latitud'  => 25.4975034668072,
            'Centro longitud' => -103.361976784569
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

} // Clase LosMonasterios1Etapa

?>
