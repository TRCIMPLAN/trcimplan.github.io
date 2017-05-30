<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon AntiguaEstacionDelFerrocarril
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
 * Clase AntiguaEstacionDelFerrocarril
 */
class AntiguaEstacionDelFerrocarril extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Antigua Estación del Ferrocarril';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'antigua-estacion-del-ferrocarril';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Antigua Estación del Ferrocarril en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Antigua Estación del Ferrocarril';
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
                    'Población total' => 24,
                    'Porcentaje de población masculina' => 50.00,
                    'Porcentaje de población femenina' => 50.00,
                    'Porcentaje de población de 0 a 14 años' => 25.00,
                    'Porcentaje de población de 15 a 64 años' => 58.33,
                    'Porcentaje de población de 65 y más años' => 16.67,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.50,
                    'Porcentaje de población con discapacidad' => 0.00
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.00,
                    'Población Económicamente Activa masculina' => 50.00,
                    'Población Económicamente Activa femenina' => 50.00,
                    'Población Ocupada' => 57.14,
                    'Población Ocupada masculina' => 37.50,
                    'Población Ocupada femenina' => 62.50,
                    'Población Desocupada' => 42.86,
                    'Derechohabiencia' => 54.17
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 7,
                    'Ocupación por Vivienda' => 3.43,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 28.97,
                    'Viviendas con Computadora' => 42.86
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 2,
                    'Primer actividad nombre' => 'Salud',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Segunda actividad porcentaje' => 50.00
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
            'Centro latitud'  => 25.5308325373499,
            'Centro longitud' => -103.45439299349
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

} // Clase AntiguaEstacionDelFerrocarril

?>
