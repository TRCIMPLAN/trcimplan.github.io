<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon DianaMariaGalindo
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
 * Clase DianaMariaGalindo
 */
class DianaMariaGalindo extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Diana María Galindo';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'diana-maria-galindo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Diana María Galindo en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Diana María Galindo';
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
                    'Población total' => 399,
                    'Porcentaje de población masculina' => 51.01,
                    'Porcentaje de población femenina' => 48.99,
                    'Porcentaje de población de 0 a 14 años' => 34.51,
                    'Porcentaje de población de 15 a 64 años' => 60.82,
                    'Porcentaje de población de 65 y más años' => 3.09,
                    'Porcentaje de población no especificada' => 1.58,
                    'Fecundidad promedio' => 2.59,
                    'Porcentaje de población con discapacidad' => 1.82
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.22,
                    'Población Económicamente Activa masculina' => 72.54,
                    'Población Económicamente Activa femenina' => 27.46,
                    'Población Ocupada' => 91.49,
                    'Población Ocupada masculina' => 72.82,
                    'Población Ocupada femenina' => 27.18,
                    'Población Desocupada' => 8.51,
                    'Derechohabiencia' => 58.39
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 90,
                    'Ocupación por Vivienda' => 4.43,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.82,
                    'Viviendas con Drenaje' => 95.34,
                    'Viviendas con Televisión' => 96.45,
                    'Viviendas con Automóvil' => 18.07,
                    'Viviendas con Computadora' => 2.19
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 3,
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
            'Centro latitud'  => 25.5201040602868,
            'Centro longitud' => -103.456065913546
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

} // Clase DianaMariaGalindo

?>
