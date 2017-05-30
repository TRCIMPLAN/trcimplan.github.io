<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon PerlaDelMarDelNorte
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
 * Clase PerlaDelMarDelNorte
 */
class PerlaDelMarDelNorte extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Perla del Mar del Norte';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'perla-del-mar-del-norte';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Perla del Mar del Norte en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Perla del Mar del Norte';
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
                    'Población total' => 16,
                    'Porcentaje de población masculina' => 50.00,
                    'Porcentaje de población femenina' => 50.00,
                    'Porcentaje de población de 0 a 14 años' => 25.00,
                    'Porcentaje de población de 15 a 64 años' => 37.50,
                    'Porcentaje de población de 65 y más años' => 0.00,
                    'Porcentaje de población no especificada' => 37.50,
                    'Fecundidad promedio' => 1.33,
                    'Porcentaje de población con discapacidad' => 0.00
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 66.67,
                    'Población Económicamente Activa masculina' => 75.00,
                    'Población Económicamente Activa femenina' => 25.00,
                    'Población Ocupada' => 100.00,
                    'Población Ocupada masculina' => 75.00,
                    'Población Ocupada femenina' => 25.00,
                    'Población Desocupada' => 0.00,
                    'Derechohabiencia' => 37.50
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 3,
                    'Ocupación por Vivienda' => 5.33,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 100.00,
                    'Viviendas con Computadora' => 46.86
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
            'Centro latitud'  => 25.5010753232259,
            'Centro longitud' => -103.349799545124
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

} // Clase PerlaDelMarDelNorte

?>
