<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon CiudadNazasPoligono24
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
 * Clase CiudadNazasPoligono24
 */
class CiudadNazasPoligono24 extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ciudad Nazas Polígono 24';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'ciudad-nazas-poligono-24';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Ciudad Nazas Polígono 24 en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Ciudad Nazas Polígono 24';
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
                    'Población total' => 2558,
                    'Porcentaje de población masculina' => 48.94,
                    'Porcentaje de población femenina' => 51.06,
                    'Porcentaje de población de 0 a 14 años' => 37.80,
                    'Porcentaje de población de 15 a 64 años' => 60.44,
                    'Porcentaje de población de 65 y más años' => 0.82,
                    'Porcentaje de población no especificada' => 0.94,
                    'Fecundidad promedio' => 1.81,
                    'Porcentaje de población con discapacidad' => 1.53
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 58.60,
                    'Población Económicamente Activa masculina' => 64.73,
                    'Población Económicamente Activa femenina' => 35.27,
                    'Población Ocupada' => 92.97,
                    'Población Ocupada masculina' => 63.82,
                    'Población Ocupada femenina' => 36.18,
                    'Población Desocupada' => 7.03,
                    'Derechohabiencia' => 77.48
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 683,
                    'Ocupación por Vivienda' => 3.75,
                    'Viviendas con Electricidad' => 99.71,
                    'Viviendas con Agua' => 99.71,
                    'Viviendas con Drenaje' => 99.71,
                    'Viviendas con Televisión' => 98.68,
                    'Viviendas con Automóvil' => 58.57,
                    'Viviendas con Computadora' => 36.16
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 29,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 51.72,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.69,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 10.34,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 6.90,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 3.45
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
            'Centro latitud'  => 25.5558576983196,
            'Centro longitud' => -103.355294987439
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

} // Clase CiudadNazasPoligono24

?>
