<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ResidencialIbero
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
 * Clase ResidencialIbero
 */
class ResidencialIbero extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Residencial Ibero';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'residencial-ibero';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Residencial Ibero en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Residencial Ibero';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Indicadores Básicos de Colonias > Colonias de Torreón';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = FALSE;
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
                    'Población total' => 106,
                    'Porcentaje de población masculina' => 48.14,
                    'Porcentaje de población femenina' => 51.86,
                    'Porcentaje de población de 0 a 14 años' => 36.21,
                    'Porcentaje de población de 15 a 64 años' => 51.14,
                    'Porcentaje de población de 65 y más años' => 9.55,
                    'Porcentaje de población no especificada' => 3.10,
                    'Fecundidad promedio' => 1.48,
                    'Porcentaje de población con discapacidad' => 1.51
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.58,
                    'Población Económicamente Activa masculina' => 67.84,
                    'Población Económicamente Activa femenina' => 32.16,
                    'Población Ocupada' => 96.76,
                    'Población Ocupada masculina' => 66.86,
                    'Población Ocupada femenina' => 33.14,
                    'Población Desocupada' => 3.24,
                    'Derechohabiencia' => 65.56
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 27,
                    'Ocupación por Vivienda' => 3.93,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 98.30,
                    'Viviendas con Computadora' => 81.61
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
            'Centro latitud'  => 25.6011053285127,
            'Centro longitud' => -103.402183089326
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

} // Clase ResidencialIbero

?>
