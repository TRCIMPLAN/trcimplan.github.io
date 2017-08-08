<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresNacional SociedadMedicos
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

namespace SMIIndicadoresNacional;

/**
 * Clase SociedadMedicos
 */
class SociedadMedicos extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Médicos en Nacional';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-medicos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Médicos en contacto con pacientes por cada diez mil personas.';
        $this->claves      = 'IMPLAN, Nacional, Salud, Índice de Competitividad Urbana';
        // Para el Organizador
        $this->categorias  = array('Salud', 'Índice de Competitividad Urbana');
        $this->fuentes     = array('SINAIS (SSA)');
        $this->regiones    = array('Nacional');
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
            array('fecha' => '2001-12-31', 'valor' => '5.2000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2002-12-31', 'valor' => '5.3000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2003-12-31', 'valor' => '5.4000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2004-12-31', 'valor' => '5.4000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2004-12-31', 'valor' => '5.7000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2005-12-31', 'valor' => '5.9000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2006-12-31', 'valor' => '6.2000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2007-12-31', 'valor' => '6.5000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2008-12-31', 'valor' => '6.8000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2009-12-31', 'valor' => '7.1000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2010-12-31', 'valor' => '7.2000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2011-12-31', 'valor' => '7.6000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2012-12-31', 'valor' => '7.6000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2012-12-31', 'valor' => '7.6000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2013-12-31', 'valor' => '7.8000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2014-12-31', 'valor' => '8.3000', 'fuente_nombre' => 'SINAIS (SSA)'));
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
            'valor' => array('enca' => 'Dato', 'formato' => 'decimal'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2014-12-31', 'valor' => '2.1000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2014-12-31', 'valor' => '4.3000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2014-12-31', 'valor' => '6.3000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2014-12-31', 'valor' => '4.4000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2014-12-31', 'valor' => '3.4000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2014-12-31', 'valor' => '4.5000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('region_nombre' => 'Durango', 'fecha' => '2014-12-31', 'valor' => '8.8000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('region_nombre' => 'Nacional', 'fecha' => '2014-12-31', 'valor' => '8.3000', 'fuente_nombre' => 'SINAIS (SSA)'));
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
Dirección General de Información en Salud (DGIS). Base de datos de recursos (infraestructura, materiales y humanos) de la Secretaría de Salud y los Servicios Estatales de Salud 2001-2013: [Sistema Nacional de Información en Salud](http://www.sinais.salud.gob.mx) (SINAIS). México: Secretaría de Salud. Consulta: 23 Octubre 2014.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadMedicos

?>
