<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresDurango SociedadPobrezaExtrema
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

namespace SMIIndicadoresDurango;

/**
 * Clase SociedadPobrezaExtrema
 */
class SociedadPobrezaExtrema extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Pobreza Extrema en Durango';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-pobreza-extrema';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de la población en situación de pobreza extrema.';
        $this->claves      = 'IMPLAN, Durango, Bienestar, Objetivos del Milenio';
        // Para el Organizador
        $this->categorias  = array('Bienestar', 'Objetivos del Milenio');
        $this->fuentes     = array('CONEVAL');
        $this->regiones    = array('Durango');
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
            array('fecha' => '2010-12-31', 'valor' => '10.1200', 'fuente_nombre' => 'CONEVAL'));
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
            'valor' => array('enca' => 'Dato', 'formato' => 'porcentaje'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2010-12-31', 'valor' => '2.8400', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2010-12-31', 'valor' => '5.3000', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2010-12-31', 'valor' => '6.8000', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2010-12-31', 'valor' => '3.9000', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2010-12-31', 'valor' => '4.0000', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2010-12-31', 'valor' => '2.9400', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Durango', 'fecha' => '2010-12-31', 'valor' => '10.1200', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Nacional', 'fecha' => '2010-12-31', 'valor' => '11.2000', 'fuente_nombre' => 'CONEVAL'));
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
Consulta la [Base de Datos](http://www.coneval.gob.mx/Medicion/Paginas/Medici%C3%B3n/Pobreza%202012/Pobreza-2012.aspx)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadPobrezaExtrema

?>
