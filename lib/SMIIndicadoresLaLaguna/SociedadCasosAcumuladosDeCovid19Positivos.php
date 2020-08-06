<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SociedadCasosAcumuladosDeCovid19Positivos
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
        $this->nombre      = 'Casos acumulados de COVID-19 positivos en La Laguna';
        $this->fecha       = '2020-04-15T13:06:07';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-casos-acumulados-de-covid-19-positivos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Acumulado de casos positivos de la enfermedad COVID-19 según el Sistema de Vigilancia Epidemiológica de Enfermedades Respiratoria Viral.';
        $this->claves      = 'IMPLAN, La Laguna, Salud';
        // Para el Organizador
        $this->categorias  = array('Salud');
        $this->fuentes     = array('Secretaría de Salud');
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
            array('fecha' => '2020-04-13', 'valor' => '38', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-14', 'valor' => '40', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-15', 'valor' => '41', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-16', 'valor' => '43', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-17', 'valor' => '44', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-18', 'valor' => '44', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-19', 'valor' => '44', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-20', 'valor' => '50', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-21', 'valor' => '50', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-22', 'valor' => '48', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-23', 'valor' => '52', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-24', 'valor' => '55', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-25', 'valor' => '61', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-26', 'valor' => '64', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-27', 'valor' => '67', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-28', 'valor' => '71', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-29', 'valor' => '71', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-30', 'valor' => '81', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-01', 'valor' => '83', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-02', 'valor' => '83', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-03', 'valor' => '83', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-04', 'valor' => '92', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-05', 'valor' => '93', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-06', 'valor' => '98', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-07', 'valor' => '113', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-08', 'valor' => '126', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-09', 'valor' => '131', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-10', 'valor' => '139', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-11', 'valor' => '147', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-12', 'valor' => '149', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-13', 'valor' => '158', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-14', 'valor' => '170', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-15', 'valor' => '182', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-16', 'valor' => '198', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-17', 'valor' => '208', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-18', 'valor' => '218', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-19', 'valor' => '227', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-20', 'valor' => '261', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-21', 'valor' => '269', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-22', 'valor' => '288', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-23', 'valor' => '294', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-24', 'valor' => '294', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-25', 'valor' => '328', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-26', 'valor' => '348', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-27', 'valor' => '405', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-28', 'valor' => '422', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-29', 'valor' => '444', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-30', 'valor' => '501', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-31', 'valor' => '516', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-01', 'valor' => '525', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-02', 'valor' => '559', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-03', 'valor' => '617', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-04', 'valor' => '670', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-05', 'valor' => '714', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-06', 'valor' => '749', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-07', 'valor' => '824', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-08', 'valor' => '863', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-09', 'valor' => '885', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-10', 'valor' => '931', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-11', 'valor' => '1066', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-12', 'valor' => '1113', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-13', 'valor' => '1134', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-14', 'valor' => '1186', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-15', 'valor' => '1217', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-16', 'valor' => '1383', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-17', 'valor' => '1463', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-18', 'valor' => '1559', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-19', 'valor' => '1666', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-20', 'valor' => '1747', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-21', 'valor' => '1803', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-22', 'valor' => '1815', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-23', 'valor' => '1878', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-24', 'valor' => '1921', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-25', 'valor' => '2080', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-26', 'valor' => '2198', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-27', 'valor' => '2256', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-28', 'valor' => '2450', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-29', 'valor' => '2601', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-30', 'valor' => '2766', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-01', 'valor' => '3028', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-02', 'valor' => '3207', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-03', 'valor' => '3292', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-04', 'valor' => '3426', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-05', 'valor' => '3560', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-06', 'valor' => '3649', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-07', 'valor' => '3752', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-08', 'valor' => '3832', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-09', 'valor' => '3911', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-10', 'valor' => '3989', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-11', 'valor' => '4124', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-12', 'valor' => '4192', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-13', 'valor' => '4259', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-14', 'valor' => '4336', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-15', 'valor' => '4405', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-16', 'valor' => '4540', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-17', 'valor' => '4617', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-18', 'valor' => '4819', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-19', 'valor' => '4960', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-20', 'valor' => '4969', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-21', 'valor' => '4982', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-22', 'valor' => '5100', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-23', 'valor' => '5236', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-24', 'valor' => '5306', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-25', 'valor' => '5393', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-26', 'valor' => '5468', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-27', 'valor' => '5511', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-28', 'valor' => '5637', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-29', 'valor' => '5673', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-30', 'valor' => '5728', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-31', 'valor' => '5811', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-08-01', 'valor' => '5947', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-08-02', 'valor' => '5994', 'fuente_nombre' => 'Secretaría de Salud')); // formateado 0, valor 224, crudo 112
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
