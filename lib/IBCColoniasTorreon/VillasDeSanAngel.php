<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillasDeSanAngel
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
 * Clase VillasDeSanAngel
 */
class VillasDeSanAngel extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Villas de San Ángel';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'villas-de-san-angel';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas de San Ángel en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Villas de San Ángel';
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
                    'Población total' => 195,
                    'Porcentaje de población masculina' => 54.87,
                    'Porcentaje de población femenina' => 45.13,
                    'Porcentaje de población de 0 a 14 años' => 36.92,
                    'Porcentaje de población de 15 a 64 años' => 61.03,
                    'Porcentaje de población de 65 y más años' => 2.05,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.95,
                    'Porcentaje de población con discapacidad' => 1.86
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.31,
                    'Población Económicamente Activa masculina' => 72.15,
                    'Población Económicamente Activa femenina' => 27.85,
                    'Población Ocupada' => 82.56,
                    'Población Ocupada masculina' => 71.64,
                    'Población Ocupada femenina' => 28.36,
                    'Población Desocupada' => 17.44,
                    'Derechohabiencia' => 65.64
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 51,
                    'Ocupación por Vivienda' => 3.82,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.04,
                    'Viviendas con Drenaje' => 98.04,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 33.33,
                    'Viviendas con Computadora' => 9.80
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 0
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
            'Centro latitud'  => 25.5417372684198,
            'Centro longitud' => -103.342683761093
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

} // Clase VillasDeSanAngel

?>
