<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio SustentabilidadAreasVerdesUrbanasPerCapita
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
 * Clase SustentabilidadAreasVerdesUrbanasPerCapita
 */
class SustentabilidadAreasVerdesUrbanasPerCapita extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Áreas verdes urbanas per cápita en Gómez Palacio';
        $this->fecha       = '2019-01-18T10:45:23';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-areas-verdes-urbanas-per-capita';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Metros cuadrados de áreas verdes urbanas';
        $this->claves      = 'IMPLAN, Gómez Palacio, Recursos Naturales';
        // Para el Organizador
        $this->categorias  = array('Recursos Naturales');
        $this->fuentes     = array('IMCO');
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
            array('fecha' => '2016-12-31', 'valor' => '4365423.2500', 'fuente_nombre' => 'IMCO', 'notas' => 'Número de metros cuadrados')); // formateado 0, valor 2, crudo 2
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '4365423.2500', 'fuente_nombre' => 'IMCO', 'notas' => 'Número de metros cuadrados'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '4365423.2500', 'fuente_nombre' => 'IMCO', 'notas' => 'Número de metros cuadrados'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '4365423.2500', 'fuente_nombre' => 'IMCO', 'notas' => 'Número de metros cuadrados'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '4365423.2500', 'fuente_nombre' => 'IMCO', 'notas' => 'Número de metros cuadrados'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2016-12-31', 'valor' => '3.2900', 'fuente_nombre' => 'IMCO'));
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
        return NULL;
    } // observaciones

} // Clase SustentabilidadAreasVerdesUrbanasPerCapita

?>
