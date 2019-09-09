<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresNacional EconomiaTrabajadoresAsegurados
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

namespace SMIIndicadoresNacional;

/**
 * Clase EconomiaTrabajadoresAsegurados
 */
class EconomiaTrabajadoresAsegurados extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Trabajadores Asegurados en Nacional';
        $this->fecha       = '2014-11-07T09:04:55';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-trabajadores-asegurados';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Total de trabajadores asegurados en el Instituto Mexicano del Seguro Social a nivel municipal';
        $this->claves      = 'IMPLAN, Nacional, Empleo';
        // Para el Organizador
        $this->categorias  = array('Empleo');
        $this->fuentes     = array('Instituto Mexicano del Seguro Social (IMSS)');
        $this->regiones    = array('Nacional');
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
            array('fecha' => '2017-01-31', 'valor' => '18699916', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-02-28', 'valor' => '18853971', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-03-31', 'valor' => '18994318', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-04-30', 'valor' => '19021083', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-05-31', 'valor' => '19047825', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-06-30', 'valor' => '19134058', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-07-31', 'valor' => '19172222', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-08-31', 'valor' => '19292865', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-09-30', 'valor' => '19428916', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-10-31', 'valor' => '19623674', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-11-30', 'valor' => '19755991', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-12-31', 'valor' => '19418455', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-01-31', 'valor' => '19532177', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-02-28', 'valor' => '19696488', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-03-31', 'valor' => '19786997', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-04-30', 'valor' => '19874106', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-05-31', 'valor' => '19908072', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-06-30', 'valor' => '19894575', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-07-31', 'valor' => '19949244', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-08-31', 'valor' => '20063433', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-09-30', 'valor' => '20192960', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-10-31', 'valor' => '20356179', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-11-30', 'valor' => '20457926', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-12-31', 'valor' => '20079365', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2019-01-31', 'valor' => '20174011', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2019-02-28', 'valor' => '20299993', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2019-03-31', 'valor' => '20348508', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2019-04-30', 'valor' => '20378927', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2019-05-31', 'valor' => '20382910', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2019-06-30', 'valor' => '20368666', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2019-07-31', 'valor' => '20385379', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)')); // formateado 0, valor 62, crudo 31
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
            array('region_nombre' => 'Torreón', 'fecha' => '2019-07-31', 'valor' => '200657', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2019-07-31', 'valor' => '82454', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2019-07-31', 'valor' => '13205', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2019-07-31', 'valor' => '8818', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2019-07-31', 'valor' => '305134', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2019-07-31', 'valor' => '790213', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('region_nombre' => 'Durango', 'fecha' => '2019-07-31', 'valor' => '245420', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('region_nombre' => 'Nacional', 'fecha' => '2019-07-31', 'valor' => '20385379', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'));
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
Datos obtenidos de [IMSS](http://datos.imss.gob.mx/dataset)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaTrabajadoresAsegurados

?>
