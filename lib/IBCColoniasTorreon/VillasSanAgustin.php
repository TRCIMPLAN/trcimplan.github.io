<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillasSanAgustin
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
 * Clase VillasSanAgustin
 */
class VillasSanAgustin extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Villas San Agustín';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'villas-san-agustin';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Villas San Agustín en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Villas San Agustín';
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
                    'Población total' => 773,
                    'Porcentaje de población masculina' => 49.35,
                    'Porcentaje de población femenina' => 50.65,
                    'Porcentaje de población de 0 a 14 años' => 36.95,
                    'Porcentaje de población de 15 a 64 años' => 62.57,
                    'Porcentaje de población de 65 y más años' => 0.44,
                    'Porcentaje de población no especificada' => 0.04,
                    'Fecundidad promedio' => 1.70,
                    'Porcentaje de población con discapacidad' => 0.77
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 66.06,
                    'Población Económicamente Activa masculina' => 65.94,
                    'Población Económicamente Activa femenina' => 34.06,
                    'Población Ocupada' => 96.03,
                    'Población Ocupada masculina' => 65.50,
                    'Población Ocupada femenina' => 34.50,
                    'Población Desocupada' => 3.97,
                    'Derechohabiencia' => 77.87
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 234,
                    'Ocupación por Vivienda' => 3.30,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.45,
                    'Viviendas con Automóvil' => 41.53,
                    'Viviendas con Computadora' => 36.26
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 23,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 47.83,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 26.09,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 8.70,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 8.70,
                    'Quinta actividad nombre' => 'Manejo de Residuos',
                    'Quinta actividad porcentaje' => 4.35
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
            'Centro latitud'  => 25.5862822716182,
            'Centro longitud' => -103.364948395734
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

} // Clase VillasSanAgustin

?>
