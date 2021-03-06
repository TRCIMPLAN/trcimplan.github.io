<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresDurango SociedadUsuariosDeInternet
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
 * Clase SociedadUsuariosDeInternet
 */
class SociedadUsuariosDeInternet extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Usuarios de Internet en Durango';
        $this->fecha       = '2015-01-14T14:50:08';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-usuarios-de-internet';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de la población que usa internet.';
        $this->claves      = 'IMPLAN, Durango, Innovación, Competitividad, Objetivos del Milenio';
        // Para el Organizador
        $this->categorias  = array('Innovación', 'Competitividad', 'Objetivos del Milenio');
        $this->fuentes     = array('INEGI');
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
            array('fecha' => '2013-12-31', 'valor' => '34.0000', 'fuente_nombre' => 'INEGI')); // formateado 0, valor 2, crudo 1
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
            array('region_nombre' => 'Coahuila', 'fecha' => '2013-12-31', 'valor' => '44.0000', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Durango', 'fecha' => '2013-12-31', 'valor' => '34.0000', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Nacional', 'fecha' => '2013-12-31', 'valor' => '40.0000', 'fuente_nombre' => 'INEGI'));
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
El dato disponible es estatal, aunque la metodología de MODUTIH considera la cifra representativa para los municipios. Cálculo realizado con datos de MODUTIH y CONAPO. Se considera a todos los segmentos etarios de la población estimada para 2013. Consulta la [Base deDatos](http://www3.inegi.org.mx/sistemas/sisept/default.aspx?t=tinf255&s=est&c=28978).
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadUsuariosDeInternet

?>
