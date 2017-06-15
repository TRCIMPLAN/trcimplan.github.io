<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon QuintasIsabela
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
 * Clase QuintasIsabela
 */
class QuintasIsabela extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Quintas Isabela';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'quintas-isabela';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Quintas Isabela en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Quintas Isabela';
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
                    'Población total' => 28,
                    'Porcentaje de población masculina' => 53.57,
                    'Porcentaje de población femenina' => 46.43,
                    'Porcentaje de población de 0 a 14 años' => 21.43,
                    'Porcentaje de población de 15 a 64 años' => 60.71,
                    'Porcentaje de población de 65 y más años' => 17.86,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.09,
                    'Porcentaje de población con discapacidad' => 0.00
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 45.83,
                    'Población Económicamente Activa masculina' => 63.64,
                    'Población Económicamente Activa femenina' => 36.36,
                    'Población Ocupada' => 100.00,
                    'Población Ocupada masculina' => 63.64,
                    'Población Ocupada femenina' => 36.36,
                    'Población Desocupada' => 0.00,
                    'Derechohabiencia' => 100.00
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 11,
                    'Ocupación por Vivienda' => 2.55,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 90.91,
                    'Viviendas con Computadora' => 81.82
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
            'Centro latitud'  => 25.5306299699641,
            'Centro longitud' => -103.402934229037
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

} // Clase QuintasIsabela

?>
