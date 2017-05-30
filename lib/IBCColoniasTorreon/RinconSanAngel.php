<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon RinconSanAngel
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
 * Clase RinconSanAngel
 */
class RinconSanAngel extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Rincón San Ángel';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'rincon-san-angel';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Rincón San Ángel en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Rincón San Ángel';
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
                    'Población total' => 461,
                    'Porcentaje de población masculina' => 50.76,
                    'Porcentaje de población femenina' => 49.24,
                    'Porcentaje de población de 0 a 14 años' => 31.67,
                    'Porcentaje de población de 15 a 64 años' => 57.48,
                    'Porcentaje de población de 65 y más años' => 4.34,
                    'Porcentaje de población no especificada' => 6.51,
                    'Fecundidad promedio' => 1.80,
                    'Porcentaje de población con discapacidad' => 1.08
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.48,
                    'Población Económicamente Activa masculina' => 65.70,
                    'Población Económicamente Activa femenina' => 34.30,
                    'Población Ocupada' => 97.01,
                    'Población Ocupada masculina' => 66.47,
                    'Población Ocupada femenina' => 33.53,
                    'Población Desocupada' => 2.99,
                    'Derechohabiencia' => 73.75
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 108,
                    'Ocupación por Vivienda' => 4.27,
                    'Viviendas con Electricidad' => 99.07,
                    'Viviendas con Agua' => 98.15,
                    'Viviendas con Drenaje' => 97.22,
                    'Viviendas con Televisión' => 93.52,
                    'Viviendas con Automóvil' => 90.68,
                    'Viviendas con Computadora' => 82.41
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 25,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 48.00,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 8.00,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 8.00,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 4.00
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
            'Centro latitud'  => 25.5996733822493,
            'Centro longitud' => -103.404965483009
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

} // Clase RinconSanAngel

?>
