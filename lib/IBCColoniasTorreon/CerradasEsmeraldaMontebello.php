<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon CerradasEsmeraldaMontebello
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
 * Clase CerradasEsmeraldaMontebello
 */
class CerradasEsmeraldaMontebello extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Cerradas Esmeralda - Montebello';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'cerradas-esmeralda-montebello';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Cerradas Esmeralda - Montebello en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Cerradas Esmeralda - Montebello';
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
                    'Población total' => 156,
                    'Porcentaje de población masculina' => 48.72,
                    'Porcentaje de población femenina' => 51.28,
                    'Porcentaje de población de 0 a 14 años' => 30.36,
                    'Porcentaje de población de 15 a 64 años' => 67.95,
                    'Porcentaje de población de 65 y más años' => 1.55,
                    'Porcentaje de población no especificada' => 0.14,
                    'Fecundidad promedio' => 1.63,
                    'Porcentaje de población con discapacidad' => 0.63
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 64.35,
                    'Población Económicamente Activa masculina' => 51.35,
                    'Población Económicamente Activa femenina' => 48.65,
                    'Población Ocupada' => 100.00,
                    'Población Ocupada masculina' => 51.35,
                    'Población Ocupada femenina' => 48.65,
                    'Población Desocupada' => 0.00,
                    'Derechohabiencia' => 82.05
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 42,
                    'Ocupación por Vivienda' => 3.71,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 100.00,
                    'Viviendas con Computadora' => 92.86
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
            'Centro latitud'  => 25.5201987950925,
            'Centro longitud' => -103.378283497636
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

} // Clase CerradasEsmeraldaMontebello

?>
