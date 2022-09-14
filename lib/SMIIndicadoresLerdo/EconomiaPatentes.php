<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo EconomiaPatentes
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

namespace SMIIndicadoresLerdo;

/**
 * Clase EconomiaPatentes
 */
class EconomiaPatentes extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Patentes en Lerdo';
        $this->fecha       = '2015-07-14T17:18:47';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-patentes';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice "Innovación de los sectores económicos". Mide el número de patentes solicitadas por entidad de residencia del inventor. Esta variable es estatal.';
        $this->claves      = 'IMPLAN, Lerdo, Índice de Competitividad Urbana, Innovación';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Innovación');
        $this->fuentes     = array('IMCO');
        $this->regiones    = array('Lerdo');
    } // constructor

    /**
     * Datos Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function datos_estructura() {
        return array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'texto'),
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
            array('fecha' => '2008-12-31', 'valor' => '2.7773', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '3.5720', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '5.1570', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '6.7204', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '8.4125', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2016-12-31', 'valor' => '9', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Patentes solicitadas'),
            array('fecha' => '2016-12-31', 'valor' => '9', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Patentes solicitadas')); // formateado 0, valor 14, crudo 9
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '49', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Patentes solicitadas'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '9', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Patentes solicitadas'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '9', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Patentes solicitadas'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '49', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Patentes solicitadas'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2021-12-31', 'valor' => '1', 'fuente_nombre' => 'IMCO'));
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
Unidades: Por cada 100 mil de PEA. Fuente: CONACYT, 2008-2012.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaPatentes

?>
