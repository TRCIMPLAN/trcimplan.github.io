<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo SeguridadPorcentajeDeAccidentesVialesFatales
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
 * Clase SeguridadPorcentajeDeAccidentesVialesFatales
 */
class SeguridadPorcentajeDeAccidentesVialesFatales extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Porcentaje de Accidentes Viales Fatales en Lerdo';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-porcentaje-de-accidentes-viales-fatales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de accidentes fatales entre accidentes viales totales';
        $this->claves      = 'IMPLAN, Lerdo, Vialidad, Movilidad, Seguridad, Salud';
        // Para el Organizador
        $this->categorias  = array('Vialidad', 'Movilidad', 'Seguridad', 'Salud');
        $this->fuentes     = array('INEGI');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'porcentaje'),
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
            array('fecha' => '1997-12-31', 'valor' => '1.7798', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '1998-12-31', 'valor' => '2.6471', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '1999-12-31', 'valor' => '1.1321', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2000-12-31', 'valor' => '1.1475', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2001-12-31', 'valor' => '0.4357', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2002-12-31', 'valor' => '0.5098', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2003-12-31', 'valor' => '0.9272', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2004-12-31', 'valor' => '0.4062', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2005-12-31', 'valor' => '0.6547', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2006-12-31', 'valor' => '0.5473', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2007-12-31', 'valor' => '0.6849', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2008-12-31', 'valor' => '1.0138', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2009-12-31', 'valor' => '0.2907', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2010-12-31', 'valor' => '1.3948', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2011-12-31', 'valor' => '1.7150', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2012-12-31', 'valor' => '3.0300', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2013-12-31', 'valor' => '2.0600', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2014-12-31', 'valor' => '1.6500', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2015-12-31', 'valor' => '1.2739', 'fuente_nombre' => 'INEGI'));
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
            'valor' => array('enca' => 'Dato', 'formato' => 'porcentaje'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2015-12-31', 'valor' => '0.4022', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2015-12-31', 'valor' => '1.5112', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2015-12-31', 'valor' => '1.2739', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2015-12-31', 'valor' => '1.4742', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2015-12-31', 'valor' => '0.7187', 'fuente_nombre' => 'INEGI'));
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

} // Clase SeguridadPorcentajeDeAccidentesVialesFatales

?>
