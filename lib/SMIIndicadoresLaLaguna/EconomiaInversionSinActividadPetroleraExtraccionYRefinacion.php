<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna EconomiaInversionSinActividadPetroleraExtraccionYRefinacion
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
 * Clase EconomiaInversionSinActividadPetroleraExtraccionYRefinacion
 */
class EconomiaInversionSinActividadPetroleraExtraccionYRefinacion extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Inversión sin actividad petrolera (extracción y refinación) en La Laguna';
        $this->fecha       = '2019-01-24T10:10:06';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-inversion-sin-actividad-petrolera-extraccion-y-refinacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Se muestra la inversión sin actividad petrolera expresada en miles de pesos';
        $this->claves      = 'IMPLAN, La Laguna, Finanzas Públicas';
        // Para el Organizador
        $this->categorias  = array('Finanzas Públicas');
        $this->fuentes     = array('INEGI', 'IMCO');
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
            array('fecha' => '2015-11-30', 'valor' => '10.31', 'fuente_nombre' => 'INEGI', 'notas' => 'Miles de pesos por PEA'),
            array('fecha' => '2016-12-31', 'valor' => '116.0700', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 se mostró como "Miles de pesos por PEA"'),
            array('fecha' => '2016-12-31', 'valor' => '12.19', 'fuente_nombre' => 'INEGI', 'notas' => 'Miles de pesos por PEA'),
            array('fecha' => '2017-12-31', 'valor' => '11.87', 'fuente_nombre' => 'INEGI', 'notas' => 'Miles de pesos por PEA'),
            array('fecha' => '2018-12-31', 'valor' => '13.49', 'fuente_nombre' => 'INEGI', 'notas' => 'Miles de pesos por PEA'),
            array('fecha' => '2018-12-31', 'valor' => '13.49', 'fuente_nombre' => 'INEGI', 'notas' => 'Miles de pesos por PEA'),
            array('fecha' => '2019-12-31', 'valor' => '13.27', 'fuente_nombre' => 'INEGI', 'notas' => 'Miles de pesos por PEA'),
            array('fecha' => '2019-12-31', 'valor' => '13.27', 'fuente_nombre' => 'INEGI', 'notas' => 'Miles de pesos por PEA'),
            array('fecha' => '2020-12-31', 'valor' => '12.10', 'fuente_nombre' => 'INEGI', 'notas' => 'Miles de pesos por PEA'),
            array('fecha' => '2021-12-31', 'valor' => '10.34', 'fuente_nombre' => 'INEGI', 'notas' => 'Miles de pesos por PEA')); // formateado 0, valor 20, crudo 20
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '51861094.00', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '16707350.00', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '1667420.00', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '914365.00', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2021-12-31', 'valor' => '10.34', 'fuente_nombre' => 'INEGI', 'notas' => 'Miles de pesos por PEA'));
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

} // Clase EconomiaInversionSinActividadPetroleraExtraccionYRefinacion

?>
