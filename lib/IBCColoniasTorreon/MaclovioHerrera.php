<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon MaclovioHerrera
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
 * Clase MaclovioHerrera
 */
class MaclovioHerrera extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Maclovio Herrera';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'maclovio-herrera';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Maclovio Herrera en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Maclovio Herrera';
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
                    'Población total' => 665,
                    'Porcentaje de población masculina' => 50.83,
                    'Porcentaje de población femenina' => 49.17,
                    'Porcentaje de población de 0 a 14 años' => 29.01,
                    'Porcentaje de población de 15 a 64 años' => 63.08,
                    'Porcentaje de población de 65 y más años' => 7.90,
                    'Porcentaje de población no especificada' => 0.01,
                    'Fecundidad promedio' => 2.61,
                    'Porcentaje de población con discapacidad' => 11.87
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.32,
                    'Población Económicamente Activa masculina' => 64.84,
                    'Población Económicamente Activa femenina' => 35.16,
                    'Población Ocupada' => 93.39,
                    'Población Ocupada masculina' => 63.27,
                    'Población Ocupada femenina' => 36.73,
                    'Población Desocupada' => 6.61,
                    'Derechohabiencia' => 56.71
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 168,
                    'Ocupación por Vivienda' => 3.96,
                    'Viviendas con Electricidad' => 98.21,
                    'Viviendas con Agua' => 91.07,
                    'Viviendas con Drenaje' => 98.21,
                    'Viviendas con Televisión' => 93.97,
                    'Viviendas con Automóvil' => 21.29,
                    'Viviendas con Computadora' => 15.79
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 17,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 52.94,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 23.53,
                    'Tercera actividad nombre' => 'Gubernamentales',
                    'Tercera actividad porcentaje' => 5.88,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 5.88,
                    'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Quinta actividad porcentaje' => 5.88
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
            'Centro latitud'  => 25.5427688377538,
            'Centro longitud' => -103.472566828535
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

} // Clase MaclovioHerrera

?>
