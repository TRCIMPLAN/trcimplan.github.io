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
        // Título, autor y fecha
        $this->nombre      = 'Concentración de Partículas Suspendidas Totales en Torreón';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-04-04T09:26:11';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-concentracion-de-particulas-suspendidas-totales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Calidad del aire por la medición de las partículas suspendidas en microgramos por metro cúbico en promedio de 24 horas. La Norma Oficial Mexicana NOM-025-SSA1-1993 indica que el límite para efectos de protección de la salud es 210 ug por m3.';
        $this->claves      = 'IMPLAN, Torreón, Recursos Naturales';
        // Para el Organizador
        $this->categorias  = array('Recursos Naturales');
        $this->fuentes     = array('DIF Revolución', 'Esc. Secundaria General No. 2', 'Esc. Primaria Emiliano Zapata', 'Centro Cultural José R. Mijares', 'Esc. Secundaria General No. 3', 'Cap. Divina Providencia', 'Esc. Secundaria Técnica No. 83');
        $this->regiones    = array('Torreón');
    } // constructor

    /**
     * Sección Datos HTML
     *
     * @return string Código HTML
     */
    protected function seccion_datos_html() {
        $this->datos_tabla->definir_estructura(array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'cantidad'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto')));
        $this->datos_tabla->definir_panal(array(
            array('fecha' => '2016-01-12', 'valor' => '152', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-01-12', 'valor' => '137', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-01-12', 'valor' => '178', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-01-13', 'valor' => '196', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-01-13', 'valor' => '172', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-01-13', 'valor' => '205', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-01-13', 'valor' => '248', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-01-19', 'valor' => '212', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-01-19', 'valor' => '222', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-01-19', 'valor' => '377', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-01-20', 'valor' => '254', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-01-20', 'valor' => '193', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-01-20', 'valor' => '296', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-01-20', 'valor' => '390', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-01-26', 'valor' => '171', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-01-26', 'valor' => '208', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-01-26', 'valor' => '230', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-01-27', 'valor' => '88', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-01-27', 'valor' => '91', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-01-27', 'valor' => '83', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-01-27', 'valor' => '129', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-02-02', 'valor' => '109', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-02-02', 'valor' => '106', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-02-02', 'valor' => '122', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-02-03', 'valor' => '136', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-02-03', 'valor' => '144', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-02-03', 'valor' => '154', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-02-03', 'valor' => '172', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-02-09', 'valor' => '165', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-02-09', 'valor' => '171', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-02-09', 'valor' => '230', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-02-10', 'valor' => '213', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-02-10', 'valor' => '229', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-02-10', 'valor' => '218', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-02-10', 'valor' => '307', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-02-16', 'valor' => '268', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-02-16', 'valor' => '240', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-02-16', 'valor' => '398', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-02-17', 'valor' => '215', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-02-17', 'valor' => '199', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-02-17', 'valor' => '216', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-02-17', 'valor' => '309', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-02-23', 'valor' => '191', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-02-23', 'valor' => '236', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-02-23', 'valor' => '266', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-02-24', 'valor' => '204', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-02-24', 'valor' => '114', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-02-24', 'valor' => '224', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-02-24', 'valor' => '325', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-03-01', 'valor' => '133', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-03-01', 'valor' => '171', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-03-01', 'valor' => '246', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-03-02', 'valor' => '183', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-03-02', 'valor' => '174', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-03-02', 'valor' => '202', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-03-02', 'valor' => '322', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-03-08', 'valor' => '307', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-03-08', 'valor' => '190', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-03-08', 'valor' => '393', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-03-09', 'valor' => '55', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-03-09', 'valor' => '32', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-03-09', 'valor' => '50', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-03-09', 'valor' => '67', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-03-12', 'valor' => '172', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-03-12', 'valor' => '185', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-03-12', 'valor' => '236', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-03-15', 'valor' => '206', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-03-15', 'valor' => '158', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-03-15', 'valor' => '289', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-03-16', 'valor' => '193', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-03-16', 'valor' => '142', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-03-16', 'valor' => '215', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-03-16', 'valor' => '315', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-03-19', 'valor' => '236', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-03-19', 'valor' => '236', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-03-19', 'valor' => '354', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-03-26', 'valor' => '92', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-03-26', 'valor' => '96', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-03-26', 'valor' => '136', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-03-29', 'valor' => '121', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-03-29', 'valor' => '89', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-03-29', 'valor' => '164', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-03-30', 'valor' => '107', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-03-30', 'valor' => '117', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-03-30', 'valor' => '140', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-03-30', 'valor' => '169', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-04-05', 'valor' => '164', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-04-05', 'valor' => '161', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-04-05', 'valor' => '213', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-04-06', 'valor' => '218', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-04-06', 'valor' => '248', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-04-06', 'valor' => '246', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-04-06', 'valor' => '292', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-04-13', 'valor' => '149', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-04-13', 'valor' => '234', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-04-13', 'valor' => '169', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-04-13', 'valor' => '209', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-04-20', 'valor' => '234', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-04-20', 'valor' => '222', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-04-20', 'valor' => '262', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-04-20', 'valor' => '301', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-04-27', 'valor' => '167', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-04-27', 'valor' => '152', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-04-27', 'valor' => '160', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-04-27', 'valor' => '298', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-05-03', 'valor' => '133', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-05-03', 'valor' => '158', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-05-03', 'valor' => '163', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-05-04', 'valor' => '132', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-05-04', 'valor' => '131', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-05-04', 'valor' => '130', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-05-04', 'valor' => '213', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-05-10', 'valor' => '141', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-05-10', 'valor' => '148', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-05-10', 'valor' => '188', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-05-11', 'valor' => '132', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-05-11', 'valor' => '119', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-05-11', 'valor' => '135', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-05-11', 'valor' => '191', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-05-17', 'valor' => '116', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-05-17', 'valor' => '97', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-05-17', 'valor' => '134', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-05-18', 'valor' => '148', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-05-18', 'valor' => '134', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-05-18', 'valor' => '141', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-05-18', 'valor' => '195', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-05-24', 'valor' => '156', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-05-24', 'valor' => '151', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-05-24', 'valor' => '199', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-05-25', 'valor' => '287', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-05-25', 'valor' => '274', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-05-25', 'valor' => '331', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-05-25', 'valor' => '425', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-05-31', 'valor' => '162', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-05-31', 'valor' => '167', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-05-31', 'valor' => '204', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-06-01', 'valor' => '164', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-06-01', 'valor' => '153', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-06-01', 'valor' => '210', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-06-01', 'valor' => '289', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-06-07', 'valor' => '126', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-06-07', 'valor' => '139', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-06-07', 'valor' => '196', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-06-08', 'valor' => '135', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-06-08', 'valor' => '140', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-06-08', 'valor' => '122', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-06-08', 'valor' => '176', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-06-14', 'valor' => '129', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-06-14', 'valor' => '128', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-06-14', 'valor' => '172', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-06-15', 'valor' => '186', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-06-15', 'valor' => '197', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-06-15', 'valor' => '227', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-06-15', 'valor' => '285', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-06-21', 'valor' => '96', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-06-21', 'valor' => '71', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-06-21', 'valor' => '130', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-06-22', 'valor' => '101', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-06-22', 'valor' => '85', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-06-22', 'valor' => '98', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-06-22', 'valor' => '167', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-06-28', 'valor' => '87', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-06-28', 'valor' => '83', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-06-28', 'valor' => '91', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-06-29', 'valor' => '111', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-06-29', 'valor' => '133', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-06-29', 'valor' => '110', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-06-29', 'valor' => '143', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-07-05', 'valor' => '110', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-07-05', 'valor' => '91', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-07-05', 'valor' => '130', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-07-06', 'valor' => '123', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-07-06', 'valor' => '107', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-07-06', 'valor' => '118', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-07-06', 'valor' => '161', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-07-12', 'valor' => '141', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-07-12', 'valor' => '148', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-07-12', 'valor' => '167', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-07-13', 'valor' => '88', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-07-13', 'valor' => '63', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-07-13', 'valor' => '80', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-07-13', 'valor' => '111', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-07-19', 'valor' => '164', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-07-19', 'valor' => '129', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-07-19', 'valor' => '156', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-07-20', 'valor' => '101', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-07-20', 'valor' => '70', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-07-20', 'valor' => '91', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-07-20', 'valor' => '157', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-07-26', 'valor' => '117', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-07-26', 'valor' => '125', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-07-26', 'valor' => '153', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-07-27', 'valor' => '148', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-07-27', 'valor' => '119', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-07-27', 'valor' => '124', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-07-27', 'valor' => '162', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-08-02', 'valor' => '114', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-08-02', 'valor' => '129', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-08-02', 'valor' => '123', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-08-03', 'valor' => '138', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-08-03', 'valor' => '113', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-08-03', 'valor' => '116', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-08-03', 'valor' => '151', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-08-09', 'valor' => '73', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-08-09', 'valor' => '84', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-08-09', 'valor' => '71', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-08-10', 'valor' => '107', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-08-10', 'valor' => '91', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-08-10', 'valor' => '112', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-08-10', 'valor' => '123', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-08-16', 'valor' => '87', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-08-16', 'valor' => '106', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-08-16', 'valor' => '83', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-08-17', 'valor' => '89', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-08-17', 'valor' => '84', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-08-17', 'valor' => '74', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-08-17', 'valor' => '102', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-08-23', 'valor' => '114', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-08-23', 'valor' => '114', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-08-23', 'valor' => '153', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-08-24', 'valor' => '79', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-08-24', 'valor' => '77', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-08-24', 'valor' => '98', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-08-24', 'valor' => '108', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-09-06', 'valor' => '103', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-09-06', 'valor' => '116', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-09-06', 'valor' => '116', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-09-07', 'valor' => '134', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-09-07', 'valor' => '132', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-09-07', 'valor' => '147', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-09-07', 'valor' => '203', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-09-13', 'valor' => '147', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-09-13', 'valor' => '140', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-09-13', 'valor' => '167', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-09-14', 'valor' => '144', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-09-14', 'valor' => '102', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-09-14', 'valor' => '146', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-09-14', 'valor' => '220', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-09-20', 'valor' => '108', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-09-20', 'valor' => '127', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-09-20', 'valor' => '133', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-09-21', 'valor' => '127', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-09-21', 'valor' => '118', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-09-21', 'valor' => '112', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-09-21', 'valor' => '193', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-09-27', 'valor' => '97', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-09-27', 'valor' => '138', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-09-27', 'valor' => '97', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-09-28', 'valor' => '147', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-09-28', 'valor' => '159', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-09-28', 'valor' => '169', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-09-28', 'valor' => '214', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-10-04', 'valor' => '161', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-10-04', 'valor' => '140', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-10-04', 'valor' => '184', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-10-05', 'valor' => '203', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-10-05', 'valor' => '167', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-10-05', 'valor' => '248', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-10-05', 'valor' => '306', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-10-11', 'valor' => '161', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-10-11', 'valor' => '141', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-10-11', 'valor' => '300', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-10-12', 'valor' => '216', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-10-12', 'valor' => '209', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-10-12', 'valor' => '240', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-10-12', 'valor' => '313', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-10-18', 'valor' => '229', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-10-18', 'valor' => '223', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-10-18', 'valor' => '271', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-10-19', 'valor' => '193', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-10-19', 'valor' => '204', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-10-19', 'valor' => '236', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-10-19', 'valor' => '227', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-10-25', 'valor' => '124', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-10-25', 'valor' => '129', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-10-25', 'valor' => '141', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-10-26', 'valor' => '162', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-10-26', 'valor' => '139', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-10-26', 'valor' => '130', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-10-26', 'valor' => '213', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-11-01', 'valor' => '215', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-11-01', 'valor' => '203', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-11-01', 'valor' => '293', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-11-02', 'valor' => '226', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-11-02', 'valor' => '204', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-11-02', 'valor' => '264', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-11-02', 'valor' => '293', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-11-08', 'valor' => '129', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-11-08', 'valor' => '141', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-11-08', 'valor' => '137', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-11-09', 'valor' => '77', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-11-09', 'valor' => '58', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-11-09', 'valor' => '70', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-11-09', 'valor' => '97', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-11-15', 'valor' => '216', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-11-15', 'valor' => '140', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-11-15', 'valor' => '329', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-11-16', 'valor' => '206', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-11-16', 'valor' => '258', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-11-22', 'valor' => '187', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-11-22', 'valor' => '159', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-11-22', 'valor' => '213', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-11-23', 'valor' => '185', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-11-23', 'valor' => '169', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-11-23', 'valor' => '201', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-11-29', 'valor' => '154', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-11-29', 'valor' => '137', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-11-29', 'valor' => '251', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-11-30', 'valor' => '259', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-11-30', 'valor' => '206', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-11-30', 'valor' => '296', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-11-30', 'valor' => '341', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-12-06', 'valor' => '267', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-12-07', 'valor' => '277', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-12-07', 'valor' => '206', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-12-07', 'valor' => '261', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-12-07', 'valor' => '220', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-12-07', 'valor' => '321', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-12-07', 'valor' => '327', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-12-13', 'valor' => '311', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-12-13', 'valor' => '204', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-12-13', 'valor' => '477', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-12-14', 'valor' => '374', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-12-14', 'valor' => '261', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-12-14', 'valor' => '503', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-12-14', 'valor' => '477', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => ''),
            array('fecha' => '2016-12-20', 'valor' => '342', 'fuente_nombre' => 'Esc. Primaria Emiliano Zapata', 'notas' => ''),
            array('fecha' => '2016-12-21', 'valor' => '324', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-12-21', 'valor' => '245', 'fuente_nombre' => 'Cap. Divina Providencia', 'notas' => ''),
            array('fecha' => '2016-12-21', 'valor' => '306', 'fuente_nombre' => 'Esc. Secundaria General No. 2', 'notas' => ''),
            array('fecha' => '2016-12-21', 'valor' => '241', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-12-21', 'valor' => '227', 'fuente_nombre' => 'Esc. Secundaria General No. 3', 'notas' => ''),
            array('fecha' => '2016-12-21', 'valor' => '371', 'fuente_nombre' => 'Esc. Secundaria Técnica No. 83', 'notas' => '')));
        // Entregar
        return $this->datos_tabla->html();
    } // seccion_datos_html

    /**
     * Sección Datos JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_datos_javascript() {
        return $this->datos_tabla->javascript();
    } // seccion_datos_javascript

    /**
     * Sección Gráfica 1 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_1_html() {
        return <<<FINAL
      <h3>Gráfica de Concentración de Partículas Suspendidas Totales en Torreón con fuente Esc. Secundaria General No. 2</h3>
      <div id="graficaDatosEscSecundariaGeneralNo2" class="grafica"></div>
      <p><b>Unidad:</b> ug por m3.</p>
      <h3>Observaciones</h3>
<ul>
<li>En 2016 Torreón contaba con 7 equipos manuales de PST (Partículas Suspendidas Totales) y 3 equipos de PM10 (Partículas Menores a 10 micras). En 2017 sólo se tienen operando los 3 equipos de PM10.</li>
<li>Se ajustaron las fuentes para generar varias gráficas, una por cada estación de monitoreo.</li>
<li>Fuente: <a href="http://www.torreon.gob.mx/medioambiente/">Dirección General de Medio Ambiente de Torreón</a></li>
<li>Descarga: <a href="http://datostrc.gob.mx/datasets/ver/32732">Portal de Datos Públicos de Torreón - Resultados de Monitoreo Atmosférico</a></li>
<li><a href="http://www.salud.gob.mx/unidades/cdi/nom/025ssa13.html">Norma Oficial Mexicana NOM-025-SSA1-1993</a></li>
<li><a href="http://dof.gob.mx/nota_detalle.php?codigo=5357042&amp;fecha=20/08/2014">Norma Oficial Mexicana NOM-025-SSA1-2014</a></li>
</ul>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 1 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_1_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosEscSecundariaGeneralNo2 === 'undefined') {
    vargraficaDatosEscSecundariaGeneralNo2 = Morris.Line({
      element: 'graficaDatosEscSecundariaGeneralNo2',
      data: [{ fecha: '2016-01-12', dato: 152 },{ fecha: '2016-01-19', dato: 212 },{ fecha: '2016-01-26', dato: 171 },{ fecha: '2016-02-02', dato: 109 },{ fecha: '2016-02-09', dato: 165 },{ fecha: '2016-02-16', dato: 268 },{ fecha: '2016-02-23', dato: 191 },{ fecha: '2016-03-01', dato: 133 },{ fecha: '2016-03-08', dato: 307 },{ fecha: '2016-03-12', dato: 172 },{ fecha: '2016-03-15', dato: 206 },{ fecha: '2016-03-19', dato: 236 },{ fecha: '2016-03-26', dato: 92 },{ fecha: '2016-03-29', dato: 121 },{ fecha: '2016-04-05', dato: 164 },{ fecha: '2016-05-03', dato: 133 },{ fecha: '2016-05-10', dato: 141 },{ fecha: '2016-05-17', dato: 116 },{ fecha: '2016-05-24', dato: 156 },{ fecha: '2016-05-31', dato: 162 },{ fecha: '2016-06-07', dato: 126 },{ fecha: '2016-06-14', dato: 129 },{ fecha: '2016-06-21', dato: 96 },{ fecha: '2016-06-28', dato: 87 },{ fecha: '2016-07-05', dato: 110 },{ fecha: '2016-07-12', dato: 141 },{ fecha: '2016-07-19', dato: 164 },{ fecha: '2016-07-26', dato: 117 },{ fecha: '2016-08-02', dato: 114 },{ fecha: '2016-08-09', dato: 73 },{ fecha: '2016-08-16', dato: 87 },{ fecha: '2016-08-23', dato: 114 },{ fecha: '2016-09-06', dato: 103 },{ fecha: '2016-09-13', dato: 147 },{ fecha: '2016-09-20', dato: 108 },{ fecha: '2016-09-27', dato: 97 },{ fecha: '2016-10-04', dato: 161 },{ fecha: '2016-10-11', dato: 161 },{ fecha: '2016-10-18', dato: 229 },{ fecha: '2016-10-25', dato: 124 },{ fecha: '2016-11-01', dato: 215 },{ fecha: '2016-11-08', dato: 129 },{ fecha: '2016-11-15', dato: 216 },{ fecha: '2016-11-22', dato: 187 },{ fecha: '2016-11-29', dato: 154 },{ fecha: '2016-12-07', dato: 261 },{ fecha: '2016-12-13', dato: 311 },{ fecha: '2016-12-21', dato: 306 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // seccion_grafica_javascript

    /**
     * Sección Gráfica 2 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_2_html() {
        return <<<FINAL
      <h3>Gráfica de Concentración de Partículas Suspendidas Totales en Torreón con fuente DIF Revolución</h3>
      <div id="graficaDatosDifRevolucion" class="grafica"></div>
      <p><b>Unidad:</b> ug por m3.</p>
      <h3>Observaciones</h3>
<ul>
<li>En 2016 Torreón contaba con 7 equipos manuales de PST (Partículas Suspendidas Totales) y 3 equipos de PM10 (Partículas Menores a 10 micras). En 2017 sólo se tienen operando los 3 equipos de PM10.</li>
<li>Se ajustaron las fuentes para generar varias gráficas, una por cada estación de monitoreo.</li>
<li>Fuente: <a href="http://www.torreon.gob.mx/medioambiente/">Dirección General de Medio Ambiente de Torreón</a></li>
<li>Descarga: <a href="http://datostrc.gob.mx/datasets/ver/32732">Portal de Datos Públicos de Torreón - Resultados de Monitoreo Atmosférico</a></li>
<li><a href="http://www.salud.gob.mx/unidades/cdi/nom/025ssa13.html">Norma Oficial Mexicana NOM-025-SSA1-1993</a></li>
<li><a href="http://dof.gob.mx/nota_detalle.php?codigo=5357042&amp;fecha=20/08/2014">Norma Oficial Mexicana NOM-025-SSA1-2014</a></li>
</ul>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 2 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_2_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosDifRevolucion === 'undefined') {
    vargraficaDatosDifRevolucion = Morris.Line({
      element: 'graficaDatosDifRevolucion',
      data: [{ fecha: '2016-01-12', dato: 137 },{ fecha: '2016-01-19', dato: 222 },{ fecha: '2016-01-26', dato: 208 },{ fecha: '2016-02-02', dato: 106 },{ fecha: '2016-02-09', dato: 171 },{ fecha: '2016-02-16', dato: 240 },{ fecha: '2016-02-23', dato: 236 },{ fecha: '2016-03-01', dato: 171 },{ fecha: '2016-03-08', dato: 190 },{ fecha: '2016-03-12', dato: 185 },{ fecha: '2016-03-15', dato: 158 },{ fecha: '2016-03-19', dato: 236 },{ fecha: '2016-03-26', dato: 96 },{ fecha: '2016-03-29', dato: 89 },{ fecha: '2016-04-05', dato: 161 },{ fecha: '2016-05-03', dato: 158 },{ fecha: '2016-05-10', dato: 148 },{ fecha: '2016-05-17', dato: 97 },{ fecha: '2016-05-24', dato: 151 },{ fecha: '2016-05-31', dato: 167 },{ fecha: '2016-06-07', dato: 139 },{ fecha: '2016-06-14', dato: 128 },{ fecha: '2016-06-21', dato: 71 },{ fecha: '2016-06-28', dato: 83 },{ fecha: '2016-07-05', dato: 91 },{ fecha: '2016-07-12', dato: 148 },{ fecha: '2016-07-19', dato: 129 },{ fecha: '2016-07-26', dato: 125 },{ fecha: '2016-08-02', dato: 129 },{ fecha: '2016-08-09', dato: 84 },{ fecha: '2016-08-16', dato: 106 },{ fecha: '2016-08-23', dato: 114 },{ fecha: '2016-09-06', dato: 116 },{ fecha: '2016-09-13', dato: 140 },{ fecha: '2016-09-20', dato: 127 },{ fecha: '2016-09-27', dato: 138 },{ fecha: '2016-10-04', dato: 140 },{ fecha: '2016-10-11', dato: 141 },{ fecha: '2016-10-18', dato: 223 },{ fecha: '2016-10-25', dato: 129 },{ fecha: '2016-11-01', dato: 203 },{ fecha: '2016-11-08', dato: 141 },{ fecha: '2016-11-15', dato: 140 },{ fecha: '2016-11-22', dato: 159 },{ fecha: '2016-11-29', dato: 137 },{ fecha: '2016-12-07', dato: 220 },{ fecha: '2016-12-13', dato: 204 },{ fecha: '2016-12-21', dato: 241 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // seccion_grafica_javascript

    /**
     * Sección Gráfica 3 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_3_html() {
        return <<<FINAL
      <h3>Gráfica de Concentración de Partículas Suspendidas Totales en Torreón con fuente Esc. Primaria Emiliano Zapata</h3>
      <div id="graficaDatosEscPrimariaEmilianoZapata" class="grafica"></div>
      <p><b>Unidad:</b> ug por m3.</p>
      <h3>Observaciones</h3>
<ul>
<li>En 2016 Torreón contaba con 7 equipos manuales de PST (Partículas Suspendidas Totales) y 3 equipos de PM10 (Partículas Menores a 10 micras). En 2017 sólo se tienen operando los 3 equipos de PM10.</li>
<li>Se ajustaron las fuentes para generar varias gráficas, una por cada estación de monitoreo.</li>
<li>Fuente: <a href="http://www.torreon.gob.mx/medioambiente/">Dirección General de Medio Ambiente de Torreón</a></li>
<li>Descarga: <a href="http://datostrc.gob.mx/datasets/ver/32732">Portal de Datos Públicos de Torreón - Resultados de Monitoreo Atmosférico</a></li>
<li><a href="http://www.salud.gob.mx/unidades/cdi/nom/025ssa13.html">Norma Oficial Mexicana NOM-025-SSA1-1993</a></li>
<li><a href="http://dof.gob.mx/nota_detalle.php?codigo=5357042&amp;fecha=20/08/2014">Norma Oficial Mexicana NOM-025-SSA1-2014</a></li>
</ul>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 3 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_3_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosEscPrimariaEmilianoZapata === 'undefined') {
    vargraficaDatosEscPrimariaEmilianoZapata = Morris.Line({
      element: 'graficaDatosEscPrimariaEmilianoZapata',
      data: [{ fecha: '2016-01-12', dato: 178 },{ fecha: '2016-01-19', dato: 377 },{ fecha: '2016-01-26', dato: 230 },{ fecha: '2016-02-02', dato: 122 },{ fecha: '2016-02-09', dato: 230 },{ fecha: '2016-02-16', dato: 398 },{ fecha: '2016-02-23', dato: 266 },{ fecha: '2016-03-01', dato: 246 },{ fecha: '2016-03-08', dato: 393 },{ fecha: '2016-03-12', dato: 236 },{ fecha: '2016-03-15', dato: 289 },{ fecha: '2016-03-19', dato: 354 },{ fecha: '2016-03-26', dato: 136 },{ fecha: '2016-03-29', dato: 164 },{ fecha: '2016-04-05', dato: 213 },{ fecha: '2016-05-03', dato: 163 },{ fecha: '2016-05-10', dato: 188 },{ fecha: '2016-05-17', dato: 134 },{ fecha: '2016-05-24', dato: 199 },{ fecha: '2016-05-31', dato: 204 },{ fecha: '2016-06-07', dato: 196 },{ fecha: '2016-06-14', dato: 172 },{ fecha: '2016-06-21', dato: 130 },{ fecha: '2016-06-28', dato: 91 },{ fecha: '2016-07-05', dato: 130 },{ fecha: '2016-07-12', dato: 167 },{ fecha: '2016-07-19', dato: 156 },{ fecha: '2016-07-26', dato: 153 },{ fecha: '2016-08-02', dato: 123 },{ fecha: '2016-08-09', dato: 71 },{ fecha: '2016-08-16', dato: 83 },{ fecha: '2016-08-23', dato: 153 },{ fecha: '2016-09-06', dato: 116 },{ fecha: '2016-09-13', dato: 167 },{ fecha: '2016-09-20', dato: 133 },{ fecha: '2016-09-27', dato: 97 },{ fecha: '2016-10-04', dato: 184 },{ fecha: '2016-10-11', dato: 300 },{ fecha: '2016-10-18', dato: 271 },{ fecha: '2016-10-25', dato: 141 },{ fecha: '2016-11-01', dato: 293 },{ fecha: '2016-11-08', dato: 137 },{ fecha: '2016-11-15', dato: 329 },{ fecha: '2016-11-22', dato: 213 },{ fecha: '2016-11-29', dato: 251 },{ fecha: '2016-12-06', dato: 267 },{ fecha: '2016-12-13', dato: 477 },{ fecha: '2016-12-20', dato: 342 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // seccion_grafica_javascript

    /**
     * Sección Gráfica 4 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_4_html() {
        return <<<FINAL
      <h3>Gráfica de Concentración de Partículas Suspendidas Totales en Torreón con fuente Centro Cultural José R. Mijares</h3>
      <div id="graficaDatosCentroCulturalJoseRMijares" class="grafica"></div>
      <p><b>Unidad:</b> ug por m3.</p>
      <h3>Observaciones</h3>
<ul>
<li>En 2016 Torreón contaba con 7 equipos manuales de PST (Partículas Suspendidas Totales) y 3 equipos de PM10 (Partículas Menores a 10 micras). En 2017 sólo se tienen operando los 3 equipos de PM10.</li>
<li>Se ajustaron las fuentes para generar varias gráficas, una por cada estación de monitoreo.</li>
<li>Fuente: <a href="http://www.torreon.gob.mx/medioambiente/">Dirección General de Medio Ambiente de Torreón</a></li>
<li>Descarga: <a href="http://datostrc.gob.mx/datasets/ver/32732">Portal de Datos Públicos de Torreón - Resultados de Monitoreo Atmosférico</a></li>
<li><a href="http://www.salud.gob.mx/unidades/cdi/nom/025ssa13.html">Norma Oficial Mexicana NOM-025-SSA1-1993</a></li>
<li><a href="http://dof.gob.mx/nota_detalle.php?codigo=5357042&amp;fecha=20/08/2014">Norma Oficial Mexicana NOM-025-SSA1-2014</a></li>
</ul>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 4 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_4_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosCentroCulturalJoseRMijares === 'undefined') {
    vargraficaDatosCentroCulturalJoseRMijares = Morris.Line({
      element: 'graficaDatosCentroCulturalJoseRMijares',
      data: [{ fecha: '2016-01-13', dato: 196 },{ fecha: '2016-01-20', dato: 254 },{ fecha: '2016-01-27', dato: 88 },{ fecha: '2016-02-03', dato: 136 },{ fecha: '2016-02-10', dato: 213 },{ fecha: '2016-02-17', dato: 215 },{ fecha: '2016-02-24', dato: 204 },{ fecha: '2016-03-02', dato: 183 },{ fecha: '2016-03-09', dato: 55 },{ fecha: '2016-03-16', dato: 193 },{ fecha: '2016-03-30', dato: 107 },{ fecha: '2016-04-06', dato: 218 },{ fecha: '2016-04-13', dato: 149 },{ fecha: '2016-04-20', dato: 234 },{ fecha: '2016-04-27', dato: 167 },{ fecha: '2016-05-04', dato: 132 },{ fecha: '2016-05-11', dato: 132 },{ fecha: '2016-05-18', dato: 148 },{ fecha: '2016-05-25', dato: 287 },{ fecha: '2016-06-01', dato: 164 },{ fecha: '2016-06-08', dato: 135 },{ fecha: '2016-06-15', dato: 186 },{ fecha: '2016-06-22', dato: 101 },{ fecha: '2016-06-29', dato: 111 },{ fecha: '2016-07-06', dato: 123 },{ fecha: '2016-07-13', dato: 88 },{ fecha: '2016-07-20', dato: 101 },{ fecha: '2016-07-27', dato: 148 },{ fecha: '2016-08-03', dato: 138 },{ fecha: '2016-08-10', dato: 107 },{ fecha: '2016-08-17', dato: 89 },{ fecha: '2016-08-24', dato: 79 },{ fecha: '2016-09-07', dato: 134 },{ fecha: '2016-09-14', dato: 144 },{ fecha: '2016-09-21', dato: 127 },{ fecha: '2016-09-28', dato: 147 },{ fecha: '2016-10-05', dato: 203 },{ fecha: '2016-10-12', dato: 216 },{ fecha: '2016-10-19', dato: 193 },{ fecha: '2016-10-26', dato: 162 },{ fecha: '2016-11-02', dato: 226 },{ fecha: '2016-11-09', dato: 77 },{ fecha: '2016-11-23', dato: 185 },{ fecha: '2016-11-30', dato: 259 },{ fecha: '2016-12-07', dato: 277 },{ fecha: '2016-12-14', dato: 374 },{ fecha: '2016-12-21', dato: 324 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // seccion_grafica_javascript

    /**
     * Sección Gráfica 5 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_5_html() {
        return <<<FINAL
      <h3>Gráfica de Concentración de Partículas Suspendidas Totales en Torreón con fuente Cap. Divina Providencia</h3>
      <div id="graficaDatosCapDivinaProvidencia" class="grafica"></div>
      <p><b>Unidad:</b> ug por m3.</p>
      <h3>Observaciones</h3>
<ul>
<li>En 2016 Torreón contaba con 7 equipos manuales de PST (Partículas Suspendidas Totales) y 3 equipos de PM10 (Partículas Menores a 10 micras). En 2017 sólo se tienen operando los 3 equipos de PM10.</li>
<li>Se ajustaron las fuentes para generar varias gráficas, una por cada estación de monitoreo.</li>
<li>Fuente: <a href="http://www.torreon.gob.mx/medioambiente/">Dirección General de Medio Ambiente de Torreón</a></li>
<li>Descarga: <a href="http://datostrc.gob.mx/datasets/ver/32732">Portal de Datos Públicos de Torreón - Resultados de Monitoreo Atmosférico</a></li>
<li><a href="http://www.salud.gob.mx/unidades/cdi/nom/025ssa13.html">Norma Oficial Mexicana NOM-025-SSA1-1993</a></li>
<li><a href="http://dof.gob.mx/nota_detalle.php?codigo=5357042&amp;fecha=20/08/2014">Norma Oficial Mexicana NOM-025-SSA1-2014</a></li>
</ul>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 5 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_5_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosCapDivinaProvidencia === 'undefined') {
    vargraficaDatosCapDivinaProvidencia = Morris.Line({
      element: 'graficaDatosCapDivinaProvidencia',
      data: [{ fecha: '2016-01-13', dato: 172 },{ fecha: '2016-01-20', dato: 193 },{ fecha: '2016-01-27', dato: 91 },{ fecha: '2016-02-03', dato: 144 },{ fecha: '2016-02-10', dato: 229 },{ fecha: '2016-02-17', dato: 199 },{ fecha: '2016-02-24', dato: 114 },{ fecha: '2016-03-02', dato: 174 },{ fecha: '2016-03-09', dato: 32 },{ fecha: '2016-03-16', dato: 142 },{ fecha: '2016-03-30', dato: 117 },{ fecha: '2016-04-06', dato: 248 },{ fecha: '2016-04-13', dato: 234 },{ fecha: '2016-04-20', dato: 222 },{ fecha: '2016-04-27', dato: 152 },{ fecha: '2016-05-04', dato: 131 },{ fecha: '2016-05-11', dato: 119 },{ fecha: '2016-05-18', dato: 134 },{ fecha: '2016-05-25', dato: 274 },{ fecha: '2016-06-01', dato: 153 },{ fecha: '2016-06-08', dato: 140 },{ fecha: '2016-06-15', dato: 197 },{ fecha: '2016-06-22', dato: 85 },{ fecha: '2016-06-29', dato: 133 },{ fecha: '2016-07-06', dato: 107 },{ fecha: '2016-07-13', dato: 63 },{ fecha: '2016-07-20', dato: 70 },{ fecha: '2016-07-27', dato: 119 },{ fecha: '2016-08-03', dato: 113 },{ fecha: '2016-08-10', dato: 91 },{ fecha: '2016-08-17', dato: 84 },{ fecha: '2016-08-24', dato: 77 },{ fecha: '2016-09-07', dato: 132 },{ fecha: '2016-09-14', dato: 102 },{ fecha: '2016-09-21', dato: 118 },{ fecha: '2016-09-28', dato: 159 },{ fecha: '2016-10-05', dato: 167 },{ fecha: '2016-10-12', dato: 209 },{ fecha: '2016-10-19', dato: 204 },{ fecha: '2016-10-26', dato: 139 },{ fecha: '2016-11-02', dato: 204 },{ fecha: '2016-11-09', dato: 58 },{ fecha: '2016-11-23', dato: 169 },{ fecha: '2016-11-30', dato: 206 },{ fecha: '2016-12-07', dato: 206 },{ fecha: '2016-12-14', dato: 261 },{ fecha: '2016-12-21', dato: 245 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // seccion_grafica_javascript

    /**
     * Sección Gráfica 6 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_6_html() {
        return <<<FINAL
      <h3>Gráfica de Concentración de Partículas Suspendidas Totales en Torreón con fuente Esc. Secundaria General No. 3</h3>
      <div id="graficaDatosEscSecundariaGeneralNo3" class="grafica"></div>
      <p><b>Unidad:</b> ug por m3.</p>
      <h3>Observaciones</h3>
<ul>
<li>En 2016 Torreón contaba con 7 equipos manuales de PST (Partículas Suspendidas Totales) y 3 equipos de PM10 (Partículas Menores a 10 micras). En 2017 sólo se tienen operando los 3 equipos de PM10.</li>
<li>Se ajustaron las fuentes para generar varias gráficas, una por cada estación de monitoreo.</li>
<li>Fuente: <a href="http://www.torreon.gob.mx/medioambiente/">Dirección General de Medio Ambiente de Torreón</a></li>
<li>Descarga: <a href="http://datostrc.gob.mx/datasets/ver/32732">Portal de Datos Públicos de Torreón - Resultados de Monitoreo Atmosférico</a></li>
<li><a href="http://www.salud.gob.mx/unidades/cdi/nom/025ssa13.html">Norma Oficial Mexicana NOM-025-SSA1-1993</a></li>
<li><a href="http://dof.gob.mx/nota_detalle.php?codigo=5357042&amp;fecha=20/08/2014">Norma Oficial Mexicana NOM-025-SSA1-2014</a></li>
</ul>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 6 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_6_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosEscSecundariaGeneralNo3 === 'undefined') {
    vargraficaDatosEscSecundariaGeneralNo3 = Morris.Line({
      element: 'graficaDatosEscSecundariaGeneralNo3',
      data: [{ fecha: '2016-01-13', dato: 205 },{ fecha: '2016-01-20', dato: 296 },{ fecha: '2016-01-27', dato: 83 },{ fecha: '2016-02-03', dato: 154 },{ fecha: '2016-02-10', dato: 218 },{ fecha: '2016-02-17', dato: 216 },{ fecha: '2016-02-24', dato: 224 },{ fecha: '2016-03-02', dato: 202 },{ fecha: '2016-03-09', dato: 50 },{ fecha: '2016-03-16', dato: 215 },{ fecha: '2016-03-30', dato: 140 },{ fecha: '2016-04-06', dato: 246 },{ fecha: '2016-04-13', dato: 169 },{ fecha: '2016-04-20', dato: 262 },{ fecha: '2016-04-27', dato: 160 },{ fecha: '2016-05-04', dato: 130 },{ fecha: '2016-05-11', dato: 135 },{ fecha: '2016-05-18', dato: 141 },{ fecha: '2016-05-25', dato: 331 },{ fecha: '2016-06-01', dato: 210 },{ fecha: '2016-06-08', dato: 122 },{ fecha: '2016-06-15', dato: 227 },{ fecha: '2016-06-22', dato: 98 },{ fecha: '2016-06-29', dato: 110 },{ fecha: '2016-07-06', dato: 118 },{ fecha: '2016-07-13', dato: 80 },{ fecha: '2016-07-20', dato: 91 },{ fecha: '2016-07-27', dato: 124 },{ fecha: '2016-08-03', dato: 116 },{ fecha: '2016-08-10', dato: 112 },{ fecha: '2016-08-17', dato: 74 },{ fecha: '2016-08-24', dato: 98 },{ fecha: '2016-09-07', dato: 147 },{ fecha: '2016-09-14', dato: 146 },{ fecha: '2016-09-21', dato: 112 },{ fecha: '2016-09-28', dato: 169 },{ fecha: '2016-10-05', dato: 248 },{ fecha: '2016-10-12', dato: 240 },{ fecha: '2016-10-19', dato: 236 },{ fecha: '2016-10-26', dato: 130 },{ fecha: '2016-11-02', dato: 264 },{ fecha: '2016-11-09', dato: 70 },{ fecha: '2016-11-16', dato: 206 },{ fecha: '2016-11-23', dato: 201 },{ fecha: '2016-11-30', dato: 296 },{ fecha: '2016-12-07', dato: 321 },{ fecha: '2016-12-14', dato: 503 },{ fecha: '2016-12-21', dato: 227 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // seccion_grafica_javascript

    /**
     * Sección Gráfica 7 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_7_html() {
        return <<<FINAL
      <h3>Gráfica de Concentración de Partículas Suspendidas Totales en Torreón con fuente Esc. Secundaria Técnica No. 83</h3>
      <div id="graficaDatosEscSecundariaTecnicaNo83" class="grafica"></div>
      <p><b>Unidad:</b> ug por m3.</p>
      <h3>Observaciones</h3>
<ul>
<li>En 2016 Torreón contaba con 7 equipos manuales de PST (Partículas Suspendidas Totales) y 3 equipos de PM10 (Partículas Menores a 10 micras). En 2017 sólo se tienen operando los 3 equipos de PM10.</li>
<li>Se ajustaron las fuentes para generar varias gráficas, una por cada estación de monitoreo.</li>
<li>Fuente: <a href="http://www.torreon.gob.mx/medioambiente/">Dirección General de Medio Ambiente de Torreón</a></li>
<li>Descarga: <a href="http://datostrc.gob.mx/datasets/ver/32732">Portal de Datos Públicos de Torreón - Resultados de Monitoreo Atmosférico</a></li>
<li><a href="http://www.salud.gob.mx/unidades/cdi/nom/025ssa13.html">Norma Oficial Mexicana NOM-025-SSA1-1993</a></li>
<li><a href="http://dof.gob.mx/nota_detalle.php?codigo=5357042&amp;fecha=20/08/2014">Norma Oficial Mexicana NOM-025-SSA1-2014</a></li>
</ul>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 7 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_7_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosEscSecundariaTecnicaNo83 === 'undefined') {
    vargraficaDatosEscSecundariaTecnicaNo83 = Morris.Line({
      element: 'graficaDatosEscSecundariaTecnicaNo83',
      data: [{ fecha: '2016-01-13', dato: 248 },{ fecha: '2016-01-20', dato: 390 },{ fecha: '2016-01-27', dato: 129 },{ fecha: '2016-02-03', dato: 172 },{ fecha: '2016-02-10', dato: 307 },{ fecha: '2016-02-17', dato: 309 },{ fecha: '2016-02-24', dato: 325 },{ fecha: '2016-03-02', dato: 322 },{ fecha: '2016-03-09', dato: 67 },{ fecha: '2016-03-16', dato: 315 },{ fecha: '2016-03-30', dato: 169 },{ fecha: '2016-04-06', dato: 292 },{ fecha: '2016-04-13', dato: 209 },{ fecha: '2016-04-20', dato: 301 },{ fecha: '2016-04-27', dato: 298 },{ fecha: '2016-05-04', dato: 213 },{ fecha: '2016-05-11', dato: 191 },{ fecha: '2016-05-18', dato: 195 },{ fecha: '2016-05-25', dato: 425 },{ fecha: '2016-06-01', dato: 289 },{ fecha: '2016-06-08', dato: 176 },{ fecha: '2016-06-15', dato: 285 },{ fecha: '2016-06-22', dato: 167 },{ fecha: '2016-06-29', dato: 143 },{ fecha: '2016-07-06', dato: 161 },{ fecha: '2016-07-13', dato: 111 },{ fecha: '2016-07-20', dato: 157 },{ fecha: '2016-07-27', dato: 162 },{ fecha: '2016-08-03', dato: 151 },{ fecha: '2016-08-10', dato: 123 },{ fecha: '2016-08-17', dato: 102 },{ fecha: '2016-08-24', dato: 108 },{ fecha: '2016-09-07', dato: 203 },{ fecha: '2016-09-14', dato: 220 },{ fecha: '2016-09-21', dato: 193 },{ fecha: '2016-09-28', dato: 214 },{ fecha: '2016-10-05', dato: 306 },{ fecha: '2016-10-12', dato: 313 },{ fecha: '2016-10-19', dato: 227 },{ fecha: '2016-10-26', dato: 213 },{ fecha: '2016-11-02', dato: 293 },{ fecha: '2016-11-09', dato: 97 },{ fecha: '2016-11-16', dato: 258 },{ fecha: '2016-11-30', dato: 341 },{ fecha: '2016-12-07', dato: 327 },{ fecha: '2016-12-14', dato: 477 },{ fecha: '2016-12-21', dato: 371 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // seccion_grafica_javascript

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Ejecutar los métodos que alimentan cada lengüeta
        $this->lenguetas->agregar('smi-indicador-datos', 'Datos', $this->seccion_datos_html());
        $this->lenguetas->agregar('smi-indicador-grafica-1', 'Gráfica 1', $this->seccion_grafica_1_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_1_javascript());
        $this->lenguetas->agregar('smi-indicador-grafica-2', 'Gráfica 2', $this->seccion_grafica_2_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_2_javascript());
        $this->lenguetas->agregar('smi-indicador-grafica-3', 'Gráfica 3', $this->seccion_grafica_3_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_3_javascript());
        $this->lenguetas->agregar('smi-indicador-grafica-4', 'Gráfica 4', $this->seccion_grafica_4_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_4_javascript());
        $this->lenguetas->agregar('smi-indicador-grafica-5', 'Gráfica 5', $this->seccion_grafica_5_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_5_javascript());
        $this->lenguetas->agregar('smi-indicador-grafica-6', 'Gráfica 6', $this->seccion_grafica_6_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_6_javascript());
        $this->lenguetas->agregar('smi-indicador-grafica-7', 'Gráfica 7', $this->seccion_grafica_7_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_7_javascript());
        $this->lenguetas->definir_activa(); // Primer lengüeta activa
        // Definir el contenido de esta publicación que es un SchemaArticle
        $this->contenido->articleBody = $this->lenguetas->html();
        // Ejecutar este método en el padre
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // JavaScript de las lengüetas, es el de las gráficas
        $this->javascript[] = $this->lenguetas->javascript();
        // JavaScript para la carga completa del documento, es el de la tabla con los datos
        $this->javascript[] = $this->datos_tabla->javascript();
        // Ejecutar este método en el padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Código HTML para redifusión
        $this->redifusion = $this->descripcion;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SustentabilidadConcentracionDeParticulasSuspendidasTotales

?>
