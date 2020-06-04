<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio SociedadCasosAcumuladosDeCovid19Negativos
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
 * Clase SociedadCasosAcumuladosDeCovid19Negativos
 */
class SociedadCasosAcumuladosDeCovid19Negativos extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Casos acumulados de COVID-19 negativos en Gómez Palacio';
        $this->fecha       = '2020-04-15T13:14:16';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-casos-acumulados-de-covid-19-negativos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Acumulado de casos negativos de la enfermedad COVID-19, según el Sistema de Vigilancia Epidemiológica de Enfermedades Respiratoria Viral.';
        $this->claves      = 'IMPLAN, Gómez Palacio, Salud';
        // Para el Organizador
        $this->categorias  = array('Salud');
        $this->fuentes     = array('Secretaría de Salud');
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
            array('fecha' => '2020-04-13', 'valor' => '131', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-14', 'valor' => '133', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-15', 'valor' => '132', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-16', 'valor' => '140', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-17', 'valor' => '138', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-18', 'valor' => '142', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-19', 'valor' => '143', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-20', 'valor' => '167', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-21', 'valor' => '174', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-22', 'valor' => '204', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-23', 'valor' => '216', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-24', 'valor' => '222', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-25', 'valor' => '239', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-26', 'valor' => '243', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-27', 'valor' => '252', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-28', 'valor' => '252', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-28', 'valor' => '547', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-29', 'valor' => '268', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-30', 'valor' => '278', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-01', 'valor' => '290', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-02', 'valor' => '291', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-03', 'valor' => '291', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-04', 'valor' => '301', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-05', 'valor' => '304', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-06', 'valor' => '328', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-08', 'valor' => '347', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-09', 'valor' => '354', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-10', 'valor' => '362', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-11', 'valor' => '366', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-12', 'valor' => '373', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-13', 'valor' => '377', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-14', 'valor' => '385', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-15', 'valor' => '392', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-16', 'valor' => '399', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-17', 'valor' => '400', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-18', 'valor' => '427', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-19', 'valor' => '441', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-20', 'valor' => '450', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-21', 'valor' => '462', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-22', 'valor' => '473', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-23', 'valor' => '488', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-24', 'valor' => '490', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-25', 'valor' => '510', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-26', 'valor' => '515', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-27', 'valor' => '525', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-29', 'valor' => '551', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-30', 'valor' => '594', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-31', 'valor' => '623', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-01', 'valor' => '628', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-02', 'valor' => '631', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-03', 'valor' => '657', 'fuente_nombre' => 'Secretaría de Salud')); // formateado 0, valor 102, crudo 51
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
            array('region_nombre' => 'Torreón', 'fecha' => '2020-06-03', 'valor' => '357', 'fuente_nombre' => 'Secretaría de Salud'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2020-06-03', 'valor' => '657', 'fuente_nombre' => 'Secretaría de Salud'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2020-06-03', 'valor' => '191', 'fuente_nombre' => 'Secretaría de Salud'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2020-06-03', 'valor' => '160', 'fuente_nombre' => 'Secretaría de Salud'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2020-06-03', 'valor' => '2779', 'fuente_nombre' => 'Secretaría de Salud'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2020-05-17', 'valor' => '123', 'fuente_nombre' => 'Secretaría de Salud'));
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

} // Clase SociedadCasosAcumuladosDeCovid19Negativos

?>
