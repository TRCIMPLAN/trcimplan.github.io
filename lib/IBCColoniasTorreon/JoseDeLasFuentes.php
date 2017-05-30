<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon JoseDeLasFuentes
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
 * Clase JoseDeLasFuentes
 */
class JoseDeLasFuentes extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'José de Las Fuentes';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'jose-de-las-fuentes';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia José de Las Fuentes en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, José de Las Fuentes';
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
                    'Población total' => 3,
                    'Porcentaje de población masculina' => 45.45,
                    'Porcentaje de población femenina' => 54.55,
                    'Porcentaje de población de 0 a 14 años' => 26.06,
                    'Porcentaje de población de 15 a 64 años' => 70.30,
                    'Porcentaje de población de 65 y más años' => 3.64,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.82,
                    'Porcentaje de población con discapacidad' => 3.64
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 64.57,
                    'Población Económicamente Activa masculina' => 52.44,
                    'Población Económicamente Activa femenina' => 47.56,
                    'Población Ocupada' => 94.89,
                    'Población Ocupada masculina' => 51.28,
                    'Población Ocupada femenina' => 48.72,
                    'Población Desocupada' => 5.11,
                    'Derechohabiencia' => 88.48
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1,
                    'Ocupación por Vivienda' => 3.00,
                    'Viviendas con Electricidad' => 98.18,
                    'Viviendas con Agua' => 98.18,
                    'Viviendas con Drenaje' => 98.18,
                    'Viviendas con Televisión' => 98.18,
                    'Viviendas con Automóvil' => 81.82,
                    'Viviendas con Computadora' => 40.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 5,
                    'Primer actividad nombre' => 'Transportes, Correo, Almacenamiento',
                    'Primer actividad porcentaje' => 40.00,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 20.00,
                    'Cuarta actividad nombre' => 'Comercio Mayoreo',
                    'Cuarta actividad porcentaje' => 20.00
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
            'Centro latitud'  => 25.5368471049639,
            'Centro longitud' => -103.334033443204
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

} // Clase JoseDeLasFuentes

?>
