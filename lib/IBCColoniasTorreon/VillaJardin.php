<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillaJardin
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
 * Clase VillaJardin
 */
class VillaJardin extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Villa Jardín';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'villa-jardin';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Villa Jardín en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Villa Jardín';
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
                    'Población total' => 548,
                    'Porcentaje de población masculina' => 46.41,
                    'Porcentaje de población femenina' => 53.59,
                    'Porcentaje de población de 0 a 14 años' => 11.60,
                    'Porcentaje de población de 15 a 64 años' => 63.71,
                    'Porcentaje de población de 65 y más años' => 13.63,
                    'Porcentaje de población no especificada' => 11.06,
                    'Fecundidad promedio' => 1.93,
                    'Porcentaje de población con discapacidad' => 4.61
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.20,
                    'Población Económicamente Activa masculina' => 63.52,
                    'Población Económicamente Activa femenina' => 36.48,
                    'Población Ocupada' => 93.39,
                    'Población Ocupada masculina' => 63.47,
                    'Población Ocupada femenina' => 36.53,
                    'Población Desocupada' => 6.61,
                    'Derechohabiencia' => 72.90
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 154,
                    'Ocupación por Vivienda' => 3.56,
                    'Viviendas con Electricidad' => 99.72,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 99.72,
                    'Viviendas con Televisión' => 89.25,
                    'Viviendas con Automóvil' => 84.62,
                    'Viviendas con Computadora' => 72.81
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 52,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 15.38,
                    'Segunda actividad nombre' => 'Inmobiliarios',
                    'Segunda actividad porcentaje' => 13.46,
                    'Tercera actividad nombre' => 'Comercio Menudeo',
                    'Tercera actividad porcentaje' => 11.54,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 7.69,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 7.69
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
            'Centro latitud'  => 25.5588779266794,
            'Centro longitud' => -103.449529174205
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

} // Clase VillaJardin

?>
