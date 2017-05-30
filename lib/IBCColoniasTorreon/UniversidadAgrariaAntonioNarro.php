<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon UniversidadAgrariaAntonioNarro
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
 * Clase UniversidadAgrariaAntonioNarro
 */
class UniversidadAgrariaAntonioNarro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Universidad Agraria Antonio Narro';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'universidad-agraria-antonio-narro';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Universidad Agraria Antonio Narro en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Universidad Agraria Antonio Narro';
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
                    'Porcentaje de población masculina' => 47.61,
                    'Porcentaje de población femenina' => 52.39,
                    'Porcentaje de población de 0 a 14 años' => 27.30,
                    'Porcentaje de población de 15 a 64 años' => 65.53,
                    'Porcentaje de población de 65 y más años' => 6.40,
                    'Porcentaje de población no especificada' => 0.77,
                    'Fecundidad promedio' => 2.41,
                    'Porcentaje de población con discapacidad' => 6.23
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.55,
                    'Población Económicamente Activa masculina' => 67.07,
                    'Población Económicamente Activa femenina' => 32.93,
                    'Población Ocupada' => 90.50,
                    'Población Ocupada masculina' => 65.48,
                    'Población Ocupada femenina' => 34.52,
                    'Población Desocupada' => 9.50,
                    'Derechohabiencia' => 70.48
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 0
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 11,
                    'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Primer actividad porcentaje' => 63.64,
                    'Segunda actividad nombre' => 'Educativos',
                    'Segunda actividad porcentaje' => 9.09,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 9.09,
                    'Cuarta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Cuarta actividad porcentaje' => 9.09,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 9.09
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
            'Centro latitud'  => 25.5559549674044,
            'Centro longitud' => -103.371351853293
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

} // Clase UniversidadAgrariaAntonioNarro

?>
