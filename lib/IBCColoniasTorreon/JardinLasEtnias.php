<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon JardinLasEtnias
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
 * Clase JardinLasEtnias
 */
class JardinLasEtnias extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Jardín Las Etnias';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'jardin-las-etnias';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Jardín Las Etnias en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Jardín Las Etnias';
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
                    'Población total' => 150,
                    'Porcentaje de población masculina' => 52.67,
                    'Porcentaje de población femenina' => 47.33,
                    'Porcentaje de población de 0 a 14 años' => 26.00,
                    'Porcentaje de población de 15 a 64 años' => 72.00,
                    'Porcentaje de población de 65 y más años' => 2.00,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.20,
                    'Porcentaje de población con discapacidad' => 0.00
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 63.03,
                    'Población Económicamente Activa masculina' => 65.04,
                    'Población Económicamente Activa femenina' => 34.96,
                    'Población Ocupada' => 98.63,
                    'Población Ocupada masculina' => 64.47,
                    'Población Ocupada femenina' => 35.53,
                    'Población Desocupada' => 1.37,
                    'Derechohabiencia' => 86.00
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 48,
                    'Ocupación por Vivienda' => 3.12,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 100.00,
                    'Viviendas con Computadora' => 97.92
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
            'Centro latitud'  => 25.5457313109197,
            'Centro longitud' => -103.387176905396
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

} // Clase JardinLasEtnias

?>
