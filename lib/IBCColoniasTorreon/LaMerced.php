<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LaMerced
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
 * Clase LaMerced
 */
class LaMerced extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Merced';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-merced';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia La Merced en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, La Merced';
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
                    'Población total' => 1032,
                    'Porcentaje de población masculina' => 50.63,
                    'Porcentaje de población femenina' => 49.37,
                    'Porcentaje de población de 0 a 14 años' => 24.45,
                    'Porcentaje de población de 15 a 64 años' => 67.86,
                    'Porcentaje de población de 65 y más años' => 6.81,
                    'Porcentaje de población no especificada' => 0.88,
                    'Fecundidad promedio' => 2.40,
                    'Porcentaje de población con discapacidad' => 1.92
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.93,
                    'Población Económicamente Activa masculina' => 70.92,
                    'Población Económicamente Activa femenina' => 29.08,
                    'Población Ocupada' => 96.67,
                    'Población Ocupada masculina' => 70.62,
                    'Población Ocupada femenina' => 29.38,
                    'Población Desocupada' => 3.33,
                    'Derechohabiencia' => 61.74
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 280,
                    'Ocupación por Vivienda' => 3.69,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.40,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.03,
                    'Viviendas con Automóvil' => 51.90,
                    'Viviendas con Computadora' => 26.90
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 76,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 27.63,
                    'Segunda actividad nombre' => 'Industria Manufacturera',
                    'Segunda actividad porcentaje' => 19.74,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 18.42,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 13.16,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 5.26
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
            'Centro latitud'  => 25.5094478713484,
            'Centro longitud' => -103.406189296811
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

} // Clase LaMerced

?>
