<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo SociedadMortalidadPorDiabetes
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
 * Clase SociedadMortalidadPorDiabetes
 */
class SociedadMortalidadPorDiabetes extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Mortalidad por Diabetes en Lerdo';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-mortalidad-por-diabetes';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Tasa de mortalidad por diabetes mellitus. Defunciones por diabetes por cada diez mil defunciones.
Se incluye en el subíndice "Sociedad Incluyente, Preparada y Sana" de IMCO.';
        $this->claves      = 'IMPLAN, Lerdo, Salud, Índice de Competitividad Urbana';
        // Para el Organizador
        $this->categorias  = array('Salud', 'Índice de Competitividad Urbana');
        $this->fuentes     = array('SINAIS (SSA)');
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
            array('fecha' => '2000-12-31', 'valor' => '5.1000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2001-12-31', 'valor' => '5.7000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2002-12-31', 'valor' => '6.0000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2003-12-31', 'valor' => '6.4000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2004-12-31', 'valor' => '5.5000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2005-12-31', 'valor' => '8.0000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2006-12-31', 'valor' => '7.7000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2007-12-31', 'valor' => '8.5000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2008-12-31', 'valor' => '7.5000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2009-12-31', 'valor' => '8.5000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2010-12-31', 'valor' => '7.8000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2011-12-31', 'valor' => '6.2000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2012-12-31', 'valor' => '7.0000', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => 'Dirección General de Información en Salud (DGIS). Base de datos de defunciones generales 1979-2007. [en línea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaría de Salud. <http://www.sinais.salud.gob.mx> [Consulta: 01 abril 2014].'),
            array('fecha' => '2013-12-31', 'valor' => '7.3000', 'fuente_nombre' => 'SINAIS (SSA)'));
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
Los datos pueden modificarse debido al manejo de los registros administrativos por parte de la Secretaria de Salud.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadMortalidadPorDiabetes

?>
