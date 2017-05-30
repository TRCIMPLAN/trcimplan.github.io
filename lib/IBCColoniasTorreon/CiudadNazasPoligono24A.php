<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon CiudadNazasPoligono24A
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
 * Clase CiudadNazasPoligono24A
 */
class CiudadNazasPoligono24A extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ciudad Nazas Polígono 24A';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'ciudad-nazas-poligono-24a';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Ciudad Nazas Polígono 24A en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Ciudad Nazas Polígono 24A';
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
                    'Población total' => 655,
                    'Porcentaje de población masculina' => 50.84,
                    'Porcentaje de población femenina' => 49.16,
                    'Porcentaje de población de 0 a 14 años' => 38.78,
                    'Porcentaje de población de 15 a 64 años' => 59.69,
                    'Porcentaje de población de 65 y más años' => 1.53,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.05,
                    'Porcentaje de población con discapacidad' => 3.75
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.93,
                    'Población Económicamente Activa masculina' => 70.00,
                    'Población Económicamente Activa femenina' => 30.00,
                    'Población Ocupada' => 93.36,
                    'Población Ocupada masculina' => 68.89,
                    'Población Ocupada femenina' => 31.11,
                    'Población Desocupada' => 6.64,
                    'Derechohabiencia' => 71.45
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 162,
                    'Ocupación por Vivienda' => 4.04,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.38,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.38,
                    'Viviendas con Automóvil' => 50.62,
                    'Viviendas con Computadora' => 27.64
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 8,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Manejo de Residuos',
                    'Segunda actividad porcentaje' => 12.50,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 12.50,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 12.50,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 12.50
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
            'Centro latitud'  => 25.55884560079,
            'Centro longitud' => -103.353903507257
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

} // Clase CiudadNazasPoligono24A

?>
