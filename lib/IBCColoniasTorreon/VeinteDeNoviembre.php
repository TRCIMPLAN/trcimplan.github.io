<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon VeinteDeNoviembre
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
 * Clase VeinteDeNoviembre
 */
class VeinteDeNoviembre extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Veinte de Noviembre';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'veinte-de-noviembre';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Veinte de Noviembre en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Veinte de Noviembre';
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
                    'Población total' => 562,
                    'Porcentaje de población masculina' => 50.18,
                    'Porcentaje de población femenina' => 49.82,
                    'Porcentaje de población de 0 a 14 años' => 22.95,
                    'Porcentaje de población de 15 a 64 años' => 66.37,
                    'Porcentaje de población de 65 y más años' => 10.68,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.35,
                    'Porcentaje de población con discapacidad' => 9.28
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.73,
                    'Población Económicamente Activa masculina' => 60.67,
                    'Población Económicamente Activa femenina' => 39.33,
                    'Población Ocupada' => 93.80,
                    'Población Ocupada masculina' => 60.44,
                    'Población Ocupada femenina' => 39.56,
                    'Población Desocupada' => 6.20,
                    'Derechohabiencia' => 60.50
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 158,
                    'Ocupación por Vivienda' => 3.56,
                    'Viviendas con Electricidad' => 99.37,
                    'Viviendas con Agua' => 99.37,
                    'Viviendas con Drenaje' => 99.37,
                    'Viviendas con Televisión' => 98.10,
                    'Viviendas con Automóvil' => 27.22,
                    'Viviendas con Computadora' => 19.81
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 29,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 34.48,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.69,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 17.24,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 13.79,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 10.34
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
            'Centro latitud'  => 25.5395857078446,
            'Centro longitud' => -103.470400074174
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

} // Clase VeinteDeNoviembre

?>
