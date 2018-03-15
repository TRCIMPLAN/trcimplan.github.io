<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SustentabilidadDisponibilidadDeAcuiferos
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
 * Clase SustentabilidadDisponibilidadDeAcuiferos
 */
class SustentabilidadDisponibilidadDeAcuiferos extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Disponibilidad de Acuíferos en La Laguna';
        $this->fecha       = '2018-02-07T09:58:40';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-disponibilidad-de-acuiferos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Índice que mide la disponibilidad de acuíferos en una escala del 1 al 4, donde 1 es lo más escaso y 4 lo más abundante';
        $this->claves      = 'IMPLAN, La Laguna, Medio Ambiente, Recursos Naturales';
        // Para el Organizador
        $this->categorias  = array('Medio Ambiente', 'Recursos Naturales');
        $this->fuentes     = array('IMCO');
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
            array('fecha' => '2010-12-31', 'valor' => '2', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '2', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '2', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2013-12-31', 'valor' => '2', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2014-12-31', 'valor' => '1', 'fuente_nombre' => 'IMCO')); // formateado 0, valor 10, crudo 5
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
            array('region_nombre' => 'Torreón', 'fecha' => '2014-12-31', 'valor' => '1', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2014-12-31', 'valor' => '1', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2014-12-31', 'valor' => '1', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2014-12-31', 'valor' => '1', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2014-12-31', 'valor' => '1', 'fuente_nombre' => 'IMCO'));
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
Fuente: IMCO, basado en CONAGUA
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadDisponibilidadDeAcuiferos

?>
