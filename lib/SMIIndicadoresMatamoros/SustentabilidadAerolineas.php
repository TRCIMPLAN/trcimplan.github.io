<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros SustentabilidadAerolineas
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
 * Clase SustentabilidadAerolineas
 */
class SustentabilidadAerolineas extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Aerolíneas en Matamoros';
        $this->fecha       = '2015-07-14T16:05:23';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-aerolineas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice "Precursores". Qué mide: El número de aerolíneas que operan en el aeropuerto de la ciudad.';
        $this->claves      = 'IMPLAN, Matamoros, Índice de Competitividad Urbana';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana');
        $this->fuentes     = array('IMCO');
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
            array('fecha' => '2008-12-31', 'valor' => '0', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '0', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '0', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '0', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '0', 'fuente_nombre' => 'IMCO'));
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
Fuente: IMCO con información de la Secretaría de Comunicaciones y Transportes (SCT), 2013.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadAerolineas

?>
