<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna EconomiaIndiceDeCompetitividadUrbana
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

namespace SMIIndicadoresLaLaguna;

/**
 * Clase EconomiaIndiceDeCompetitividadUrbana
 */
class EconomiaIndiceDeCompetitividadUrbana extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Índice de Competitividad Urbana en La Laguna';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-indice-de-competitividad-urbana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'El índice de Competitividad Urbana (ICU) ha sido dado a conocer por el Instituto Mexicano para la Competitividad (IMCO)en 2007, 2010 y 2012, con información proveniente de fuentes diversas verificables de años anteriores a su publicación.';
        $this->claves      = 'IMPLAN, La Laguna, Competitividad';
        // Para el Organizador
        $this->categorias  = array('Competitividad');
        $this->fuentes     = array('IMCO');
        $this->regiones    = array('La Laguna');
    } // constructor

    /**
     * Datos Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function datos_estructura() {
        return array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'decimal'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto'));
    } // datos_estructura

    /**
     * Datos
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function datos() {
        return array(
            array('fecha' => '2012-12-31', 'valor' => '45.1100', 'fuente_nombre' => 'IMCO', 'notas' => 'En el ranking Nacional La Laguna, ocupa el lugar 44 de 77 zonas metropolitanas.'));
    } // datos

    /**
     * Otras Regiones Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones_estructura() {
        return array(
            'region_nombre' => array('enca' => 'Región', 'formato' => 'texto'),
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'decimal'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto'));
    } // otras_regiones_estructura

    /**
     * Otras regiones
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2012-12-31', 'valor' => '50.6700', 'fuente_nombre' => 'IMCO', 'notas' => 'Ese valor equivale al lugar 21 de 77 ciudades, de acuerdo a la edición 2012 del ICU.'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2012-12-31', 'valor' => '42.5700', 'fuente_nombre' => 'IMCO', 'notas' => 'Ese valor equivale al lugar 59 de 77 ciudades, de acuerdo a la edición 2012 del ICU.'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2012-12-31', 'valor' => '37.3900', 'fuente_nombre' => 'IMCO', 'notas' => 'Ese valor equivale al lugar 74 de 77 ciudades, de acuerdo a la edición 2012 del ICU.'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2012-12-31', 'valor' => '41.5400', 'fuente_nombre' => 'IMCO', 'notas' => 'Ese valor equivale al lugar 64 de 77 ciudades, de acuerdo a la edición 2012 del ICU.'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2012-12-31', 'valor' => '45.1100', 'fuente_nombre' => 'IMCO', 'notas' => 'En el ranking Nacional La Laguna, ocupa el lugar 44 de 77 zonas metropolitanas.'));
    } // otras_regiones

    /**
     * Mapas
     *
     * @return string Código HTML con el iframe de Carto
     */
    public function mapas() {
        return NULL;
    } // mapas

    /**
     * Observaciones
     *
     * @return string Markdown
     */
    public function observaciones() {
        return NULL;
    } // observaciones

} // Clase EconomiaIndiceDeCompetitividadUrbana

?>
