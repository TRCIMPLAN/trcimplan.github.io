<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SeguridadTasaDeHomicidios
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
 * Clase SeguridadTasaDeHomicidios
 */
class SeguridadTasaDeHomicidios extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Tasa de Homicidios en La Laguna';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-tasa-de-homicidios';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Forma parte de subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el número relativo de homicidios en cada ciudad. A través del Sistema Estatal y Municipal de Bases de Datos (SIMBAD) fue posible identificar el número de homicidios a nivel municipal. Unidades: Homicidios por cada 100 mil habitantes.
Las tasas de elaboración propia consideran las defunciones por homicidio ocurridas en el municipio de acuerdo a los registros administrativos de INEGI.';
        $this->claves      = 'IMPLAN, La Laguna, Seguridad, Delincuencia, Índice de Competitividad Urbana';
        // Para el Organizador
        $this->categorias  = array('Seguridad', 'Delincuencia', 'Índice de Competitividad Urbana');
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
            array('fecha' => '2008-12-31', 'valor' => '14.8788', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '38.4695', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '55.2021', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '58.5570', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '83.8572', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2013-12-31', 'valor' => '47.0745', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2014-12-31', 'valor' => '24.6481', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2015-12-31', 'valor' => '15.5350', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2016-12-31', 'valor' => '11.0711', 'fuente_nombre' => 'IMCO')); // formateado 0, valor 18, crudo 9
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '76', 'fuente_nombre' => 'IMCO', 'notas' => 'A partir de 2016 el dato cambió a dato cantidad por "Muertes por homicidio doloso al año"'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '30', 'fuente_nombre' => 'IMCO', 'notas' => 'A partir de 2016 el dato cambió a dato cantidad por "Muertes por homicidio doloso al año"'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '9', 'fuente_nombre' => 'IMCO', 'notas' => 'A partir de 2016 el dato cambió a dato cantidad por "Muertes por homicidio doloso al año"'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '9', 'fuente_nombre' => 'IMCO', 'notas' => 'A partir de 2016 el dato cambió a dato cantidad por "Muertes por homicidio doloso al año"'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2016-12-31', 'valor' => '11.0711', 'fuente_nombre' => 'IMCO'));
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
Fuente: Instituto Nacional de Estadística y Geografía (INEGI), 2008-2012.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SeguridadTasaDeHomicidios

?>
