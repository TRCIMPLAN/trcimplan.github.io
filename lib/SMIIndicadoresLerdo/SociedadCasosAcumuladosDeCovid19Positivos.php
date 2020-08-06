<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo SociedadCasosAcumuladosDeCovid19Positivos
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
 * Clase SociedadCasosAcumuladosDeCovid19Positivos
 */
class SociedadCasosAcumuladosDeCovid19Positivos extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Casos acumulados de COVID-19 positivos en Lerdo';
        $this->fecha       = '2020-04-15T13:06:07';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-casos-acumulados-de-covid-19-positivos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Acumulado de casos positivos de la enfermedad COVID-19 según el Sistema de Vigilancia Epidemiológica de Enfermedades Respiratoria Viral.';
        $this->claves      = 'IMPLAN, Lerdo, Salud';
        // Para el Organizador
        $this->categorias  = array('Salud');
        $this->fuentes     = array('Secretaría de Salud');
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
            array('fecha' => '2020-04-13', 'valor' => '0', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-14', 'valor' => '0', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-15', 'valor' => '0', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-16', 'valor' => '0', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-17', 'valor' => '1', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-18', 'valor' => '1', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-19', 'valor' => '1', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-20', 'valor' => '1', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-21', 'valor' => '1', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-22', 'valor' => '1', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-23', 'valor' => '2', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-24', 'valor' => '2', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-25', 'valor' => '2', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-26', 'valor' => '2', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-27', 'valor' => '2', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-28', 'valor' => '2', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-29', 'valor' => '2', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-30', 'valor' => '2', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-01', 'valor' => '2', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-02', 'valor' => '2', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-03', 'valor' => '2', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-04', 'valor' => '2', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-05', 'valor' => '2', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-06', 'valor' => '3', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-07', 'valor' => '3', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-08', 'valor' => '3', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-09', 'valor' => '3', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-10', 'valor' => '3', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-11', 'valor' => '3', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-11', 'valor' => '3', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-12', 'valor' => '3', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-13', 'valor' => '3', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-14', 'valor' => '3', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-15', 'valor' => '4', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-16', 'valor' => '4', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-17', 'valor' => '4', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-18', 'valor' => '5', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-19', 'valor' => '6', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-20', 'valor' => '6', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-21', 'valor' => '7', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-22', 'valor' => '7', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-23', 'valor' => '6', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-24', 'valor' => '6', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-26', 'valor' => '9', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-27', 'valor' => '12', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-28', 'valor' => '16', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-29', 'valor' => '17', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-30', 'valor' => '18', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-31', 'valor' => '21', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-01', 'valor' => '22', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-02', 'valor' => '23', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-03', 'valor' => '27', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-04', 'valor' => '30', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-05', 'valor' => '32', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-06', 'valor' => '33', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-07', 'valor' => '44', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-08', 'valor' => '44', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-09', 'valor' => '46', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-10', 'valor' => '50', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-11', 'valor' => '58', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-12', 'valor' => '64', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-13', 'valor' => '67', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-14', 'valor' => '75', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-15', 'valor' => '75', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-16', 'valor' => '75', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-17', 'valor' => '78', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-18', 'valor' => '85', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-19', 'valor' => '101', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-20', 'valor' => '106', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-21', 'valor' => '108', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-22', 'valor' => '108', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-23', 'valor' => '112', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-24', 'valor' => '115', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-25', 'valor' => '120', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-26', 'valor' => '130', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-27', 'valor' => '133', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-28', 'valor' => '139', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-29', 'valor' => '153', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-30', 'valor' => '160', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-01', 'valor' => '174', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-02', 'valor' => '179', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-03', 'valor' => '194', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-04', 'valor' => '209', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-05', 'valor' => '221', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-06', 'valor' => '221', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-07', 'valor' => '222', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-08', 'valor' => '230', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-09', 'valor' => '243', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-10', 'valor' => '252', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-11', 'valor' => '262', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-12', 'valor' => '270', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-13', 'valor' => '275', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-14', 'valor' => '276', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-15', 'valor' => '285', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-16', 'valor' => '294', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-17', 'valor' => '304', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-18', 'valor' => '311', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-19', 'valor' => '320', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-20', 'valor' => '320', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-21', 'valor' => '320', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-22', 'valor' => '327', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-23', 'valor' => '343', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-24', 'valor' => '346', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-25', 'valor' => '359', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-26', 'valor' => '366', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-27', 'valor' => '369', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-28', 'valor' => '372', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-29', 'valor' => '375', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-30', 'valor' => '379', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-31', 'valor' => '392', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-08-01', 'valor' => '395', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-08-02', 'valor' => '398', 'fuente_nombre' => 'Secretaría de Salud')); // formateado 0, valor 224, crudo 112
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
            array('region_nombre' => 'Torreón', 'fecha' => '2020-08-02', 'valor' => '3585', 'fuente_nombre' => 'Secretaría de Salud'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2020-08-02', 'valor' => '1643', 'fuente_nombre' => 'Secretaría de Salud'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2020-08-02', 'valor' => '398', 'fuente_nombre' => 'Secretaría de Salud'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2020-08-02', 'valor' => '368', 'fuente_nombre' => 'Secretaría de Salud'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2020-08-02', 'valor' => '5994', 'fuente_nombre' => 'Secretaría de Salud'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2020-05-19', 'valor' => '227', 'fuente_nombre' => 'Secretaría de Salud'));
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

} // Clase SociedadCasosAcumuladosDeCovid19Positivos

?>
