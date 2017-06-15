<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon QuintasSanAntonioIii
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
 * Clase QuintasSanAntonioIii
 */
class QuintasSanAntonioIii extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Quintas San Antonio III';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'quintas-san-antonio-iii';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Quintas San Antonio III en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Quintas San Antonio III';
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
                    'Población total' => 425,
                    'Porcentaje de población masculina' => 51.29,
                    'Porcentaje de población femenina' => 48.71,
                    'Porcentaje de población de 0 a 14 años' => 36.24,
                    'Porcentaje de población de 15 a 64 años' => 61.65,
                    'Porcentaje de población de 65 y más años' => 1.18,
                    'Porcentaje de población no especificada' => 0.93,
                    'Fecundidad promedio' => 1.77,
                    'Porcentaje de población con discapacidad' => 3.67
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 59.80,
                    'Población Económicamente Activa masculina' => 63.84,
                    'Población Económicamente Activa femenina' => 36.16,
                    'Población Ocupada' => 98.86,
                    'Población Ocupada masculina' => 63.43,
                    'Población Ocupada femenina' => 36.57,
                    'Población Desocupada' => 1.14,
                    'Derechohabiencia' => 83.06
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 116,
                    'Ocupación por Vivienda' => 3.66,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 79.31,
                    'Viviendas con Computadora' => 61.46
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 10,
                    'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Primer actividad porcentaje' => 30.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 10.00,
                    'Cuarta actividad nombre' => 'Comercio Menudeo',
                    'Cuarta actividad porcentaje' => 10.00,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 10.00
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
            'Centro latitud'  => 25.5568234205618,
            'Centro longitud' => -103.383432199241
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

} // Clase QuintasSanAntonioIii

?>
