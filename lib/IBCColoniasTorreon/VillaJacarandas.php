<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VillaJacarandas
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
 * Clase VillaJacarandas
 */
class VillaJacarandas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Villa Jacarandas';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'villa-jacarandas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Villa Jacarandas en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Villa Jacarandas';
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
                    'Población total' => 2603,
                    'Porcentaje de población masculina' => 46.12,
                    'Porcentaje de población femenina' => 53.88,
                    'Porcentaje de población de 0 a 14 años' => 20.11,
                    'Porcentaje de población de 15 a 64 años' => 62.68,
                    'Porcentaje de población de 65 y más años' => 14.98,
                    'Porcentaje de población no especificada' => 2.23,
                    'Fecundidad promedio' => 2.55,
                    'Porcentaje de población con discapacidad' => 9.72
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 48.77,
                    'Población Económicamente Activa masculina' => 57.12,
                    'Población Económicamente Activa femenina' => 42.88,
                    'Población Ocupada' => 90.23,
                    'Población Ocupada masculina' => 55.93,
                    'Población Ocupada femenina' => 44.07,
                    'Población Desocupada' => 9.77,
                    'Derechohabiencia' => 75.77
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 718,
                    'Ocupación por Vivienda' => 3.63,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.15,
                    'Viviendas con Drenaje' => 99.43,
                    'Viviendas con Televisión' => 99.57,
                    'Viviendas con Automóvil' => 49.56,
                    'Viviendas con Computadora' => 36.67
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 71,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 38.03,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 22.54,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 16.90,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 8.45,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 4.23
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
            'Centro latitud'  => 25.5683221806077,
            'Centro longitud' => -103.442462102928
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

} // Clase VillaJacarandas

?>
