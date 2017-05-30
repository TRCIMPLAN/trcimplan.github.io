<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon SolDeOriente2Etapa
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
 * Clase SolDeOriente2Etapa
 */
class SolDeOriente2Etapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Sol de Oriente 2° Etapa';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'sol-de-oriente-2-etapa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Sol de Oriente 2° Etapa en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Sol de Oriente 2° Etapa';
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
                    'Población total' => 1042,
                    'Porcentaje de población masculina' => 51.06,
                    'Porcentaje de población femenina' => 48.94,
                    'Porcentaje de población de 0 a 14 años' => 36.76,
                    'Porcentaje de población de 15 a 64 años' => 62.86,
                    'Porcentaje de población de 65 y más años' => 0.38,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.73,
                    'Porcentaje de población con discapacidad' => 1.01
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.50,
                    'Población Económicamente Activa masculina' => 65.98,
                    'Población Económicamente Activa femenina' => 34.02,
                    'Población Ocupada' => 93.92,
                    'Población Ocupada masculina' => 65.85,
                    'Población Ocupada femenina' => 34.15,
                    'Población Desocupada' => 6.08,
                    'Derechohabiencia' => 78.98
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 293,
                    'Ocupación por Vivienda' => 3.56,
                    'Viviendas con Electricidad' => 99.66,
                    'Viviendas con Agua' => 99.66,
                    'Viviendas con Drenaje' => 99.66,
                    'Viviendas con Televisión' => 97.95,
                    'Viviendas con Automóvil' => 53.24,
                    'Viviendas con Computadora' => 35.39
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 36,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 47.22,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 22.22,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 5.56,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 5.56,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 5.56
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
            'Centro latitud'  => 25.540816127134,
            'Centro longitud' => -103.328197548375
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

} // Clase SolDeOriente2Etapa

?>
