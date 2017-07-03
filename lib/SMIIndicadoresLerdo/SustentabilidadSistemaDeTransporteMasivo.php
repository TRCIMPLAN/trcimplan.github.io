<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo SustentabilidadSistemaDeTransporteMasivo
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
 * Clase SustentabilidadSistemaDeTransporteMasivo
 */
class SustentabilidadSistemaDeTransporteMasivo extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Sistema de Transporte Masivo en Lerdo';
        $this->fecha       = '2015-07-14T16:01:53';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-sistema-de-transporte-masivo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice "Precursores". Qué mide: Si una ciudad cuenta con un sistema de transporte masivo en operación, en construcción, en estatus de proyecto o ninguna de las tres.';
        $this->claves      = 'IMPLAN, Lerdo, Índice de Competitividad Urbana, Movilidad';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Movilidad');
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
            array('fecha' => '2008-12-31', 'valor' => '0', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '0', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '0', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '1', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '1', 'fuente_nombre' => 'IMCO'));
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
Unidades: Variable categórica que toma el valor de tres si se trata de una ciudad con un sistema de trasporte masivo en operación, dos si el sistema se encuentra en construcción o bien si se trata de una ciudad de menos de 250 mil habitantes, uno si se tiene aprobado el proyecto ejecutivo del sistema por parte de Banobras, o cero en otro caso. Fuente: Centro de Transporte Sustentable (CTS)/ Banco Nacional de Obras y Servicios Públicos (Banobras)/ El Poder del Consumidor A.C. (EPC), 2008-2012.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadSistemaDeTransporteMasivo

?>
