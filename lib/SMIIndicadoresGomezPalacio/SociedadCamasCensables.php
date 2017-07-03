<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio SociedadCamasCensables
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
 * Clase SociedadCamasCensables
 */
class SociedadCamasCensables extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Camas Censables en Gómez Palacio';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-camas-censables';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = '';
        $this->claves      = 'IMPLAN, Gómez Palacio, Salud';
        // Para el Organizador
        $this->categorias  = array('Salud');
        $this->fuentes     = array('SINAIS (SSA)');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'cantidad'),
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
            array('fecha' => '2001-12-31', 'valor' => '72', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2002-12-31', 'valor' => '72', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2004-12-31', 'valor' => '74', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2005-12-31', 'valor' => '74', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2006-12-31', 'valor' => '72', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2007-12-31', 'valor' => '75', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2008-12-31', 'valor' => '64', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2009-12-31', 'valor' => '64', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2010-12-31', 'valor' => '72', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2011-12-31', 'valor' => '72', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2012-12-31', 'valor' => '72', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2013-12-31', 'valor' => '346', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2014-12-31', 'valor' => '346', 'fuente_nombre' => 'SINAIS (SSA)'));
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
1. Hasta los datos de 2012 la Dirección General de Información de Salud (DGIS) considera únicamente al Hospital General de Torreón y el Hospital Integral de Matamoros, Hospital General de Lerdo y el Hospital General de Gómez Palacio. Para 2013 y 2014 se agregan las cifras de las unidades pertenecientes al IMSS, SEDENA, SSA, ISSSTE y Universitarios.
2. Los datos de años anteriores a 2013 irán aumentando debido a la carga de la información concerniente al punto anterior.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadCamasCensables

?>
