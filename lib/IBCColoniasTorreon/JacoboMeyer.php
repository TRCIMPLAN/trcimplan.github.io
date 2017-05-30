<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon JacoboMeyer
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
 * Clase JacoboMeyer
 */
class JacoboMeyer extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Jacobo Meyer';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'jacobo-meyer';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Jacobo Meyer en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Jacobo Meyer';
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
                    'Población total' => 912,
                    'Porcentaje de población masculina' => 49.45,
                    'Porcentaje de población femenina' => 50.55,
                    'Porcentaje de población de 0 a 14 años' => 30.24,
                    'Porcentaje de población de 15 a 64 años' => 62.70,
                    'Porcentaje de población de 65 y más años' => 6.96,
                    'Porcentaje de población no especificada' => 0.10,
                    'Fecundidad promedio' => 2.39,
                    'Porcentaje de población con discapacidad' => 12.83
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.52,
                    'Población Económicamente Activa masculina' => 68.89,
                    'Población Económicamente Activa femenina' => 31.11,
                    'Población Ocupada' => 86.10,
                    'Población Ocupada masculina' => 68.51,
                    'Población Ocupada femenina' => 31.49,
                    'Población Desocupada' => 13.90,
                    'Derechohabiencia' => 53.44
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 229,
                    'Ocupación por Vivienda' => 3.98,
                    'Viviendas con Electricidad' => 99.35,
                    'Viviendas con Agua' => 96.69,
                    'Viviendas con Drenaje' => 98.47,
                    'Viviendas con Televisión' => 94.52,
                    'Viviendas con Automóvil' => 27.65,
                    'Viviendas con Computadora' => 12.09
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 15,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 46.67,
                    'Segunda actividad nombre' => 'Salud',
                    'Segunda actividad porcentaje' => 13.33,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 13.33,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 13.33,
                    'Quinta actividad nombre' => 'Manejo de Residuos',
                    'Quinta actividad porcentaje' => 6.67
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
            'Centro latitud'  => 25.5290813846418,
            'Centro longitud' => -103.482082455014
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

} // Clase JacoboMeyer

?>
