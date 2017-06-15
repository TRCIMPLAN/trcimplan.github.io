<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillasDelSol
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
 * Clase VillasDelSol
 */
class VillasDelSol extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Villas del Sol';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'villas-del-sol';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas del Sol en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Villas del Sol';
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
                    'Población total' => 1315,
                    'Porcentaje de población masculina' => 49.28,
                    'Porcentaje de población femenina' => 50.72,
                    'Porcentaje de población de 0 a 14 años' => 30.57,
                    'Porcentaje de población de 15 a 64 años' => 66.01,
                    'Porcentaje de población de 65 y más años' => 2.05,
                    'Porcentaje de población no especificada' => 1.37,
                    'Fecundidad promedio' => 1.44,
                    'Porcentaje de población con discapacidad' => 0.80
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 64.16,
                    'Población Económicamente Activa masculina' => 59.23,
                    'Población Económicamente Activa femenina' => 40.77,
                    'Población Ocupada' => 95.45,
                    'Población Ocupada masculina' => 59.12,
                    'Población Ocupada femenina' => 40.88,
                    'Población Desocupada' => 4.55,
                    'Derechohabiencia' => 88.29
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 384,
                    'Ocupación por Vivienda' => 3.42,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.74,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.74,
                    'Viviendas con Automóvil' => 93.70,
                    'Viviendas con Computadora' => 75.63
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 8,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 62.50,
                    'Segunda actividad nombre' => 'Transportes, Correo, Almacenamiento',
                    'Segunda actividad porcentaje' => 25.00,
                    'Tercera actividad nombre' => 'Inmobiliarios',
                    'Tercera actividad porcentaje' => 12.50
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
            'Centro latitud'  => 25.5311546458007,
            'Centro longitud' => -103.316881728516
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

} // Clase VillasDelSol

?>
