<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo SeguridadTasaDeRoboDeVehiculos
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
 * Clase SeguridadTasaDeRoboDeVehiculos
 */
class SeguridadTasaDeRoboDeVehiculos extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Tasa de Robo de VehÍculos en Lerdo';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-tasa-de-robo-de-vehiculos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'En el Índice de Competitividad Urbana pertenece al subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el número relativo de robo de vehículos en cada ciudad. Sólo se cuenta con observaciones para 2011 y 2012. Unidades: Robo de autos por cada mil vehículos registrados.';
        $this->claves      = 'IMPLAN, Lerdo, Delincuencia, Seguridad, Índice de Competitividad Urbana';
        // Para el Organizador
        $this->categorias  = array('Delincuencia', 'Seguridad', 'Índice de Competitividad Urbana');
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
            array('fecha' => '2008-12-31', 'valor' => '11.3158', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '11.3158', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '11.3158', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '107.1293', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '40.1776', 'fuente_nombre' => 'IMCO'));
    } // datos

    /**
     * Otras Regiones Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones_estructura() {
        return NULL;
    } // otras_regiones_estructura

    /**
     * Otras regiones
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones() {
        return NULL;
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
Fuente: Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública (SESNSP) e INEGI, 2008-2012.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SeguridadTasaDeRoboDeVehiculos

?>
