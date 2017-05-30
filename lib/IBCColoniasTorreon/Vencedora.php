<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Vencedora
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
 * Clase Vencedora
 */
class Vencedora extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Vencedora';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:56:31';
        // El nombre del archivo a crear
        $this->archivo                    = 'vencedora';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Vencedora en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Vencedora';
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
                    'Población total' => 2182,
                    'Porcentaje de población masculina' => 49.38,
                    'Porcentaje de población femenina' => 50.62,
                    'Porcentaje de población de 0 a 14 años' => 25.08,
                    'Porcentaje de población de 15 a 64 años' => 63.62,
                    'Porcentaje de población de 65 y más años' => 10.84,
                    'Porcentaje de población no especificada' => 0.46,
                    'Fecundidad promedio' => 2.58,
                    'Porcentaje de población con discapacidad' => 4.44
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.70,
                    'Población Económicamente Activa masculina' => 66.47,
                    'Población Económicamente Activa femenina' => 33.53,
                    'Población Ocupada' => 92.19,
                    'Población Ocupada masculina' => 65.51,
                    'Población Ocupada femenina' => 34.49,
                    'Población Desocupada' => 7.81,
                    'Derechohabiencia' => 63.63
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 582,
                    'Ocupación por Vivienda' => 3.75,
                    'Viviendas con Electricidad' => 99.25,
                    'Viviendas con Agua' => 98.56,
                    'Viviendas con Drenaje' => 98.91,
                    'Viviendas con Televisión' => 96.45,
                    'Viviendas con Automóvil' => 29.25,
                    'Viviendas con Computadora' => 21.41
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 59,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 44.07,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 23.73,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 10.17,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 10.17,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 5.08
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
            'Centro latitud'  => 25.5340855485377,
            'Centro longitud' => -103.454467592739
        );
    } // mapas

    /**
     * Reseña
     *
     * @return string
     */
    public function resena() {
        return <<<FINAL
De acuerdo a los testimonios de algunos vecinos, aproximadamente en 1930 se establecieron en terrenos de Los Ferrocarriles Nacionales los primeros pobladores, esta empresa les cobraba 20 centavos de renta los cuales pagaban en las oficinas que en aquel entonces se ubicaban frente al Hotel Francia.

### Fuente

* Testimonios de los fundadores de la colonia
FINAL;
    } // resena

} // Clase Vencedora

?>
