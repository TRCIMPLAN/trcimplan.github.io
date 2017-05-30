<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LaAmistad
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
 * Clase LaAmistad
 */
class LaAmistad extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Amistad';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-amistad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia La Amistad en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, La Amistad';
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
                    'Población total' => 490,
                    'Porcentaje de población masculina' => 50.70,
                    'Porcentaje de población femenina' => 49.30,
                    'Porcentaje de población de 0 a 14 años' => 27.25,
                    'Porcentaje de población de 15 a 64 años' => 66.36,
                    'Porcentaje de población de 65 y más años' => 5.75,
                    'Porcentaje de población no especificada' => 0.64,
                    'Fecundidad promedio' => 2.31,
                    'Porcentaje de población con discapacidad' => 5.70
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.94,
                    'Población Económicamente Activa masculina' => 70.11,
                    'Población Económicamente Activa femenina' => 29.89,
                    'Población Ocupada' => 94.53,
                    'Población Ocupada masculina' => 68.48,
                    'Población Ocupada femenina' => 31.52,
                    'Población Desocupada' => 5.47,
                    'Derechohabiencia' => 65.00
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 125,
                    'Ocupación por Vivienda' => 3.92,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 96.93,
                    'Viviendas con Automóvil' => 60.44,
                    'Viviendas con Computadora' => 44.58
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 41,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 36.59,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 17.07,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 17.07,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 7.32,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 7.32
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
            'Centro latitud'  => 25.5353562751109,
            'Centro longitud' => -103.359040053864
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

} // Clase LaAmistad

?>
