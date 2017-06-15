<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon BraulioFernandezAguirre
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
 * Clase BraulioFernandezAguirre
 */
class BraulioFernandezAguirre extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Braulio Fernández Aguirre';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'braulio-fernandez-aguirre';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Braulio Fernández Aguirre en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Braulio Fernández Aguirre';
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
                    'Población total' => 3194,
                    'Porcentaje de población masculina' => 50.80,
                    'Porcentaje de población femenina' => 49.20,
                    'Porcentaje de población de 0 a 14 años' => 28.90,
                    'Porcentaje de población de 15 a 64 años' => 62.57,
                    'Porcentaje de población de 65 y más años' => 8.13,
                    'Porcentaje de población no especificada' => 0.40,
                    'Fecundidad promedio' => 2.82,
                    'Porcentaje de población con discapacidad' => 13.15
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.61,
                    'Población Económicamente Activa masculina' => 69.87,
                    'Población Económicamente Activa femenina' => 30.13,
                    'Población Ocupada' => 86.20,
                    'Población Ocupada masculina' => 68.26,
                    'Población Ocupada femenina' => 31.74,
                    'Población Desocupada' => 13.80,
                    'Derechohabiencia' => 69.19
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 813,
                    'Ocupación por Vivienda' => 3.93,
                    'Viviendas con Electricidad' => 99.97,
                    'Viviendas con Agua' => 99.60,
                    'Viviendas con Drenaje' => 99.73,
                    'Viviendas con Televisión' => 97.38,
                    'Viviendas con Automóvil' => 37.63,
                    'Viviendas con Computadora' => 19.02
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 104,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 37.50,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 18.27,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 17.31,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 12.50,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 5.77
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
            'Centro latitud'  => 25.5110423722644,
            'Centro longitud' => -103.43112888401
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

} // Clase BraulioFernandezAguirre

?>
