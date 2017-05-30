<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon JesusMariaDelBosque
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
 * Clase JesusMariaDelBosque
 */
class JesusMariaDelBosque extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Jesús Maria del Bosque';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'jesus-maria-del-bosque';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Jesús Maria del Bosque en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Jesús Maria del Bosque';
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
                    'Población total' => 19,
                    'Porcentaje de población masculina' => 48.22,
                    'Porcentaje de población femenina' => 51.78,
                    'Porcentaje de población de 0 a 14 años' => 22.86,
                    'Porcentaje de población de 15 a 64 años' => 68.19,
                    'Porcentaje de población de 65 y más años' => 8.58,
                    'Porcentaje de población no especificada' => 0.37,
                    'Fecundidad promedio' => 2.31,
                    'Porcentaje de población con discapacidad' => 6.29
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.25,
                    'Población Económicamente Activa masculina' => 62.64,
                    'Población Económicamente Activa femenina' => 37.36,
                    'Población Ocupada' => 87.54,
                    'Población Ocupada masculina' => 62.08,
                    'Población Ocupada femenina' => 37.92,
                    'Población Desocupada' => 12.46,
                    'Derechohabiencia' => 73.15
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 4,
                    'Ocupación por Vivienda' => 4.75,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 58.90,
                    'Viviendas con Computadora' => 43.66
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
            'Centro latitud'  => 25.5214940200081,
            'Centro longitud' => -103.439409966681
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

} // Clase JesusMariaDelBosque

?>
