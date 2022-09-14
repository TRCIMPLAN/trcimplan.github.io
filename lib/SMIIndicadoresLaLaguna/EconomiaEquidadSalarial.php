<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna EconomiaEquidadSalarial
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
 * Clase EconomiaEquidadSalarial
 */
class EconomiaEquidadSalarial extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Equidad salarial en La Laguna';
        $this->fecha       = '2019-02-08T09:35:33';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-equidad-salarial';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Se muestra la diferencia entre el ingreso promedio del hombre y la mujer';
        $this->claves      = 'IMPLAN, La Laguna, Índice de Competitividad Urbana';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana');
        $this->fuentes     = array('IMCO', 'Ayuntamiento de Torreón');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'texto'),
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
            array('fecha' => '2008-12-31', 'valor' => '0.2402', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '0.2348', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '0.1240', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '0.2112', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '0.2324', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2013-12-31', 'valor' => '0.2287', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2014-12-31', 'valor' => '0.1185', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2015-12-31', 'valor' => '0.0643', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2015-12-31', 'valor' => '23.9700', 'fuente_nombre' => 'Ayuntamiento de Torreón'),
            array('fecha' => '2016-12-31', 'valor' => '0.2213', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2016-12-31', 'valor' => '17.3700', 'fuente_nombre' => 'Ayuntamiento de Torreón'),
            array('fecha' => '2017-12-31', 'valor' => '28.6900', 'fuente_nombre' => 'Ayuntamiento de Torreón'),
            array('fecha' => '2018-12-31', 'valor' => '23.4300', 'fuente_nombre' => 'Ayuntamiento de Torreón'),
            array('fecha' => '2018-12-31', 'valor' => '23.4300', 'fuente_nombre' => 'Ayuntamiento de Torreón'),
            array('fecha' => '2019-12-31', 'valor' => '29.0000', 'fuente_nombre' => 'Ayuntamiento de Torreón'),
            array('fecha' => '2019-12-31', 'valor' => '29.0000', 'fuente_nombre' => 'Ayuntamiento de Torreón'),
            array('fecha' => '2020-12-31', 'valor' => '24.2400', 'fuente_nombre' => 'Ayuntamiento de Torreón'),
            array('fecha' => '2021-12-31', 'valor' => '21.6100', 'fuente_nombre' => 'IMCO')); // formateado 0, valor 36, crudo 18
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
        return NULL;
    } // observaciones

} // Clase EconomiaEquidadSalarial

?>
