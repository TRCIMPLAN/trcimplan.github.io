<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo SeguridadAccidentesViales
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
 * Clase SeguridadAccidentesViales
 */
class SeguridadAccidentesViales extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Accidentes Viales en Lerdo';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-accidentes-viales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Cantidad de accidentes viales por año.';
        $this->claves      = 'IMPLAN, Lerdo, Vialidad, Movilidad, Seguridad';
        // Para el Organizador
        $this->categorias  = array('Vialidad', 'Movilidad', 'Seguridad');
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
            array('fecha' => '1997-12-31', 'valor' => '423', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '1998-12-31', 'valor' => '486', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '1999-12-31', 'valor' => '497', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2000-12-31', 'valor' => '581', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2001-12-31', 'valor' => '643', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2002-12-31', 'valor' => '645', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2003-12-31', 'valor' => '670', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2004-12-31', 'valor' => '666', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2005-12-31', 'valor' => '1343', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2006-12-31', 'valor' => '1104', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2007-12-31', 'valor' => '884', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2008-12-31', 'valor' => '602', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2009-12-31', 'valor' => '566', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2010-12-31', 'valor' => '519', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2011-12-31', 'valor' => '433', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2012-12-31', 'valor' => '362', 'fuente_nombre' => 'INEGI', 'notas' => 'Número de accidentes registrados durante el año 2012.'),
            array('fecha' => '2013-12-31', 'valor' => '242', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2014-12-31', 'valor' => '362', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2015-12-31', 'valor' => '343', 'fuente_nombre' => 'INEGI'));
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
Consulta la [Base de Datos](http://www.inegi.org.mx/sistemas/olap/Proyectos/bd/continuas/transporte/accidentes.asp?s=est&c=13159&proy=atus_accidentes)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SeguridadAccidentesViales

?>
