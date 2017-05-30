<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Ana
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
 * Clase Ana
 */
class Ana extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ana';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:53:56';
        // El nombre del archivo a crear
        $this->archivo                    = 'ana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Ana en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Ana';
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
                    'Población total' => 1753,
                    'Porcentaje de población masculina' => 49.34,
                    'Porcentaje de población femenina' => 50.66,
                    'Porcentaje de población de 0 a 14 años' => 18.08,
                    'Porcentaje de población de 15 a 64 años' => 60.47,
                    'Porcentaje de población de 65 y más años' => 13.58,
                    'Porcentaje de población no especificada' => 7.87,
                    'Fecundidad promedio' => 2.34,
                    'Porcentaje de población con discapacidad' => 7.95
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.12,
                    'Población Económicamente Activa masculina' => 62.55,
                    'Población Económicamente Activa femenina' => 37.45,
                    'Población Ocupada' => 86.68,
                    'Población Ocupada masculina' => 61.78,
                    'Población Ocupada femenina' => 38.22,
                    'Población Desocupada' => 13.32,
                    'Derechohabiencia' => 61.61
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 467,
                    'Ocupación por Vivienda' => 3.75,
                    'Viviendas con Electricidad' => 99.57,
                    'Viviendas con Agua' => 99.57,
                    'Viviendas con Drenaje' => 99.57,
                    'Viviendas con Televisión' => 98.07,
                    'Viviendas con Automóvil' => 38.97,
                    'Viviendas con Computadora' => 34.05
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 90,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 26.67,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 18.89,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 16.67,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 4.44
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
            'Centro latitud'  => 25.5427362559505,
            'Centro longitud' => -103.464861358489
        );
    } // mapas

    /**
     * Reseña
     *
     * @return string
     */
    public function resena() {
        return <<<FINAL
En 1932 Eduardo Guerra hace referencia a lo que se conocía como La Paloma Azul o el Barrio Nuevo, para ubicar el primitivo torreón, ese barrio se conoce hoy como La Colonia Ana.

### Fuente

* [El Siglo de Durango - Origen y ubicación de aquel primitivo Torreón](https://www.elsiglodedurango.com.mx/noticia/728927.origen-y-ubicacion-de-aquel-primitivo-torreon.html)
FINAL;
    } // resena

} // Clase Ana

?>
