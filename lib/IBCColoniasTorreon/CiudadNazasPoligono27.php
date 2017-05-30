<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon CiudadNazasPoligono27
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
 * Clase CiudadNazasPoligono27
 */
class CiudadNazasPoligono27 extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ciudad Nazas Polígono 27';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'ciudad-nazas-poligono-27';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Ciudad Nazas Polígono 27 en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Ciudad Nazas Polígono 27';
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
                    'Población total' => 2082,
                    'Porcentaje de población masculina' => 48.32,
                    'Porcentaje de población femenina' => 51.68,
                    'Porcentaje de población de 0 a 14 años' => 36.41,
                    'Porcentaje de población de 15 a 64 años' => 61.91,
                    'Porcentaje de población de 65 y más años' => 1.25,
                    'Porcentaje de población no especificada' => 0.43,
                    'Fecundidad promedio' => 1.84,
                    'Porcentaje de población con discapacidad' => 1.35
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.78,
                    'Población Económicamente Activa masculina' => 66.02,
                    'Población Económicamente Activa femenina' => 33.98,
                    'Población Ocupada' => 92.36,
                    'Población Ocupada masculina' => 64.80,
                    'Población Ocupada femenina' => 35.20,
                    'Población Desocupada' => 7.64,
                    'Derechohabiencia' => 75.79
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 521,
                    'Ocupación por Vivienda' => 4.00,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.42,
                    'Viviendas con Drenaje' => 99.04,
                    'Viviendas con Televisión' => 99.04,
                    'Viviendas con Automóvil' => 54.70,
                    'Viviendas con Computadora' => 36.47
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 39,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 30.77,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 28.21,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 23.08,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 7.69,
                    'Quinta actividad nombre' => 'Inmobiliarios',
                    'Quinta actividad porcentaje' => 2.56
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
            'Centro latitud'  => 25.544123776546,
            'Centro longitud' => -103.354710757237
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

} // Clase CiudadNazasPoligono27

?>
