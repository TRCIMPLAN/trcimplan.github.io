<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros SociedadAccesoAInstitucionesDeSalud
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
 * Clase SociedadAccesoAInstitucionesDeSalud
 */
class SociedadAccesoAInstitucionesDeSalud extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Acceso a Instituciones de Salud en Matamoros';
        $this->fecha       = '2015-07-14T15:11:38';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-acceso-a-instituciones-de-salud';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el porcentaje de la población económicamente activa (PEA) que cuenta con atención médica, ya sea por parte de instituciones públicas o privadas, derivado de su trabajo actual.';
        $this->claves      = 'IMPLAN, Matamoros, Índice de Competitividad Urbana, Salud';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Salud');
        $this->fuentes     = array('IMCO');
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
            array('fecha' => '2008-12-31', 'valor' => '43.1000', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '35.6000', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '41.9000', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '40.1000', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '37.3000', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2016-12-31', 'valor' => '37406', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de población ocupada con acceso')); // formateado 0, valor 12, crudo 7
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
            'valor' => array('enca' => 'Dato', 'formato' => 'texto'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2019-06-30', 'valor' => '53.7000', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '78599', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de población ocupada con acceso'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '25036', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de población ocupada con acceso'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '37406', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de población ocupada con acceso'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2019-09-30', 'valor' => '53.9000', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'));
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
Fuente: INEGI (Encuesta Nacional de Ocupación y Empleo –ENOE).
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadAccesoAInstitucionesDeSalud

?>
