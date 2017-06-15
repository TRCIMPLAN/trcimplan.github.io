<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon PrimeroDeCobianCentro
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
 * Clase PrimeroDeCobianCentro
 */
class PrimeroDeCobianCentro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Primero de Cobián (Centro)';
        $this->fecha       = '2017-05-29T21:23:42';
        // El nombre del archivo a crear
        $this->archivo     = 'primero-de-cobian-centro';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Primero de Cobián (Centro) en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Primero de Cobián (Centro)';
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
                    'Población total' => 2513,
                    'Porcentaje de población masculina' => 46.58,
                    'Porcentaje de población femenina' => 53.42,
                    'Porcentaje de población de 0 a 14 años' => 15.46,
                    'Porcentaje de población de 15 a 64 años' => 64.89,
                    'Porcentaje de población de 65 y más años' => 17.94,
                    'Porcentaje de población no especificada' => 1.71,
                    'Fecundidad promedio' => 1.82,
                    'Porcentaje de población con discapacidad' => 6.75
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.77,
                    'Población Económicamente Activa masculina' => 58.68,
                    'Población Económicamente Activa femenina' => 41.32,
                    'Población Ocupada' => 92.46,
                    'Población Ocupada masculina' => 58.47,
                    'Población Ocupada femenina' => 41.53,
                    'Población Desocupada' => 7.54,
                    'Derechohabiencia' => 66.47
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 833,
                    'Ocupación por Vivienda' => 3.02,
                    'Viviendas con Electricidad' => 99.61,
                    'Viviendas con Agua' => 99.49,
                    'Viviendas con Drenaje' => 99.00,
                    'Viviendas con Televisión' => 98.52,
                    'Viviendas con Automóvil' => 49.64,
                    'Viviendas con Computadora' => 45.22
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 990,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 22.63,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 13.74,
                    'Tercera actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Tercera actividad porcentaje' => 13.74,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 12.22,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 9.90
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
            'Centro latitud'  => 25.5405515374928,
            'Centro longitud' => -103.452499528712
        );
    } // mapas

    /**
     * Reseña
     *
     * @return string
     */
    public function resena() {
        return <<<FINAL
![Plaza Mayor](primero-de-cobian-centro/plaza-mayor-800x450.jpg)

### Historia

El Coronel Don Carlos González, al vender la Hacienda del Torreón y anexas (1898), mandó fraccionar cuatro líneas de manzanas a partir de la última línea de manzanas trazadas en el Plano Primitivo (que reservó para él).

Las cuales abarcaban desde las calles Ramón Corona, Galeana, Jiménez, y Javier Mina, así como la conocida Calzada Colón.

### Fuente

* [Historia de Torreón](http://www.torreonhistoria.galeon.com/aficiones1001256.html)
FINAL;
    } // resena

} // Clase PrimeroDeCobianCentro

?>
