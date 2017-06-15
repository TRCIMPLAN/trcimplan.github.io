<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillaRomana
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
 * Clase VillaRomana
 */
class VillaRomana extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Villa Romana';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'villa-romana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villa Romana en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Villa Romana';
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
                    'Población total' => 139,
                    'Porcentaje de población masculina' => 53.24,
                    'Porcentaje de población femenina' => 46.76,
                    'Porcentaje de población de 0 a 14 años' => 24.92,
                    'Porcentaje de población de 15 a 64 años' => 59.86,
                    'Porcentaje de población de 65 y más años' => 2.21,
                    'Porcentaje de población no especificada' => 13.01,
                    'Fecundidad promedio' => 1.47,
                    'Porcentaje de población con discapacidad' => 1.12
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.64,
                    'Población Económicamente Activa masculina' => 58.57,
                    'Población Económicamente Activa femenina' => 41.43,
                    'Población Ocupada' => 96.04,
                    'Población Ocupada masculina' => 56.94,
                    'Población Ocupada femenina' => 43.06,
                    'Población Desocupada' => 3.96,
                    'Derechohabiencia' => 75.01
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 39,
                    'Ocupación por Vivienda' => 3.56,
                    'Viviendas con Electricidad' => 93.61,
                    'Viviendas con Agua' => 93.59,
                    'Viviendas con Drenaje' => 93.53,
                    'Viviendas con Televisión' => 93.60,
                    'Viviendas con Automóvil' => 85.42,
                    'Viviendas con Computadora' => 80.03
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 3,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 33.33,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 33.33,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 33.33
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
            'Centro latitud'  => 25.5944310129043,
            'Centro longitud' => -103.417100990332
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

} // Clase VillaRomana

?>
