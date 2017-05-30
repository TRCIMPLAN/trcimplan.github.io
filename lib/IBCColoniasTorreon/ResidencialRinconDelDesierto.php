<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ResidencialRinconDelDesierto
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
 * Clase ResidencialRinconDelDesierto
 */
class ResidencialRinconDelDesierto extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Residencial Rincón del Desierto';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'residencial-rincon-del-desierto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Residencial Rincón del Desierto en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Residencial Rincón del Desierto';
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
                    'Población total' => 140,
                    'Porcentaje de población masculina' => 49.29,
                    'Porcentaje de población femenina' => 50.71,
                    'Porcentaje de población de 0 a 14 años' => 24.29,
                    'Porcentaje de población de 15 a 64 años' => 72.86,
                    'Porcentaje de población de 65 y más años' => 2.86,
                    'Porcentaje de población no especificada' => -0.01,
                    'Fecundidad promedio' => 1.50,
                    'Porcentaje de población con discapacidad' => 3.42
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.86,
                    'Población Económicamente Activa masculina' => 62.71,
                    'Población Económicamente Activa femenina' => 37.29,
                    'Población Ocupada' => 98.28,
                    'Población Ocupada masculina' => 63.79,
                    'Población Ocupada femenina' => 36.21,
                    'Población Desocupada' => 1.72,
                    'Derechohabiencia' => 90.71
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 39,
                    'Ocupación por Vivienda' => 3.59,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 97.44,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 87.18,
                    'Viviendas con Computadora' => 89.74
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
            'Centro latitud'  => 25.5295335300733,
            'Centro longitud' => -103.383454201325
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

} // Clase ResidencialRinconDelDesierto

?>
