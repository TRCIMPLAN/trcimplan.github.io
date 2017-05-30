<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ResidencialSenderos
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
 * Clase ResidencialSenderos
 */
class ResidencialSenderos extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Residencial Senderos';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'residencial-senderos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Residencial Senderos en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Residencial Senderos';
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
                    'Población total' => 3094,
                    'Porcentaje de población masculina' => 48.83,
                    'Porcentaje de población femenina' => 51.17,
                    'Porcentaje de población de 0 a 14 años' => 29.37,
                    'Porcentaje de población de 15 a 64 años' => 64.33,
                    'Porcentaje de población de 65 y más años' => 2.86,
                    'Porcentaje de población no especificada' => 3.44,
                    'Fecundidad promedio' => 1.30,
                    'Porcentaje de población con discapacidad' => 0.98
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 68.43,
                    'Población Económicamente Activa masculina' => 58.57,
                    'Población Económicamente Activa femenina' => 41.43,
                    'Población Ocupada' => 98.88,
                    'Población Ocupada masculina' => 58.73,
                    'Población Ocupada femenina' => 41.27,
                    'Población Desocupada' => 1.12,
                    'Derechohabiencia' => 81.81
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 911,
                    'Ocupación por Vivienda' => 3.40,
                    'Viviendas con Electricidad' => 99.95,
                    'Viviendas con Agua' => 99.51,
                    'Viviendas con Drenaje' => 99.73,
                    'Viviendas con Televisión' => 99.29,
                    'Viviendas con Automóvil' => 98.19,
                    'Viviendas con Computadora' => 89.68
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 17,
                    'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Primer actividad porcentaje' => 35.29,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 23.53,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 11.76,
                    'Cuarta actividad nombre' => 'Construcción',
                    'Cuarta actividad porcentaje' => 11.76,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 5.88
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
            'Centro latitud'  => 25.6166916793802,
            'Centro longitud' => -103.382038326233
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

} // Clase ResidencialSenderos

?>
