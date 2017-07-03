<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SeguridadTasaDeHomicidios
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
        $this->nombre      = 'Tasa de Homicidios en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-tasa-de-homicidios';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Forma parte de subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el número relativo de homicidios en cada ciudad. A través del Sistema Estatal y Municipal de Bases de Datos (SIMBAD) fue posible identificar el número de homicidios a nivel municipal. Unidades: Homicidios por cada 100 mil habitantes.
Las tasas de elaboración propia consideran las defunciones por homicidio ocurridas en el municipio de acuerdo a los registros administrativos de INEGI.';
        $this->claves      = 'IMPLAN, Torreón, Seguridad, Delincuencia, Índice de Competitividad Urbana';
        // Para el Organizador
        $this->categorias  = array('Seguridad', 'Delincuencia', 'Índice de Competitividad Urbana');
        $this->fuentes     = array('Elaboración propia con datos obtenidos del INEGI', 'IMCO');
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
            array('fecha' => '1990-12-31', 'valor' => '9.7788', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '1991-12-31', 'valor' => '17.0827', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '1992-12-31', 'valor' => '17.2057', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '1993-12-31', 'valor' => '11.5461', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '1994-12-31', 'valor' => '13.9794', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '1995-12-01', 'valor' => '9.6442', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '1996-12-31', 'valor' => '6.6275', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '1997-12-31', 'valor' => '11.7762', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '1998-12-31', 'valor' => '8.0302', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '1999-12-31', 'valor' => '7.9530', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2000-12-31', 'valor' => '6.9876', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2002-12-31', 'valor' => '7.5098', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2003-12-31', 'valor' => '5.7724', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2004-12-31', 'valor' => '6.0401', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2005-12-31', 'valor' => '6.9267', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2006-12-31', 'valor' => '5.5912', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2007-12-31', 'valor' => '4.3102', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2008-12-31', 'valor' => '15.9094', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2008-12-31', 'valor' => '14.7603', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2009-12-31', 'valor' => '23.8267', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '22.6945', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2010-12-31', 'valor' => '46.6435', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '45.0261', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2011-12-31', 'valor' => '75.1916', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '75.3348', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2012-12-31', 'valor' => '109.7160', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '120.7270', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2013-12-31', 'valor' => '52.6807', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2014-12-31', 'valor' => '29.4274', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2015-12-31', 'valor' => '19.7265', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'));
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
Fuente: Instituto Nacional de Estadística y Geografía (INEGI), 2008-2012.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SeguridadTasaDeHomicidios

?>
