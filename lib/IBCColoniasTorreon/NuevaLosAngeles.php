<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon NuevaLosAngeles
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
 * Clase NuevaLosAngeles
 */
class NuevaLosAngeles extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Nueva Los Ángeles';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'nueva-los-angeles';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Nueva Los Ángeles en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Nueva Los Ángeles';
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
                    'Población total' => 2337,
                    'Porcentaje de población masculina' => 47.36,
                    'Porcentaje de población femenina' => 52.64,
                    'Porcentaje de población de 0 a 14 años' => 13.61,
                    'Porcentaje de población de 15 a 64 años' => 58.09,
                    'Porcentaje de población de 65 y más años' => 17.21,
                    'Porcentaje de población no especificada' => 11.09,
                    'Fecundidad promedio' => 2.05,
                    'Porcentaje de población con discapacidad' => 6.98
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.66,
                    'Población Económicamente Activa masculina' => 58.98,
                    'Población Económicamente Activa femenina' => 41.02,
                    'Población Ocupada' => 94.50,
                    'Población Ocupada masculina' => 59.24,
                    'Población Ocupada femenina' => 40.76,
                    'Población Desocupada' => 5.50,
                    'Derechohabiencia' => 64.71
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 640,
                    'Ocupación por Vivienda' => 3.65,
                    'Viviendas con Electricidad' => 99.36,
                    'Viviendas con Agua' => 99.04,
                    'Viviendas con Drenaje' => 99.36,
                    'Viviendas con Televisión' => 96.90,
                    'Viviendas con Automóvil' => 86.78,
                    'Viviendas con Computadora' => 72.45
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 146,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 21.92,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 19.18,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 17.81,
                    'Cuarta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Cuarta actividad porcentaje' => 6.16,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 5.48
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
            'Centro latitud'  => 25.5588286470193,
            'Centro longitud' => -103.443300874708
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

} // Clase NuevaLosAngeles

?>
