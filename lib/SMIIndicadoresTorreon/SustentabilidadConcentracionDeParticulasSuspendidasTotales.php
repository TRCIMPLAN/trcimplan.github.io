<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SustentabilidadConcentracionDeParticulasSuspendidasTotales
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
 * Clase SustentabilidadConcentracionDeParticulasSuspendidasTotales
 */
class SustentabilidadConcentracionDeParticulasSuspendidasTotales extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Concentración de Partículas Suspendidas Totales en Torreón';
        $this->fecha       = '2017-04-04T09:26:11';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-concentracion-de-particulas-suspendidas-totales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Calidad del aire por la medición de las partículas suspendidas en microgramos por metro cúbico en promedio de 24 horas. La Norma Oficial Mexicana NOM-025-SSA1-1993 indica que el límite para efectos de protección de la salud es 210 ug por m3.';
        $this->claves      = 'IMPLAN, Torreón, Recursos Naturales';
        // Para el Organizador
        $this->categorias  = array('Recursos Naturales');
        $this->fuentes     = array('DIF Revolución', 'Esc. Primaria Emiliano Zapata', 'Esc. Secundaria General No. 2', 'Esc. Secundaria Técnica No. 83', 'Cap. Divina Providencia', 'Centro Cultural José R. Mijares', 'Esc. Secundaria General No. 3');
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
            array('fecha' => '2016-01-12', 'valor' => '152', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-01-12', 'valor' => '137', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-01-12', 'valor' => '178', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-01-13', 'valor' => '196', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-01-13', 'valor' => '172', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-01-13', 'valor' => '205', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-01-13', 'valor' => '248', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-01-19', 'valor' => '212', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-01-19', 'valor' => '222', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-01-19', 'valor' => '377', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-01-20', 'valor' => '254', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-01-20', 'valor' => '193', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-01-20', 'valor' => '296', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-01-20', 'valor' => '390', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-01-26', 'valor' => '171', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-01-26', 'valor' => '208', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-01-26', 'valor' => '230', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-01-27', 'valor' => '88', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-01-27', 'valor' => '91', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-01-27', 'valor' => '83', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-01-27', 'valor' => '129', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-02-02', 'valor' => '109', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-02-02', 'valor' => '106', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-02-02', 'valor' => '122', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-02-03', 'valor' => '136', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-02-03', 'valor' => '144', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-02-03', 'valor' => '154', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-02-03', 'valor' => '172', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-02-09', 'valor' => '165', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-02-09', 'valor' => '171', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-02-09', 'valor' => '230', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-02-10', 'valor' => '213', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-02-10', 'valor' => '229', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-02-10', 'valor' => '218', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-02-10', 'valor' => '307', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-02-16', 'valor' => '268', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-02-16', 'valor' => '240', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-02-16', 'valor' => '398', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-02-17', 'valor' => '215', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-02-17', 'valor' => '199', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-02-17', 'valor' => '216', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-02-17', 'valor' => '309', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-02-23', 'valor' => '191', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-02-23', 'valor' => '236', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-02-23', 'valor' => '266', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-02-24', 'valor' => '204', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-02-24', 'valor' => '114', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-02-24', 'valor' => '224', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-02-24', 'valor' => '325', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-03-01', 'valor' => '133', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-03-01', 'valor' => '171', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-03-01', 'valor' => '246', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-03-02', 'valor' => '183', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-03-02', 'valor' => '174', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-03-02', 'valor' => '202', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-03-02', 'valor' => '322', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-03-08', 'valor' => '307', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-03-08', 'valor' => '190', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-03-08', 'valor' => '393', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-03-09', 'valor' => '55', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-03-09', 'valor' => '32', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-03-09', 'valor' => '50', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-03-09', 'valor' => '67', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-03-12', 'valor' => '172', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-03-12', 'valor' => '185', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-03-12', 'valor' => '236', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-03-15', 'valor' => '206', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-03-15', 'valor' => '158', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-03-15', 'valor' => '289', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-03-16', 'valor' => '193', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-03-16', 'valor' => '142', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-03-16', 'valor' => '215', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-03-16', 'valor' => '315', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-03-19', 'valor' => '236', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-03-19', 'valor' => '236', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-03-19', 'valor' => '354', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-03-26', 'valor' => '92', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-03-26', 'valor' => '96', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-03-26', 'valor' => '136', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-03-29', 'valor' => '121', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-03-29', 'valor' => '89', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-03-29', 'valor' => '164', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-03-30', 'valor' => '107', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-03-30', 'valor' => '117', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-03-30', 'valor' => '140', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-03-30', 'valor' => '169', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-04-05', 'valor' => '164', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-04-05', 'valor' => '161', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-04-05', 'valor' => '213', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-04-06', 'valor' => '218', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-04-06', 'valor' => '248', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-04-06', 'valor' => '246', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-04-06', 'valor' => '292', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-04-13', 'valor' => '149', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-04-13', 'valor' => '234', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-04-13', 'valor' => '169', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-04-13', 'valor' => '209', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-04-20', 'valor' => '234', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-04-20', 'valor' => '222', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-04-20', 'valor' => '262', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-04-20', 'valor' => '301', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-04-27', 'valor' => '167', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-04-27', 'valor' => '152', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-04-27', 'valor' => '160', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-04-27', 'valor' => '298', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-05-03', 'valor' => '133', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-05-03', 'valor' => '158', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-05-03', 'valor' => '163', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-05-04', 'valor' => '132', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-05-04', 'valor' => '131', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-05-04', 'valor' => '130', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-05-04', 'valor' => '213', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-05-10', 'valor' => '141', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-05-10', 'valor' => '148', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-05-10', 'valor' => '188', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-05-11', 'valor' => '132', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-05-11', 'valor' => '119', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-05-11', 'valor' => '135', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-05-11', 'valor' => '191', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-05-17', 'valor' => '116', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-05-17', 'valor' => '97', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-05-17', 'valor' => '134', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-05-18', 'valor' => '148', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-05-18', 'valor' => '134', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-05-18', 'valor' => '141', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-05-18', 'valor' => '195', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-05-24', 'valor' => '156', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-05-24', 'valor' => '151', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-05-24', 'valor' => '199', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-05-25', 'valor' => '287', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-05-25', 'valor' => '274', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-05-25', 'valor' => '331', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-05-25', 'valor' => '425', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-05-31', 'valor' => '162', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-05-31', 'valor' => '167', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-05-31', 'valor' => '204', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-06-01', 'valor' => '164', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-06-01', 'valor' => '153', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-06-01', 'valor' => '210', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-06-01', 'valor' => '289', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-06-07', 'valor' => '126', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-06-07', 'valor' => '139', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-06-07', 'valor' => '196', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-06-08', 'valor' => '135', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-06-08', 'valor' => '140', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-06-08', 'valor' => '122', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-06-08', 'valor' => '176', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-06-14', 'valor' => '129', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-06-14', 'valor' => '128', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-06-14', 'valor' => '172', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-06-15', 'valor' => '186', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-06-15', 'valor' => '197', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-06-15', 'valor' => '227', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-06-15', 'valor' => '285', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-06-21', 'valor' => '96', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-06-21', 'valor' => '71', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-06-21', 'valor' => '130', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-06-22', 'valor' => '101', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-06-22', 'valor' => '85', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-06-22', 'valor' => '98', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-06-22', 'valor' => '167', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-06-28', 'valor' => '87', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-06-28', 'valor' => '83', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-06-28', 'valor' => '91', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-06-29', 'valor' => '111', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-06-29', 'valor' => '133', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-06-29', 'valor' => '110', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-06-29', 'valor' => '143', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-07-05', 'valor' => '110', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-07-05', 'valor' => '91', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-07-05', 'valor' => '130', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-07-06', 'valor' => '123', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-07-06', 'valor' => '107', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-07-06', 'valor' => '118', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-07-06', 'valor' => '161', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-07-12', 'valor' => '141', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-07-12', 'valor' => '148', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-07-12', 'valor' => '167', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-07-13', 'valor' => '88', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-07-13', 'valor' => '63', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-07-13', 'valor' => '80', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-07-13', 'valor' => '111', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-07-19', 'valor' => '164', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-07-19', 'valor' => '129', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-07-19', 'valor' => '156', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-07-20', 'valor' => '101', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-07-20', 'valor' => '70', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-07-20', 'valor' => '91', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-07-20', 'valor' => '157', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-07-26', 'valor' => '117', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-07-26', 'valor' => '125', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-07-26', 'valor' => '153', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-07-27', 'valor' => '148', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-07-27', 'valor' => '119', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-07-27', 'valor' => '124', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-07-27', 'valor' => '162', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-08-02', 'valor' => '114', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-08-02', 'valor' => '129', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-08-02', 'valor' => '123', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-08-03', 'valor' => '138', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-08-03', 'valor' => '113', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-08-03', 'valor' => '116', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-08-03', 'valor' => '151', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-08-09', 'valor' => '73', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-08-09', 'valor' => '84', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-08-09', 'valor' => '71', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-08-10', 'valor' => '107', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-08-10', 'valor' => '91', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-08-10', 'valor' => '112', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-08-10', 'valor' => '123', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-08-16', 'valor' => '87', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-08-16', 'valor' => '106', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-08-16', 'valor' => '83', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-08-17', 'valor' => '89', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-08-17', 'valor' => '84', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-08-17', 'valor' => '74', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-08-17', 'valor' => '102', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-08-23', 'valor' => '114', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-08-23', 'valor' => '114', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-08-23', 'valor' => '153', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-08-24', 'valor' => '79', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-08-24', 'valor' => '77', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-08-24', 'valor' => '98', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-08-24', 'valor' => '108', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-09-06', 'valor' => '103', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-09-06', 'valor' => '116', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-09-06', 'valor' => '116', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-09-07', 'valor' => '134', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-09-07', 'valor' => '132', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-09-07', 'valor' => '147', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-09-07', 'valor' => '203', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-09-13', 'valor' => '147', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-09-13', 'valor' => '140', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-09-13', 'valor' => '167', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-09-14', 'valor' => '144', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-09-14', 'valor' => '102', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-09-14', 'valor' => '146', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-09-14', 'valor' => '220', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-09-20', 'valor' => '108', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-09-20', 'valor' => '127', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-09-20', 'valor' => '133', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-09-21', 'valor' => '127', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-09-21', 'valor' => '118', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-09-21', 'valor' => '112', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-09-21', 'valor' => '193', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-09-27', 'valor' => '97', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-09-27', 'valor' => '138', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-09-27', 'valor' => '97', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-09-28', 'valor' => '147', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-09-28', 'valor' => '159', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-09-28', 'valor' => '169', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-09-28', 'valor' => '214', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-10-04', 'valor' => '161', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-10-04', 'valor' => '140', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-10-04', 'valor' => '184', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-10-05', 'valor' => '203', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-10-05', 'valor' => '167', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-10-05', 'valor' => '248', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-10-05', 'valor' => '306', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-10-11', 'valor' => '161', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-10-11', 'valor' => '141', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-10-11', 'valor' => '300', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-10-12', 'valor' => '216', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-10-12', 'valor' => '209', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-10-12', 'valor' => '240', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-10-12', 'valor' => '313', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-10-18', 'valor' => '229', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-10-18', 'valor' => '223', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-10-18', 'valor' => '271', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-10-19', 'valor' => '193', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-10-19', 'valor' => '204', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-10-19', 'valor' => '236', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-10-19', 'valor' => '227', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-10-25', 'valor' => '124', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-10-25', 'valor' => '129', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-10-25', 'valor' => '141', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-10-26', 'valor' => '162', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-10-26', 'valor' => '139', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-10-26', 'valor' => '130', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-10-26', 'valor' => '213', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-11-01', 'valor' => '215', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-11-01', 'valor' => '203', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-11-01', 'valor' => '293', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-11-02', 'valor' => '226', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-11-02', 'valor' => '204', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-11-02', 'valor' => '264', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-11-02', 'valor' => '293', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-11-08', 'valor' => '129', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-11-08', 'valor' => '141', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-11-08', 'valor' => '137', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-11-09', 'valor' => '77', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-11-09', 'valor' => '58', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-11-09', 'valor' => '70', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-11-09', 'valor' => '97', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-11-15', 'valor' => '216', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-11-15', 'valor' => '140', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-11-15', 'valor' => '329', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-11-16', 'valor' => '206', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-11-16', 'valor' => '258', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-11-22', 'valor' => '187', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-11-22', 'valor' => '159', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-11-22', 'valor' => '213', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-11-23', 'valor' => '185', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-11-23', 'valor' => '169', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-11-23', 'valor' => '201', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-11-29', 'valor' => '154', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-11-29', 'valor' => '137', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-11-29', 'valor' => '251', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-11-30', 'valor' => '259', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-11-30', 'valor' => '206', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-11-30', 'valor' => '296', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-11-30', 'valor' => '341', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-12-06', 'valor' => '267', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-12-07', 'valor' => '277', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-12-07', 'valor' => '206', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-12-07', 'valor' => '261', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-12-07', 'valor' => '220', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-12-07', 'valor' => '321', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-12-07', 'valor' => '327', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-12-13', 'valor' => '311', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-12-13', 'valor' => '204', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-12-13', 'valor' => '477', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-12-14', 'valor' => '374', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-12-14', 'valor' => '261', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-12-14', 'valor' => '503', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-12-14', 'valor' => '477', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'),
            array('fecha' => '2016-12-20', 'valor' => '342', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata'),
            array('fecha' => '2016-12-21', 'valor' => '324', 'fuente_nombre' => 'Centro Cultural José R. Mijares'),
            array('fecha' => '2016-12-21', 'valor' => '245', 'fuente_nombre' => 'Cap. Divina Providencia'),
            array('fecha' => '2016-12-21', 'valor' => '306', 'fuente_nombre' => 'Esc. Secundaria General No. 2'),
            array('fecha' => '2016-12-21', 'valor' => '241', 'fuente_nombre' => 'DIF Revolución'),
            array('fecha' => '2016-12-21', 'valor' => '227', 'fuente_nombre' => 'Esc. Secundaria General No. 3'),
            array('fecha' => '2016-12-21', 'valor' => '371', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83'));
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
* En 2016 Torreón contaba con 7 equipos manuales de PST (Partículas Suspendidas Totales) y 3 equipos de PM10 (Partículas Menores a 10 micras). En 2017 sólo se tienen operando los 3 equipos de PM10.
* Se ajustaron las fuentes para generar varias gráficas, una por cada estación de monitoreo.
* Fuente: [Dirección General de Medio Ambiente de Torreón](http://www.torreon.gob.mx/medioambiente/)
* Descarga: [Portal de Datos Públicos de Torreón - Resultados de Monitoreo Atmosférico](http://datostrc.gob.mx/datasets/ver/32732)
* [Norma Oficial Mexicana NOM-025-SSA1-1993](http://www.salud.gob.mx/unidades/cdi/nom/025ssa13.html)
* [Norma Oficial Mexicana NOM-025-SSA1-2014](http://dof.gob.mx/nota_detalle.php?codigo=5357042&fecha=20/08/2014)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadConcentracionDeParticulasSuspendidasTotales

?>
