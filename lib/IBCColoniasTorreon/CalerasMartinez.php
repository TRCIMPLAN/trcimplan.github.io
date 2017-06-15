<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon CalerasMartinez
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
 * Clase CalerasMartinez
 */
class CalerasMartinez extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Caleras Martínez';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'caleras-martinez';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Caleras Martínez en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Caleras Martínez';
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
                    'Población total' => 840,
                    'Porcentaje de población masculina' => 50.30,
                    'Porcentaje de población femenina' => 49.70,
                    'Porcentaje de población de 0 a 14 años' => 27.18,
                    'Porcentaje de población de 15 a 64 años' => 64.48,
                    'Porcentaje de población de 65 y más años' => 8.34,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.68,
                    'Porcentaje de población con discapacidad' => 10.33
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 47.05,
                    'Población Económicamente Activa masculina' => 79.41,
                    'Población Económicamente Activa femenina' => 20.59,
                    'Población Ocupada' => 87.10,
                    'Población Ocupada masculina' => 77.45,
                    'Población Ocupada femenina' => 22.55,
                    'Población Desocupada' => 12.90,
                    'Derechohabiencia' => 57.63
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 214,
                    'Ocupación por Vivienda' => 3.93,
                    'Viviendas con Electricidad' => 99.18,
                    'Viviendas con Agua' => 91.23,
                    'Viviendas con Drenaje' => 99.18,
                    'Viviendas con Televisión' => 96.84,
                    'Viviendas con Automóvil' => 28.28,
                    'Viviendas con Computadora' => 13.36
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 11,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 81.82,
                    'Segunda actividad nombre' => 'Educativos',
                    'Segunda actividad porcentaje' => 18.18
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
            'Centro latitud'  => 25.5292739967076,
            'Centro longitud' => -103.477915700309
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

} // Clase CalerasMartinez

?>
