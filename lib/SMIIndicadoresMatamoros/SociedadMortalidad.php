<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros SociedadMortalidad
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
 * Clase SociedadMortalidad
 */
class SociedadMortalidad extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Mortalidad en Matamoros';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-mortalidad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Tasa de Mortalidad. Número de muertes por cada mil habitantes.';
        $this->claves      = 'IMPLAN, Matamoros, Salud';
        // Para el Organizador
        $this->categorias  = array('Salud');
        $this->fuentes     = array('SINAIS (SSA)');
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
            array('fecha' => '2000-12-31', 'valor' => '3.9000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2001-12-31', 'valor' => '3.8000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2002-12-31', 'valor' => '4.0000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2003-12-31', 'valor' => '4.4000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2004-12-31', 'valor' => '4.6000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2005-12-31', 'valor' => '5.0000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2006-12-31', 'valor' => '4.8000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2007-12-31', 'valor' => '4.8000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2008-12-31', 'valor' => '4.8000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2009-12-31', 'valor' => '4.8000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2010-12-31', 'valor' => '4.6000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2011-12-31', 'valor' => '4.9000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2012-12-31', 'valor' => '5.3000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2013-12-31', 'valor' => '4.9000', 'fuente_nombre' => 'SINAIS (SSA)'));
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
Fuente: Dirección General de Información en Salud (DGIS). Base de datos de defunciones generales 1979-2013. Base de Datos Defunciones Cifras Oficiales Preliminares-SEED [en línea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaría de Salud. <www.dgis.salud.gob.mx> [Consulta: 29 Junio 2015]. Con estimaciones de población de CONAPO.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadMortalidad

?>
