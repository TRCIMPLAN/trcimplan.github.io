<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon CiudadNazasPoligono30
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
 * Clase CiudadNazasPoligono30
 */
class CiudadNazasPoligono30 extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ciudad Nazas Polígono 30';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'ciudad-nazas-poligono-30';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Ciudad Nazas Polígono 30 en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Ciudad Nazas Polígono 30';
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
                    'Población total' => 2395,
                    'Porcentaje de población masculina' => 48.52,
                    'Porcentaje de población femenina' => 51.48,
                    'Porcentaje de población de 0 a 14 años' => 35.28,
                    'Porcentaje de población de 15 a 64 años' => 61.75,
                    'Porcentaje de población de 65 y más años' => 2.71,
                    'Porcentaje de población no especificada' => 0.26,
                    'Fecundidad promedio' => 1.83,
                    'Porcentaje de población con discapacidad' => 1.54
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.88,
                    'Población Económicamente Activa masculina' => 60.99,
                    'Población Económicamente Activa femenina' => 39.01,
                    'Población Ocupada' => 93.41,
                    'Población Ocupada masculina' => 59.98,
                    'Población Ocupada femenina' => 40.02,
                    'Población Desocupada' => 6.59,
                    'Derechohabiencia' => 76.70
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 602,
                    'Ocupación por Vivienda' => 3.98,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.67,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.34,
                    'Viviendas con Automóvil' => 52.49,
                    'Viviendas con Computadora' => 39.62
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 57,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.35,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 15.79,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 14.04,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 12.28,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 7.02
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
            'Centro latitud'  => 25.541222674802,
            'Centro longitud' => -103.355799593969
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

} // Clase CiudadNazasPoligono30

?>
