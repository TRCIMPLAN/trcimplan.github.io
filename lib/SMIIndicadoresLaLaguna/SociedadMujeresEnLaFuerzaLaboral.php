<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SociedadMujeresEnLaFuerzaLaboral
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
 * Clase SociedadMujeresEnLaFuerzaLaboral
 */
class SociedadMujeresEnLaFuerzaLaboral extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Mujeres en la Fuerza Laboral en La Laguna';
        $this->fecha       = '2015-07-14T15:45:57';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-mujeres-en-la-fuerza-laboral';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el número de mujeres en la PEA como proporción del total de mujeres en edad de trabajar. De acuerdo con la ENOE, la edad para trabajar empieza a partir de los 14 años.';
        $this->claves      = 'IMPLAN, La Laguna, Índice de Competitividad Urbana, Género';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Género');
        $this->fuentes     = array('IMCO', 'INEGI');
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
            array('fecha' => '2008-12-31', 'valor' => '42.3700', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '40.3500', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '37.7800', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '43.9100', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '42.2900', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2016-12-31', 'valor' => '10.0000', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2018-12-31', 'valor' => '48.6200', 'fuente_nombre' => 'INEGI', 'notas' => 'Aparece en: Encuesta Nacional de Ocupación y Empleo (ENOE)')); // formateado 0, valor 14, crudo 8
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
            'valor' => array('enca' => 'Dato', 'formato' => 'texto'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '126979', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de mujeres de 15 años o más económicamente activas'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '60291', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de mujeres de 15 años o más económicamente activas'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '24582', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '32042', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de mujeres de 15 años o más económicamente activas'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2018-12-31', 'valor' => '48.6200', 'fuente_nombre' => 'INEGI', 'notas' => 'Aparece en: Encuesta Nacional de Ocupación y Empleo (ENOE)'));
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
Fuente: INEGI (ENOE).
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadMujeresEnLaFuerzaLaboral

?>
