<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LaDaliaOriente
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
 * Clase LaDaliaOriente
 */
class LaDaliaOriente extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'La Dalia Oriente';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'la-dalia-oriente';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia La Dalia Oriente en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, La Dalia Oriente';
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
                    'Población total' => 3863,
                    'Porcentaje de población masculina' => 48.25,
                    'Porcentaje de población femenina' => 51.75,
                    'Porcentaje de población de 0 a 14 años' => 25.52,
                    'Porcentaje de población de 15 a 64 años' => 71.65,
                    'Porcentaje de población de 65 y más años' => 2.51,
                    'Porcentaje de población no especificada' => 0.32,
                    'Fecundidad promedio' => 2.03,
                    'Porcentaje de población con discapacidad' => 5.55
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.48,
                    'Población Económicamente Activa masculina' => 63.68,
                    'Población Económicamente Activa femenina' => 36.32,
                    'Población Ocupada' => 90.91,
                    'Población Ocupada masculina' => 62.99,
                    'Población Ocupada femenina' => 37.01,
                    'Población Desocupada' => 9.09,
                    'Derechohabiencia' => 76.05
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 943,
                    'Ocupación por Vivienda' => 4.10,
                    'Viviendas con Electricidad' => 99.58,
                    'Viviendas con Agua' => 99.58,
                    'Viviendas con Drenaje' => 98.94,
                    'Viviendas con Televisión' => 99.15,
                    'Viviendas con Automóvil' => 50.58,
                    'Viviendas con Computadora' => 34.46
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 45,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 46.67,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 15.56,
                    'Cuarta actividad nombre' => 'Manejo de Residuos',
                    'Cuarta actividad porcentaje' => 6.67,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 4.44
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
            'Centro latitud'  => 25.4936038362411,
            'Centro longitud' => -103.402385573923
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

} // Clase LaDaliaOriente

?>
