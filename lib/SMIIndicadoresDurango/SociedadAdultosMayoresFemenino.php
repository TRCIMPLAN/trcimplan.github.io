<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresDurango SociedadAdultosMayoresFemenino
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
 * Clase SociedadAdultosMayoresFemenino
 */
class SociedadAdultosMayoresFemenino extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Adultos Mayores Femenino en Durango';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-adultos-mayores-femenino';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Población estimada a mediados de año de personas de 65 años y más de sexo femenino.';
        $this->claves      = 'IMPLAN, Durango, Grupos Vulnerables, Género';
        // Para el Organizador
        $this->categorias  = array('Grupos Vulnerables', 'Género');
        $this->fuentes     = array('CONAPO');
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
            array('fecha' => '2011-06-30', 'valor' => '56994', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2012-06-30', 'valor' => '58808', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2013-06-30', 'valor' => '60669', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2014-06-30', 'valor' => '62591', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2015-06-30', 'valor' => '64592', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2016-06-30', 'valor' => '66688', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2017-06-30', 'valor' => '68892', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2018-06-30', 'valor' => '71212', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2019-06-30', 'valor' => '73655', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2020-06-30', 'valor' => '76226', 'fuente_nombre' => 'CONAPO'));
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
            'valor' => array('enca' => 'Dato', 'formato' => 'cantidad'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2017-06-30', 'valor' => '28563', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2017-06-30', 'valor' => '12292', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2017-06-30', 'valor' => '5527', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2017-06-30', 'valor' => '4140', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2017-06-30', 'valor' => '50521', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2017-06-30', 'valor' => '112673', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'Durango', 'fecha' => '2017-06-30', 'valor' => '68892', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'Nacional', 'fecha' => '2017-06-30', 'valor' => '4635025', 'fuente_nombre' => 'CONAPO'));
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

} // Clase SociedadAdultosMayoresFemenino

?>
