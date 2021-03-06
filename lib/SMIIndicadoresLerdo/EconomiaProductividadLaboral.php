<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo EconomiaProductividadLaboral
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
 * Clase EconomiaProductividadLaboral
 */
class EconomiaProductividadLaboral extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Productividad Laboral en Lerdo';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-productividad-laboral';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'PIB sin petróleo / PEA.';
        $this->claves      = 'IMPLAN, Lerdo, Macroeconomía, Empleo';
        // Para el Organizador
        $this->categorias  = array('Macroeconomía', 'Empleo');
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
            array('fecha' => '2010-12-31', 'valor' => '51284.00', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2018-12-31', 'valor' => '2882.34', 'fuente_nombre' => 'IMCO', 'notas' => 'Valor agregado')); // formateado 0, valor 4, crudo 3
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
            array('region_nombre' => 'Torreón', 'fecha' => '2018-12-31', 'valor' => '111780.50', 'fuente_nombre' => 'IMCO', 'notas' => 'Valor agregado'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2018-12-31', 'valor' => '33051.82', 'fuente_nombre' => 'IMCO', 'notas' => 'Valor agregado'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2018-12-31', 'valor' => '2882.34', 'fuente_nombre' => 'IMCO', 'notas' => 'Valor agregado'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2018-12-31', 'valor' => '1994.34', 'fuente_nombre' => 'IMCO', 'notas' => 'Valor agregado'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2018-12-31', 'valor' => '149709.00', 'fuente_nombre' => 'IMCO', 'notas' => 'Valor agregado'));
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
Indicador tomado del Índice de Competitividad Urbana 2012 del Instituto Mexicano para la Competitividad. Ir a [base de datos](http://porciudad.comparadondevives.org/contacto)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaProductividadLaboral

?>
