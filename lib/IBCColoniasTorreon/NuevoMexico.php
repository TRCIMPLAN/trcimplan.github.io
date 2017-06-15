<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon NuevoMexico
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
 * Clase NuevoMexico
 */
class NuevoMexico extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Nuevo México';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'nuevo-mexico';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Nuevo México en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Nuevo México';
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
                    'Población total' => 329,
                    'Porcentaje de población masculina' => 51.41,
                    'Porcentaje de población femenina' => 48.59,
                    'Porcentaje de población de 0 a 14 años' => 26.93,
                    'Porcentaje de población de 15 a 64 años' => 62.91,
                    'Porcentaje de población de 65 y más años' => 10.16,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.64,
                    'Porcentaje de población con discapacidad' => 5.13
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 46.97,
                    'Población Económicamente Activa masculina' => 79.94,
                    'Población Económicamente Activa femenina' => 20.06,
                    'Población Ocupada' => 81.39,
                    'Población Ocupada masculina' => 77.99,
                    'Población Ocupada femenina' => 22.01,
                    'Población Desocupada' => 18.61,
                    'Derechohabiencia' => 67.79
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 86,
                    'Ocupación por Vivienda' => 3.83,
                    'Viviendas con Electricidad' => 98.64,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 99.82,
                    'Viviendas con Televisión' => 98.45,
                    'Viviendas con Automóvil' => 9.78,
                    'Viviendas con Computadora' => 10.96
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 1,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 100.00
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
            'Centro latitud'  => 25.5295236574047,
            'Centro longitud' => -103.455858966907
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

} // Clase NuevoMexico

?>
