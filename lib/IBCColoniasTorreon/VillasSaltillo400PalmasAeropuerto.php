<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillasSaltillo400PalmasAeropuerto
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
 * Clase VillasSaltillo400PalmasAeropuerto
 */
class VillasSaltillo400PalmasAeropuerto extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Villas Saltillo 400 - Palmas Aeropuerto';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'villas-saltillo-400-palmas-aeropuerto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Villas Saltillo 400 - Palmas Aeropuerto en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Villas Saltillo 400 - Palmas Aeropuerto';
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
                    'Población total' => 395,
                    'Porcentaje de población masculina' => 51.14,
                    'Porcentaje de población femenina' => 48.86,
                    'Porcentaje de población de 0 a 14 años' => 25.32,
                    'Porcentaje de población de 15 a 64 años' => 66.58,
                    'Porcentaje de población de 65 y más años' => 2.78,
                    'Porcentaje de población no especificada' => 5.32,
                    'Fecundidad promedio' => 1.57,
                    'Porcentaje de población con discapacidad' => 1.27
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.45,
                    'Población Económicamente Activa masculina' => 60.57,
                    'Población Económicamente Activa femenina' => 39.43,
                    'Población Ocupada' => 91.36,
                    'Población Ocupada masculina' => 60.25,
                    'Población Ocupada femenina' => 39.75,
                    'Población Desocupada' => 8.64,
                    'Derechohabiencia' => 79.24
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 102,
                    'Ocupación por Vivienda' => 3.87,
                    'Viviendas con Electricidad' => 99.02,
                    'Viviendas con Agua' => 99.02,
                    'Viviendas con Drenaje' => 99.02,
                    'Viviendas con Televisión' => 99.02,
                    'Viviendas con Automóvil' => 82.35,
                    'Viviendas con Computadora' => 73.53
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 10,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.00,
                    'Segunda actividad nombre' => 'Industria Manufacturera',
                    'Segunda actividad porcentaje' => 30.00,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 20.00,
                    'Cuarta actividad nombre' => 'Financieros y Seguros',
                    'Cuarta actividad porcentaje' => 10.00
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
            'Centro latitud'  => 25.5493966284435,
            'Centro longitud' => -103.40486159434
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

} // Clase VillasSaltillo400PalmasAeropuerto

?>
