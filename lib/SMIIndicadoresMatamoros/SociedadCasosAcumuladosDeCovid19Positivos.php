<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros SociedadCasosAcumuladosDeCovid19Positivos
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

namespace SMIIndicadoresMatamoros;

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
        $this->nombre      = 'Casos acumulados de COVID-19 positivos en Matamoros';
        $this->fecha       = '2020-04-15T13:06:07';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-casos-acumulados-de-covid-19-positivos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Acumulado de casos positivos de la enfermedad COVID-19 según el Sistema de Vigilancia Epidemiológica de Enfermedades Respiratoria Viral.';
        $this->claves      = 'IMPLAN, Matamoros, Salud';
        // Para el Organizador
        $this->categorias  = array('Salud');
        $this->fuentes     = array('Secretaría de Salud');
        $this->regiones    = array('Matamoros');
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
            array('fecha' => '2020-04-13', 'valor' => '8', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-14', 'valor' => '10', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-15', 'valor' => '10', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-16', 'valor' => '10', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-17', 'valor' => '10', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-18', 'valor' => '10', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-19', 'valor' => '10', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-20', 'valor' => '11', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-21', 'valor' => '11', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-22', 'valor' => '11', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-23', 'valor' => '11', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-24', 'valor' => '13', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-25', 'valor' => '14', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-26', 'valor' => '14', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-27', 'valor' => '15', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-28', 'valor' => '15', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-28', 'valor' => '15', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-29', 'valor' => '15', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-30', 'valor' => '15', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-01', 'valor' => '15', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-02', 'valor' => '15', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-03', 'valor' => '15', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-04', 'valor' => '16', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-05', 'valor' => '16', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-06', 'valor' => '17', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-07', 'valor' => '18', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-08', 'valor' => '19', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-09', 'valor' => '19', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-10', 'valor' => '19', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-11', 'valor' => '20', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-12', 'valor' => '21', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-13', 'valor' => '21', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-13', 'valor' => '22', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-15', 'valor' => '23', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-16', 'valor' => '24', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-17', 'valor' => '24', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-18', 'valor' => '26', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-19', 'valor' => '28', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-20', 'valor' => '30', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-21', 'valor' => '30', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-22', 'valor' => '30', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-23', 'valor' => '30', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-24', 'valor' => '31', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-25', 'valor' => '31', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-26', 'valor' => '31', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-27', 'valor' => '35', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-29', 'valor' => '38', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-30', 'valor' => '42', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-31', 'valor' => '42', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-01', 'valor' => '42', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-02', 'valor' => '44', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-03', 'valor' => '48', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-04', 'valor' => '52', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-05', 'valor' => '54', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-06', 'valor' => '57', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-07', 'valor' => '60', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-08', 'valor' => '60', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-09', 'valor' => '60', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-10', 'valor' => '61', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-11', 'valor' => '77', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-12', 'valor' => '78', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-13', 'valor' => '79', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-14', 'valor' => '82', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-15', 'valor' => '83', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-16', 'valor' => '96', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-17', 'valor' => '100', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-18', 'valor' => '102', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-19', 'valor' => '109', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-20', 'valor' => '119', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-21', 'valor' => '122', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-22', 'valor' => '122', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-23', 'valor' => '127', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-24', 'valor' => '131', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-25', 'valor' => '136', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-26', 'valor' => '141', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-27', 'valor' => '142', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-28', 'valor' => '150', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-29', 'valor' => '157', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-30', 'valor' => '163', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-01', 'valor' => '175', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-02', 'valor' => '185', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-03', 'valor' => '190', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-04', 'valor' => '194', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-05', 'valor' => '198', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-06', 'valor' => '207', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-07', 'valor' => '220', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-08', 'valor' => '226', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-09', 'valor' => '227', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-10', 'valor' => '229', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-11', 'valor' => '238', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-12', 'valor' => '246', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-13', 'valor' => '247', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-14', 'valor' => '256', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-15', 'valor' => '261', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-16', 'valor' => '270', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-17', 'valor' => '276', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-18', 'valor' => '286', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-19', 'valor' => '287', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-20', 'valor' => '296', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-21', 'valor' => '309', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-22', 'valor' => '312', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-23', 'valor' => '321', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-24', 'valor' => '329', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-25', 'valor' => '330', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-26', 'valor' => '336', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-27', 'valor' => '343', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-28', 'valor' => '349', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-29', 'valor' => '349', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-30', 'valor' => '349', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-31', 'valor' => '355', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-08-01', 'valor' => '363', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-08-02', 'valor' => '368', 'fuente_nombre' => 'Secretaría de Salud')); // formateado 0, valor 224, crudo 112
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
