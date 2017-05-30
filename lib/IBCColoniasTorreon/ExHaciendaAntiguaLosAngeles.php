<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ExHaciendaAntiguaLosAngeles
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
 * Clase ExHaciendaAntiguaLosAngeles
 */
class ExHaciendaAntiguaLosAngeles extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ex-Hacienda Antigua Los Ángeles';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'ex-hacienda-antigua-los-angeles';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Ex-Hacienda Antigua Los Ángeles en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Ex-Hacienda Antigua Los Ángeles';
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
                    'Población total' => 601,
                    'Porcentaje de población masculina' => 46.07,
                    'Porcentaje de población femenina' => 53.93,
                    'Porcentaje de población de 0 a 14 años' => 22.93,
                    'Porcentaje de población de 15 a 64 años' => 71.52,
                    'Porcentaje de población de 65 y más años' => 4.03,
                    'Porcentaje de población no especificada' => 1.52,
                    'Fecundidad promedio' => 1.43,
                    'Porcentaje de población con discapacidad' => 0.71
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 58.50,
                    'Población Económicamente Activa masculina' => 54.40,
                    'Población Económicamente Activa femenina' => 45.60,
                    'Población Ocupada' => 97.36,
                    'Población Ocupada masculina' => 54.33,
                    'Población Ocupada femenina' => 45.67,
                    'Población Desocupada' => 2.64,
                    'Derechohabiencia' => 87.31
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 166,
                    'Ocupación por Vivienda' => 3.62,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 92.80,
                    'Viviendas con Computadora' => 87.29
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 40,
                    'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Primer actividad porcentaje' => 27.50,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 25.00,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 10.00,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 7.50,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 7.50
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
            'Centro latitud'  => 25.5329287634927,
            'Centro longitud' => -103.401151478452
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

} // Clase ExHaciendaAntiguaLosAngeles

?>
