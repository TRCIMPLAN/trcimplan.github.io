<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio EconomiaHorasLaboradas
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

namespace SMIIndicadoresGomezPalacio;

/**
 * Clase EconomiaHorasLaboradas
 */
class EconomiaHorasLaboradas extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Horas laboradas en Gómez Palacio';
        $this->fecha       = '2018-07-27T12:02:44';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-horas-laboradas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Horas promedio trabajadas a la semana';
        $this->claves      = 'IMPLAN, Gómez Palacio, Empleo';
        // Para el Organizador
        $this->categorias  = array('Empleo');
        $this->fuentes     = array('IMCO');
        $this->regiones    = array('Gómez Palacio');
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
            array('fecha' => '2016-12-31', 'valor' => '287225879.6000', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 el decimal es por "Horas trabajadas al año"')); // formateado 0, valor 2, crudo 2
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
            'valor' => array('enca' => 'Dato', 'formato' => 'texto'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2019-06-30', 'valor' => '41.3700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '287225879.6000', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 el decimal es por "Horas trabajadas al año"'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '15607673.5400', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 el decimal es por "Horas trabajadas al año"'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '53462897.5100', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 el decimal es por "Horas trabajadas al año"'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2020-03-31', 'valor' => '41.2900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'));
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
        return <<<OBSERVACIONES_FINAL
Datos tomados de INEGI (ENOE)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaHorasLaboradas

?>
