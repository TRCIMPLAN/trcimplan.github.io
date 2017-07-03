<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio GobiernoIndiceDeGobiernoElectronicoMunicipal
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
 * Clase GobiernoIndiceDeGobiernoElectronicoMunicipal
 */
class GobiernoIndiceDeGobiernoElectronicoMunicipal extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Índice de Gobierno Electrónico Municipal en Gómez Palacio';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-indice-de-gobierno-electronico-municipal';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Índice que abarca líneas telefónicas, computadoras, funcionalidad sitio web, información sitio, conexión a internet estableciendo un valor de 0 a 1.';
        $this->claves      = 'IMPLAN, Gómez Palacio, Gobierno Digital';
        // Para el Organizador
        $this->categorias  = array('Gobierno Digital');
        $this->fuentes     = array('CIDE');
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
            array('fecha' => '2011-12-31', 'valor' => '0.4763', 'fuente_nombre' => 'CIDE'));
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
Consulta la base de datos del Índice de [Gobierno Electrónico Municipal](http://biiacs-dspace.cide.edu/handle/10089/16427)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase GobiernoIndiceDeGobiernoElectronicoMunicipal

?>
