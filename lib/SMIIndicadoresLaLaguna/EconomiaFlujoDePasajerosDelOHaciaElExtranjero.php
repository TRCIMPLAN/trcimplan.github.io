<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna EconomiaFlujoDePasajerosDelOHaciaElExtranjero
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

namespace SMIIndicadoresLaLaguna;

/**
 * Clase EconomiaFlujoDePasajerosDelOHaciaElExtranjero
 */
class EconomiaFlujoDePasajerosDelOHaciaElExtranjero extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Flujo de Pasajeros del o Hacia el Extranjero en La Laguna';
        $this->fecha       = '2015-07-14T15:12:08';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-flujo-de-pasajeros-del-o-hacia-el-extranjero';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice de "Aprovechamiento de las Relaciones Internacionales". Mide el total de pasajeros en vuelos provenientes del extranjero que tienen como destino la ciudad correspondiente o que salen de ésta con destino al exterior como porcentaje del total de pasajeros aéreos al año.';
        $this->claves      = 'IMPLAN, La Laguna, Índice de Competitividad Urbana, Movilidad';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Movilidad');
        $this->fuentes     = array('IMCO');
        $this->regiones    = array('La Laguna');
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
            array('fecha' => '2008-12-31', 'valor' => '13.5900', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '11.0400', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '14.0400', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '13.4100', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '14.4400', 'fuente_nombre' => 'IMCO'));
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
Porcentaje del total de pasajeros aéreos.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaFlujoDePasajerosDelOHaciaElExtranjero

?>
