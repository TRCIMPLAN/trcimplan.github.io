<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillasDeLasPerlas
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
 * Clase VillasDeLasPerlas
 */
class VillasDeLasPerlas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Villa de Las Perlas';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'villa-de-las-perlas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villa de Las Perlas en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Villa de Las Perlas';
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
                    'Población total' => 313,
                    'Porcentaje de población masculina' => 51.76,
                    'Porcentaje de población femenina' => 48.24,
                    'Porcentaje de población de 0 a 14 años' => 27.48,
                    'Porcentaje de población de 15 a 64 años' => 69.01,
                    'Porcentaje de población de 65 y más años' => 2.56,
                    'Porcentaje de población no especificada' => 0.95,
                    'Fecundidad promedio' => 1.55,
                    'Porcentaje de población con discapacidad' => 2.66
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 67.83,
                    'Población Económicamente Activa masculina' => 56.41,
                    'Población Económicamente Activa femenina' => 43.59,
                    'Población Ocupada' => 98.70,
                    'Población Ocupada masculina' => 56.49,
                    'Población Ocupada femenina' => 43.51,
                    'Población Desocupada' => 1.30,
                    'Derechohabiencia' => 84.35
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 89,
                    'Ocupación por Vivienda' => 3.52,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.88,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 97.75,
                    'Viviendas con Computadora' => 79.78
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 1,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 100.00
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
            'Centro latitud'  => 25.5035633602453,
            'Centro longitud' => -103.349437254384
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

} // Clase VillasDeLasPerlas

?>
