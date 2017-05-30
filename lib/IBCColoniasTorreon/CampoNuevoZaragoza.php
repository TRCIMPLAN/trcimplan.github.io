<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon CampoNuevoZaragoza
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
 * Clase CampoNuevoZaragoza
 */
class CampoNuevoZaragoza extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Campo Nuevo Zaragoza';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'campo-nuevo-zaragoza';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Campo Nuevo Zaragoza en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Campo Nuevo Zaragoza';
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
                    'Población total' => 3934,
                    'Porcentaje de población masculina' => 49.52,
                    'Porcentaje de población femenina' => 50.48,
                    'Porcentaje de población de 0 a 14 años' => 38.99,
                    'Porcentaje de población de 15 a 64 años' => 57.55,
                    'Porcentaje de población de 65 y más años' => 1.78,
                    'Porcentaje de población no especificada' => 1.68,
                    'Fecundidad promedio' => 1.81,
                    'Porcentaje de población con discapacidad' => 2.12
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 58.82,
                    'Población Económicamente Activa masculina' => 65.16,
                    'Población Económicamente Activa femenina' => 34.84,
                    'Población Ocupada' => 91.22,
                    'Población Ocupada masculina' => 64.18,
                    'Población Ocupada femenina' => 35.82,
                    'Población Desocupada' => 8.78,
                    'Derechohabiencia' => 80.25
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1013,
                    'Ocupación por Vivienda' => 3.88,
                    'Viviendas con Electricidad' => 99.90,
                    'Viviendas con Agua' => 99.51,
                    'Viviendas con Drenaje' => 99.80,
                    'Viviendas con Televisión' => 99.11,
                    'Viviendas con Automóvil' => 65.35,
                    'Viviendas con Computadora' => 42.48
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 86,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 17.44,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 13.95,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 6.98,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 4.65
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
            'Centro latitud'  => 25.5201862036696,
            'Centro longitud' => -103.35323272263
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

} // Clase CampoNuevoZaragoza

?>
