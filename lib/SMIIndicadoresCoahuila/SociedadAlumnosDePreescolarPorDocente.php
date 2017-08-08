<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresCoahuila SociedadAlumnosDePreescolarPorDocente
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

namespace SMIIndicadoresCoahuila;

/**
 * Clase SociedadAlumnosDePreescolarPorDocente
 */
class SociedadAlumnosDePreescolarPorDocente extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Alumnos de Preescolar por Docente en Coahuila';
        $this->fecha       = '2015-05-21T14:08:17';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-alumnos-de-preescolar-por-docente';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Número de alumnos (estudiantes) promedio por docente a nivel de educación preescolar y en un año escolar dado, basado en el número bruto de estudiantes y de docentes. Incluye escuelas públicas y privadas, así como de localidades urbanas y rurales.';
        $this->claves      = 'IMPLAN, Coahuila, Educación';
        // Para el Organizador
        $this->categorias  = array('Educación');
        $this->fuentes     = array('SEP');
        $this->regiones    = array('Coahuila');
    } // constructor

    /**
     * Datos Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function datos_estructura() {
        return array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'decimal'),
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
            array('fecha' => '2014-07-01', 'valor' => '25.6000', 'fuente_nombre' => 'SEP'));
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
            'valor' => array('enca' => 'Dato', 'formato' => 'decimal'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2014-07-01', 'valor' => '24.5000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2014-07-01', 'valor' => '22.9000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2014-07-01', 'valor' => '22.8000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2014-07-01', 'valor' => '25.1000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2014-07-01', 'valor' => '23.9000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2014-07-01', 'valor' => '25.6000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'Durango', 'fecha' => '2014-07-01', 'valor' => '19.5000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'Nacional', 'fecha' => '2014-07-01', 'valor' => '21.1000', 'fuente_nombre' => 'SEP'));
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
Consulta la [Base de Datos](http://planeacion.sep.gob.mx/principalescifras/)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadAlumnosDePreescolarPorDocente

?>
