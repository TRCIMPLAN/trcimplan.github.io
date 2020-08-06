<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadCasosAcumuladosDeCovid19Positivos
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

namespace SMIIndicadoresTorreon;

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
        $this->nombre      = 'Casos acumulados de COVID-19 positivos en Torreón';
        $this->fecha       = '2020-04-15T13:06:07';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-casos-acumulados-de-covid-19-positivos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Acumulado de casos positivos de la enfermedad COVID-19 según el Sistema de Vigilancia Epidemiológica de Enfermedades Respiratoria Viral.';
        $this->claves      = 'IMPLAN, Torreón, Salud';
        // Para el Organizador
        $this->categorias  = array('Salud');
        $this->fuentes     = array('Secretaría de Salud');
        $this->regiones    = array('Torreón');
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
            array('fecha' => '2020-04-13', 'valor' => '20', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-14', 'valor' => '21', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-15', 'valor' => '21', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-16', 'valor' => '23', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-17', 'valor' => '23', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-18', 'valor' => '23', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-19', 'valor' => '23', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-20', 'valor' => '27', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-21', 'valor' => '27', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-22', 'valor' => '26', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-23', 'valor' => '28', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-24', 'valor' => '29', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-25', 'valor' => '33', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-26', 'valor' => '36', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-27', 'valor' => '37', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-28', 'valor' => '41', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-29', 'valor' => '41', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-30', 'valor' => '50', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-01', 'valor' => '51', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-02', 'valor' => '51', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-03', 'valor' => '51', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-04', 'valor' => '59', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-05', 'valor' => '60', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-06', 'valor' => '62', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-07', 'valor' => '72', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-08', 'valor' => '79', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-09', 'valor' => '84', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-10', 'valor' => '90', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-11', 'valor' => '96', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-12', 'valor' => '97', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-13', 'valor' => '103', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-14', 'valor' => '106', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-15', 'valor' => '113', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-16', 'valor' => '124', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-17', 'valor' => '132', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-18', 'valor' => '134', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-19', 'valor' => '139', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-20', 'valor' => '164', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-21', 'valor' => '170', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-22', 'valor' => '180', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-23', 'valor' => '181', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-24', 'valor' => '183', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-25', 'valor' => '208', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-26', 'valor' => '257', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-27', 'valor' => '257', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-28', 'valor' => '258', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-29', 'valor' => '272', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-30', 'valor' => '297', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-31', 'valor' => '297', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-01', 'valor' => '299', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-02', 'valor' => '327', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-03', 'valor' => '357', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-04', 'valor' => '393', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-05', 'valor' => '418', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-06', 'valor' => '446', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-07', 'valor' => '496', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-08', 'valor' => '524', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-09', 'valor' => '539', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-10', 'valor' => '550', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-11', 'valor' => '644', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-12', 'valor' => '657', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-13', 'valor' => '660', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-14', 'valor' => '685', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-15', 'valor' => '712', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-16', 'valor' => '855', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-17', 'valor' => '891', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-18', 'valor' => '930', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-19', 'valor' => '984', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-20', 'valor' => '1014', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-21', 'valor' => '1042', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-22', 'valor' => '1054', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-23', 'valor' => '1104', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-24', 'valor' => '1127', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-25', 'valor' => '1208', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-26', 'valor' => '1255', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-27', 'valor' => '1299', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-28', 'valor' => '1453', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-29', 'valor' => '1558', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-30', 'valor' => '1689', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-01', 'valor' => '1890', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-02', 'valor' => '2012', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-03', 'valor' => '2042', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-04', 'valor' => '2107', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-05', 'valor' => '2175', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-06', 'valor' => '2245', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-07', 'valor' => '2323', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-08', 'valor' => '2370', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-09', 'valor' => '2404', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-10', 'valor' => '2446', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-11', 'valor' => '2527', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-12', 'valor' => '2537', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-13', 'valor' => '2578', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-14', 'valor' => '2643', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-15', 'valor' => '2680', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-16', 'valor' => '2757', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-17', 'valor' => '2794', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-18', 'valor' => '2930', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-19', 'valor' => '3015', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-20', 'valor' => '3015', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-21', 'valor' => '3015', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-22', 'valor' => '3095', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-23', 'valor' => '3151', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-24', 'valor' => '3194', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-25', 'valor' => '3227', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-26', 'valor' => '3260', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-27', 'valor' => '3290', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-28', 'valor' => '3391', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-29', 'valor' => '3416', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-30', 'valor' => '3431', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-31', 'valor' => '3462', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-08-01', 'valor' => '3553', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-08-02', 'valor' => '3585', 'fuente_nombre' => 'Secretaría de Salud')); // formateado 0, valor 224, crudo 112
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
