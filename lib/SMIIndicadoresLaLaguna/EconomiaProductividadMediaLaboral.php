<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna EconomiaProductividadMediaLaboral
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
 * Clase EconomiaProductividadMediaLaboral
 */
class EconomiaProductividadMediaLaboral extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Productividad Media Laboral en La Laguna';
        $this->fecha       = '2015-07-14T14:36:51';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-productividad-media-laboral';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice de "Mercado Laboral". Mide la productividad promedio de los trabajadores, descontando el efecto de las actividades de extracción en el sector minero/petrolero y de refinación y petroquímica (contabilizadas en las actividades económicas 21, 324 y 32511 según el Sistema de Clasificación Industrial de América del Norte). Este indicador se calculó dividiendo el PIB de la ciudad descontado por uno menos el porcentaje que aporta el sector minero y las actividades de refinación y petroquímica, entre el número de trabajadores en la PEA.';
        $this->claves      = 'IMPLAN, La Laguna, Índice de Competitividad Urbana, Empleo, Sector Automotriz';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Empleo', 'Sector Automotriz');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'dinero'),
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
            array('fecha' => '2008-12-31', 'valor' => '406.32', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '432.99', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '427.85', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '391.99', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '416.42', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2016-12-31', 'valor' => '289.33', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 el dinero es por "Pesos por hora trabajada"'),
            array('fecha' => '2017-12-31', 'valor' => '232.36', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2018-12-31', 'valor' => '227.87', 'fuente_nombre' => 'IMCO')); // formateado 0, valor 16, crudo 9
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
            'valor' => array('enca' => 'Dato', 'formato' => 'dinero'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2012-12-31', 'valor' => '729.82', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2012-12-31', 'valor' => '1771.11', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2012-12-31', 'valor' => '4094.59', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2012-12-31', 'valor' => '4496.77', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2018-12-31', 'valor' => '227.87', 'fuente_nombre' => 'IMCO'));
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
Miles de pesos de 2012
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaProductividadMediaLaboral

?>
