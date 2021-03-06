<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros SeguridadAccidentesDeTransito
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

namespace SMIIndicadoresMatamoros;

/**
 * Clase SeguridadAccidentesDeTransito
 */
class SeguridadAccidentesDeTransito extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Accidentes de Tránsito en Matamoros';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-accidentes-de-transito';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Cantidad total de accidentes de tránsito por año.';
        $this->claves      = 'IMPLAN, Matamoros, Vialidad, Movilidad, Seguridad, Sector Automotriz';
        // Para el Organizador
        $this->categorias  = array('Vialidad', 'Movilidad', 'Seguridad', 'Sector Automotriz');
        $this->fuentes     = array('INEGI');
        $this->regiones    = array('Matamoros');
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
            array('fecha' => '1997-12-31', 'valor' => '87', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '1998-12-31', 'valor' => '94', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '1999-12-31', 'valor' => '39', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2000-12-31', 'valor' => '169', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2001-12-31', 'valor' => '155', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2002-12-31', 'valor' => '141', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2003-12-31', 'valor' => '140', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2004-12-31', 'valor' => '281', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2005-12-31', 'valor' => '212', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2006-12-31', 'valor' => '335', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2007-12-31', 'valor' => '524', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2008-12-31', 'valor' => '546', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2009-12-31', 'valor' => '369', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2010-12-31', 'valor' => '439', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2011-12-31', 'valor' => '321', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2012-12-31', 'valor' => '289', 'fuente_nombre' => 'INEGI', 'notas' => 'Número de accidentes registrados durante el año 2012.'),
            array('fecha' => '2013-12-31', 'valor' => '161', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2014-12-31', 'valor' => '164', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2015-12-31', 'valor' => '209', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2016-12-31', 'valor' => '132', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2017-12-31', 'valor' => '175', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2018-12-31', 'valor' => '128', 'fuente_nombre' => 'INEGI')); // formateado 0, valor 44, crudo 23
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
            'valor' => array('enca' => 'Dato', 'formato' => 'cantidad'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2018-12-31', 'valor' => '4182', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2018-12-31', 'valor' => '2506', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2018-12-31', 'valor' => '243', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2018-12-31', 'valor' => '128', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2018-12-31', 'valor' => '7059', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2018-12-31', 'valor' => '13249', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Durango', 'fecha' => '2018-12-31', 'valor' => '6147', 'fuente_nombre' => 'INEGI'));
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
Consulta la [Base de Datos](http://www.inegi.org.mx/sistemas/olap/Proyectos/bd/continuas/transporte/accidentes.asp?s=est&c=13159&proy=atus_accidentes)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SeguridadAccidentesDeTransito

?>
