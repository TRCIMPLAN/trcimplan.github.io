<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadCasosAcumuladosDeCovid19Negativos
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
        $this->nombre      = 'Casos acumulados de COVID-19 negativos en Torreón';
        $this->fecha       = '2020-04-15T13:14:16';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-casos-acumulados-de-covid-19-negativos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Acumulado de casos negativos de la enfermedad COVID-19, según el Sistema de Vigilancia Epidemiológica de Enfermedades Respiratoria Viral.';
        $this->claves      = 'IMPLAN, Torreón, Salud';
        // Para el Organizador
        $this->categorias  = array('Salud');
        $this->fuentes     = array('Secretaría de Salud', 'Secretaría de Economía');
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
            array('fecha' => '2020-04-13', 'valor' => '188', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-14', 'valor' => '188', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-15', 'valor' => '203', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-16', 'valor' => '223', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-17', 'valor' => '221', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-18', 'valor' => '225', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-19', 'valor' => '261', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-20', 'valor' => '310', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-21', 'valor' => '323', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-22', 'valor' => '345', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-23', 'valor' => '352', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-24', 'valor' => '380', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-25', 'valor' => '393', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-26', 'valor' => '395', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-27', 'valor' => '422', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-28', 'valor' => '426', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-29', 'valor' => '435', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-04-30', 'valor' => '440', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-01', 'valor' => '466', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-02', 'valor' => '495', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-03', 'valor' => '496', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-04', 'valor' => '502', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-05', 'valor' => '506', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-06', 'valor' => '516', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-07', 'valor' => '532', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-08', 'valor' => '578', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-09', 'valor' => '611', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-10', 'valor' => '651', 'fuente_nombre' => 'Secretaría de Economía'),
            array('fecha' => '2020-05-11', 'valor' => '699', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-12', 'valor' => '723', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-13', 'valor' => '771', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-14', 'valor' => '826', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-15', 'valor' => '849', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-16', 'valor' => '915', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-17', 'valor' => '958', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-18', 'valor' => '1017', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-19', 'valor' => '1081', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-20', 'valor' => '1103', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-21', 'valor' => '1160', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-22', 'valor' => '1259', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-23', 'valor' => '1306', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-24', 'valor' => '1329', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-25', 'valor' => '1366', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-26', 'valor' => '1421', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-27', 'valor' => '1517', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-28', 'valor' => '1561', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-29', 'valor' => '1584', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-30', 'valor' => '1658', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-05-31', 'valor' => '1664', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-01', 'valor' => '1682', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-02', 'valor' => '1727', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-03', 'valor' => '1771', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-04', 'valor' => '1830', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-05', 'valor' => '1920', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-06', 'valor' => '2056', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-07', 'valor' => '2092', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-08', 'valor' => '2094', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-09', 'valor' => '2111', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-10', 'valor' => '2201', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-11', 'valor' => '2384', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-12', 'valor' => '2606', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-13', 'valor' => '2650', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-14', 'valor' => '2689', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-15', 'valor' => '3158', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-16', 'valor' => '3347', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-17', 'valor' => '3405', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-18', 'valor' => '3495', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-19', 'valor' => '3565', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-20', 'valor' => '3652', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-21', 'valor' => '3660', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-22', 'valor' => '3671', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-23', 'valor' => '3725', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-24', 'valor' => '3751', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-25', 'valor' => '3843', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-26', 'valor' => '3889', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-27', 'valor' => '3981', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-28', 'valor' => '4149', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-29', 'valor' => '4175', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-06-30', 'valor' => '4268', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-01', 'valor' => '4344', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-02', 'valor' => '4412', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-03', 'valor' => '4426', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-04', 'valor' => '4472', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-05', 'valor' => '4491', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-06', 'valor' => '4509', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-07', 'valor' => '4580', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-08', 'valor' => '4616', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-09', 'valor' => '4653', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-10', 'valor' => '4704', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-11', 'valor' => '4805', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-12', 'valor' => '4761', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-13', 'valor' => '4792', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-14', 'valor' => '4851', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-15', 'valor' => '4873', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-16', 'valor' => '4913', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-17', 'valor' => '4928', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-18', 'valor' => '4978', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-19', 'valor' => '5013', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-20', 'valor' => '5013', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-21', 'valor' => '5013', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-22', 'valor' => '5058', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-23', 'valor' => '5092', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-24', 'valor' => '5141', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-25', 'valor' => '5162', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-26', 'valor' => '5206', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-27', 'valor' => '5241', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-28', 'valor' => '5323', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-29', 'valor' => '5356', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-30', 'valor' => '5401', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-07-31', 'valor' => '5467', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-08-01', 'valor' => '5579', 'fuente_nombre' => 'Secretaría de Salud'),
            array('fecha' => '2020-08-02', 'valor' => '5620', 'fuente_nombre' => 'Secretaría de Salud')); // formateado 0, valor 224, crudo 112
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
            array('region_nombre' => 'Torreón', 'fecha' => '2020-08-02', 'valor' => '5620', 'fuente_nombre' => 'Secretaría de Salud'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2020-08-02', 'valor' => '2527', 'fuente_nombre' => 'Secretaría de Salud'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2020-08-02', 'valor' => '840', 'fuente_nombre' => 'Secretaría de Salud'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2020-08-02', 'valor' => '564', 'fuente_nombre' => 'Secretaría de Salud'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2020-08-02', 'valor' => '9551', 'fuente_nombre' => 'Secretaría de Salud'),
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
