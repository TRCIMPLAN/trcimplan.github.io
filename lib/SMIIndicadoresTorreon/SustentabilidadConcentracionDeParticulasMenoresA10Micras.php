<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SustentabilidadConcentracionDeParticulasMenoresA10Micras
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
 * Clase SustentabilidadConcentracionDeParticulasMenoresA10Micras
 */
class SustentabilidadConcentracionDeParticulasMenoresA10Micras extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Concentración de Partículas menores a 10 micras en Torreón';
        $this->fecha       = '2017-04-04T09:26:11';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-concentracion-de-particulas-menores-a-10-micras';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Calidad del aire por la medición de las partículas menores a 10 microgramos por metro cúbico en promedio de 24 horas. La Norma Oficial Mexicana NOM-025-SSA1-2014 indica que el límite para efectos de protección de la salud es 75 ug por m3.';
        $this->claves      = 'IMPLAN, Torreón, Medio Ambiente, Recursos Naturales';
        // Para el Organizador
        $this->categorias  = array('Medio Ambiente', 'Recursos Naturales');
        $this->fuentes     = array('DIF Revolución', 'HECAT', 'Centro Cultural José R. Mijares');
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
            array('fecha' => '2016-01-12', 'valor' => '59', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-01-13', 'valor' => '67', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-01-19', 'valor' => '83', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-01-20', 'valor' => '123', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-01-26', 'valor' => '40', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-01-27', 'valor' => '36', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-02-02', 'valor' => '27', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-02-03', 'valor' => '49', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-02-09', 'valor' => '61', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-02-10', 'valor' => '91', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-02-16', 'valor' => '84', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-02-17', 'valor' => '87', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-02-23', 'valor' => '54', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-02-24', 'valor' => '84', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-03-01', 'valor' => '49', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-03-02', 'valor' => '89', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-03-08', 'valor' => '34', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-03-09', 'valor' => '59', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-03-12', 'valor' => '42', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-03-15', 'valor' => '56', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-03-16', 'valor' => '71', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-03-19', 'valor' => '57', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-03-26', 'valor' => '30', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-03-29', 'valor' => '21', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-03-30', 'valor' => '92', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-04-05', 'valor' => '55', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-04-06', 'valor' => '96', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-04-13', 'valor' => '64', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-04-20', 'valor' => '103', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-04-27', 'valor' => '47', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-05-03', 'valor' => '42', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-05-10', 'valor' => '44', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-05-11', 'valor' => '68', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-05-17', 'valor' => '30', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-05-18', 'valor' => '66', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-05-24', 'valor' => '51', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-05-25', 'valor' => '136', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-05-31', 'valor' => '43', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-06-01', 'valor' => '77', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-06-07', 'valor' => '50', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-06-08', 'valor' => '34', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-06-14', 'valor' => '37', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-06-15', 'valor' => '105', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-06-21', 'valor' => '28', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-06-22', 'valor' => '59', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-06-29', 'valor' => '54', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-07-05', 'valor' => '28', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-07-06', 'valor' => '66', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-07-12', 'valor' => '35', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-07-13', 'valor' => '45', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-07-19', 'valor' => '28', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-07-20', 'valor' => '65', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-07-26', 'valor' => '35', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-07-27', 'valor' => '64', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-08-02', 'valor' => '43', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-08-03', 'valor' => '52', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-08-09', 'valor' => '25', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-08-10', 'valor' => '52', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-08-16', 'valor' => '35', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-08-17', 'valor' => '32', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-08-23', 'valor' => '35', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-08-24', 'valor' => '32', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-09-06', 'valor' => '29', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-09-07', 'valor' => '71', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-09-13', 'valor' => '42', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-09-14', 'valor' => '64', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-09-20', 'valor' => '43', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-09-21', 'valor' => '52', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-09-27', 'valor' => '48', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-09-27', 'valor' => '41', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-09-28', 'valor' => '63', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-10-04', 'valor' => '42', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-10-04', 'valor' => '111', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-10-05', 'valor' => '97', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-10-11', 'valor' => '48', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-10-11', 'valor' => '106', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-10-12', 'valor' => '109', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-10-18', 'valor' => '64', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-10-18', 'valor' => '169', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-10-19', 'valor' => '109', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-10-25', 'valor' => '42', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-10-25', 'valor' => '70', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-10-26', 'valor' => '64', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-11-01', 'valor' => '70', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-11-01', 'valor' => '155', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-11-02', 'valor' => '109', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-11-08', 'valor' => '41', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-11-08', 'valor' => '71', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-11-09', 'valor' => '25', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-11-15', 'valor' => '47', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-11-15', 'valor' => '116', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-11-16', 'valor' => '90', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-11-22', 'valor' => '49', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-11-22', 'valor' => '89', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-11-23', 'valor' => '76', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-11-29', 'valor' => '34', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-11-29', 'valor' => '84', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-11-30', 'valor' => '105', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-12-06', 'valor' => '65', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-12-06', 'valor' => '149', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-12-07', 'valor' => '99', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-12-13', 'valor' => '68', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-12-13', 'valor' => '174', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-12-14', 'valor' => '180', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2016-12-20', 'valor' => '76', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-12-20', 'valor' => '192', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-12-21', 'valor' => '126', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-01-03', 'valor' => '171', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-01-03', 'valor' => '73', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-01-04', 'valor' => '183', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-01-10', 'valor' => '223', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-01-10', 'valor' => '67', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-01-11', 'valor' => '110', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-01-17', 'valor' => '75', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-01-17', 'valor' => '27', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-01-18', 'valor' => '84', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-01-23', 'valor' => '104', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-01-24', 'valor' => '28', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-01-25', 'valor' => '99', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-01-30', 'valor' => '150', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-01-31', 'valor' => '66', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-02-01', 'valor' => '143', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-02-07', 'valor' => '146', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-02-07', 'valor' => '69', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-02-08', 'valor' => '86', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-02-13', 'valor' => '124', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-02-14', 'valor' => '33', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-02-15', 'valor' => '73', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-02-20', 'valor' => '61', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-02-21', 'valor' => '61', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-02-22', 'valor' => '68', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-02-27', 'valor' => '111', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-02-28', 'valor' => '48', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-03-01', 'valor' => '130', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-03-13', 'valor' => '73', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-03-14', 'valor' => '48', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-03-15', 'valor' => '74', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-03-21', 'valor' => '127', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-03-22', 'valor' => '56', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-03-22', 'valor' => '74', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-03-27', 'valor' => '38', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-03-28', 'valor' => '150', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-03-29', 'valor' => '131', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-04-03', 'valor' => '132', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-04-04', 'valor' => '47', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-04-05', 'valor' => '105', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-04-10', 'valor' => '141', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-04-10', 'valor' => '86', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-04-10', 'valor' => '46', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-04-17', 'valor' => '132', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-04-18', 'valor' => '40', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-04-18', 'valor' => '45', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-04-24', 'valor' => '64', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-04-25', 'valor' => '28', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-04-26', 'valor' => '52', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-05-02', 'valor' => '76', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-05-02', 'valor' => '40', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-05-02', 'valor' => '64', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-05-08', 'valor' => '45', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-05-09', 'valor' => '34', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-05-09', 'valor' => '32', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-05-15', 'valor' => '45', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-05-16', 'valor' => '20', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-05-16', 'valor' => '39', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-05-22', 'valor' => '64', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-05-23', 'valor' => '41', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-05-23', 'valor' => '51', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-05-29', 'valor' => '64', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-05-30', 'valor' => '27', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-06-05', 'valor' => '64', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-06-06', 'valor' => '27', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-06-12', 'valor' => '51', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-06-13', 'valor' => '41', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-06-13', 'valor' => '54', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-06-19', 'valor' => '64', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-06-20', 'valor' => '26', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-06-20', 'valor' => '33', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-06-26', 'valor' => '20', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-06-27', 'valor' => '27', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-06-27', 'valor' => '32', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-07-03', 'valor' => '40', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-07-04', 'valor' => '41', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-07-04', 'valor' => '39', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-07-10', 'valor' => '27', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-07-11', 'valor' => '34', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-07-11', 'valor' => '39', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-07-17', 'valor' => '25', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-07-20', 'valor' => '13', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-07-20', 'valor' => '19', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-07-24', 'valor' => '45', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-07-25', 'valor' => '20', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-07-25', 'valor' => '32', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-07-31', 'valor' => '52', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-08-01', 'valor' => '40', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-08-01', 'valor' => '39', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-08-07', 'valor' => '54', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-08-08', 'valor' => '20', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-08-08', 'valor' => '19', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-08-14', 'valor' => '46', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-08-15', 'valor' => '20', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-08-15', 'valor' => '27', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-08-15', 'valor' => '39', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-08-21', 'valor' => '40', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-08-22', 'valor' => '40', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-08-22', 'valor' => '39', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-08-28', 'valor' => '27', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-08-29', 'valor' => '40', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-08-29', 'valor' => '25', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-09-04', 'valor' => '20', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-09-05', 'valor' => '35', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-09-05', 'valor' => '19', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-09-11', 'valor' => '52', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-09-12', 'valor' => '42', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-09-12', 'valor' => '64', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-09-18', 'valor' => '46', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-09-19', 'valor' => '51', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-09-19', 'valor' => '42', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-09-25', 'valor' => '33', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-09-26', 'valor' => '34', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-09-26', 'valor' => '25', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-10-02', 'valor' => '14', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-10-03', 'valor' => '34', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-10-03', 'valor' => '27', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-10-09', 'valor' => '29', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-10-10', 'valor' => '34', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-10-11', 'valor' => '44', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-10-16', 'valor' => '46', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-10-17', 'valor' => '60', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-10-17', 'valor' => '60', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-10-23', 'valor' => '79', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-10-24', 'valor' => '40', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-10-24', 'valor' => '43', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-10-31', 'valor' => '73', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-10-31', 'valor' => '79', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-11-06', 'valor' => '142', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-11-07', 'valor' => '73', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-11-07', 'valor' => '110', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-11-13', 'valor' => '90', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-11-14', 'valor' => '73', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-11-14', 'valor' => '91', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-11-21', 'valor' => '95', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-11-21', 'valor' => '72', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-11-21', 'valor' => '72', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-11-27', 'valor' => '118', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-11-28', 'valor' => '114', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-11-28', 'valor' => '85', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-12-04', 'valor' => '122', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-12-05', 'valor' => '79', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-12-05', 'valor' => '89', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-12-11', 'valor' => '129', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-12-12', 'valor' => '64', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-12-12', 'valor' => '64', 'fuente_nombre' => 'HECAT'),
            array('fecha' => '2017-12-18', 'valor' => '74', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2017-12-18', 'valor' => '42', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2017-12-18', 'valor' => '42', 'fuente_nombre' => 'HECAT')); // formateado 0, valor 510, crudo 255
    } // datos

    /**
     * Otras Regiones Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones_estructura() {
        return NULL;
    } // otras_regiones_estructura

    /**
     * Otras regiones
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones() {
        return NULL;
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
* En 2017 se tienen en operación 3 equipos de PM10 (Partículas Menores a 10 micras). 
* Se ajustaron las fuentes para generar varias gráficas, una por cada estación de monitoreo.
* Fuente: [Dirección General de Medio Ambiente de Torreón](http://www.torreon.gob.mx/medioambiente/)
* Descarga: [Portal de Datos Públicos de Torreón - Resultados de Monitoreo Atmosférico](http://datostrc.gob.mx/datasets/ver/32732)
* [Norma Oficial Mexicana NOM-025-SSA1-1993](http://www.salud.gob.mx/unidades/cdi/nom/025ssa13.html)
* [Norma Oficial Mexicana NOM-025-SSA1-2014](http://dof.gob.mx/nota_detalle.php?codigo=5357042&fecha=20/08/2014)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadConcentracionDeParticulasMenoresA10Micras

?>
