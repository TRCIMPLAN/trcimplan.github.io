<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon CampoNuevoZaragoza2Etapa
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
 * Clase CampoNuevoZaragoza2Etapa
 */
class CampoNuevoZaragoza2Etapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Campo Nuevo Zaragoza 2° Etapa';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'campo-nuevo-zaragoza-2-etapa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Campo Nuevo Zaragoza 2° Etapa en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Campo Nuevo Zaragoza 2° Etapa';
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
                    'Población total' => 2695,
                    'Porcentaje de población masculina' => 49.53,
                    'Porcentaje de población femenina' => 50.47,
                    'Porcentaje de población de 0 a 14 años' => 39.20,
                    'Porcentaje de población de 15 a 64 años' => 59.38,
                    'Porcentaje de población de 65 y más años' => 1.18,
                    'Porcentaje de población no especificada' => 0.24,
                    'Fecundidad promedio' => 1.72,
                    'Porcentaje de población con discapacidad' => 2.56
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 63.81,
                    'Población Económicamente Activa masculina' => 63.43,
                    'Población Económicamente Activa femenina' => 36.57,
                    'Población Ocupada' => 94.01,
                    'Población Ocupada masculina' => 62.75,
                    'Población Ocupada femenina' => 37.25,
                    'Población Desocupada' => 5.99,
                    'Derechohabiencia' => 79.38
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 744,
                    'Ocupación por Vivienda' => 3.62,
                    'Viviendas con Electricidad' => 99.78,
                    'Viviendas con Agua' => 98.17,
                    'Viviendas con Drenaje' => 99.78,
                    'Viviendas con Televisión' => 98.84,
                    'Viviendas con Automóvil' => 64.01,
                    'Viviendas con Computadora' => 35.09
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 36,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 38.89,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 22.22,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 8.33,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 5.56
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
            'Centro latitud'  => 25.5160488754879,
            'Centro longitud' => -103.353356048055
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

} // Clase CampoNuevoZaragoza2Etapa

?>
