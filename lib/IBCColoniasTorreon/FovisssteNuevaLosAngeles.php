<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon FovisssteNuevaLosAngeles
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
 * Clase FovisssteNuevaLosAngeles
 */
class FovisssteNuevaLosAngeles extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Fovissste Nueva Los Ángeles';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'fovissste-nueva-los-angeles';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Fovissste Nueva Los Ángeles en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Fovissste Nueva Los Ángeles';
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
                    'Población total' => 807,
                    'Porcentaje de población masculina' => 47.71,
                    'Porcentaje de población femenina' => 52.29,
                    'Porcentaje de población de 0 a 14 años' => 16.45,
                    'Porcentaje de población de 15 a 64 años' => 59.21,
                    'Porcentaje de población de 65 y más años' => 16.78,
                    'Porcentaje de población no especificada' => 7.56,
                    'Fecundidad promedio' => 2.34,
                    'Porcentaje de población con discapacidad' => 7.05
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 44.19,
                    'Población Económicamente Activa masculina' => 57.71,
                    'Población Económicamente Activa femenina' => 42.29,
                    'Población Ocupada' => 89.24,
                    'Población Ocupada masculina' => 56.73,
                    'Población Ocupada femenina' => 43.27,
                    'Población Desocupada' => 10.76,
                    'Derechohabiencia' => 78.32
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 218,
                    'Ocupación por Vivienda' => 3.70,
                    'Viviendas con Electricidad' => 99.55,
                    'Viviendas con Agua' => 99.08,
                    'Viviendas con Drenaje' => 99.08,
                    'Viviendas con Televisión' => 97.15,
                    'Viviendas con Automóvil' => 71.69,
                    'Viviendas con Computadora' => 64.55
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 22,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 22.73,
                    'Segunda actividad nombre' => 'Salud',
                    'Segunda actividad porcentaje' => 13.64,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 13.64,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 9.09,
                    'Quinta actividad nombre' => 'Manejo de Residuos',
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
            'Centro latitud'  => 25.5622369557541,
            'Centro longitud' => -103.442277073693
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

} // Clase FovisssteNuevaLosAngeles

?>
