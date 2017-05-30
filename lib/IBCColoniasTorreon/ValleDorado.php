<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ValleDorado
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
 * Clase ValleDorado
 */
class ValleDorado extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Valle Dorado';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'valle-dorado';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Valle Dorado en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Valle Dorado';
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
                    'Población total' => 3485,
                    'Porcentaje de población masculina' => 48.44,
                    'Porcentaje de población femenina' => 51.56,
                    'Porcentaje de población de 0 a 14 años' => 21.61,
                    'Porcentaje de población de 15 a 64 años' => 69.93,
                    'Porcentaje de población de 65 y más años' => 6.66,
                    'Porcentaje de población no especificada' => 1.80,
                    'Fecundidad promedio' => 2.03,
                    'Porcentaje de población con discapacidad' => 2.91
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.78,
                    'Población Económicamente Activa masculina' => 56.64,
                    'Población Económicamente Activa femenina' => 43.36,
                    'Población Ocupada' => 91.19,
                    'Población Ocupada masculina' => 55.62,
                    'Población Ocupada femenina' => 44.38,
                    'Población Desocupada' => 8.81,
                    'Derechohabiencia' => 75.38
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 981,
                    'Ocupación por Vivienda' => 3.55,
                    'Viviendas con Electricidad' => 99.80,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.39,
                    'Viviendas con Automóvil' => 75.54,
                    'Viviendas con Computadora' => 60.65
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 69,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 34.78,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 21.74,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 17.39,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 5.80,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 4.35
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
            'Centro latitud'  => 25.5130340233788,
            'Centro longitud' => -103.42105424969
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

} // Clase ValleDorado

?>
