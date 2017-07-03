<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon EconomiaInflacionAnual
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

namespace SMIIndicadoresTorreon;

/**
 * Clase EconomiaInflacionAnual
 */
class EconomiaInflacionAnual extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Inflación Anual en Torreón';
        $this->fecha       = '2015-02-09T12:19:43';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-inflacion-anual';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = '';
        $this->claves      = 'IMPLAN, Torreón, Macroeconomía';
        // Para el Organizador
        $this->categorias  = array('Macroeconomía');
        $this->fuentes     = array('INEGI');
        $this->regiones    = array('Torreón');
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
            array('fecha' => '2001-12-31', 'valor' => '5.8600', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2002-12-31', 'valor' => '4.3200', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2003-12-31', 'valor' => '4.4100', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2004-12-31', 'valor' => '5.3500', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2005-12-31', 'valor' => '2.7200', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2006-12-31', 'valor' => '4.1200', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2007-12-31', 'valor' => '5.8900', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2008-12-31', 'valor' => '7.2400', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2009-12-31', 'valor' => '3.3100', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2010-12-31', 'valor' => '4.2100', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2011-12-31', 'valor' => '2.6900', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2012-12-31', 'valor' => '2.8400', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2013-12-31', 'valor' => '3.1100', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2014-12-31', 'valor' => '4.2800', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2015-12-31', 'valor' => '1.6700', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2016-12-31', 'valor' => '2.9400', 'fuente_nombre' => 'INEGI'));
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
        return NULL;
    } // observaciones

} // Clase EconomiaInflacionAnual

?>
