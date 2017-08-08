<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresCoahuila SociedadAlumnosConHabilidadesCientificasMatematicasPracticas
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
 * Clase SociedadAlumnosConHabilidadesCientificasMatematicasPracticas
 */
class SociedadAlumnosConHabilidadesCientificasMatematicasPracticas extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Alumnos con Habilidades Científicas-Matemáticas Prácticas en Coahuila';
        $this->fecha       = '2016-01-20T13:24:20';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-alumnos-con-habilidades-cientificas-matematicas-practicas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de Alumnos de 6to de primaria ubicados en Nivel III según resultados de la prueba PLANEA de la SEP.';
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
            'valor' => array('enca' => 'Dato', 'formato' => 'porcentaje'),
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
            array('fecha' => '2015-12-01', 'valor' => '15.6000', 'fuente_nombre' => 'SEP'));
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
            'valor' => array('enca' => 'Dato', 'formato' => 'porcentaje'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2015-12-01', 'valor' => '15.0000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2015-12-01', 'valor' => '12.8000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2015-12-01', 'valor' => '12.1000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2015-12-01', 'valor' => '10.9000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2015-12-01', 'valor' => '13.6000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2015-12-01', 'valor' => '15.6000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'Durango', 'fecha' => '2015-12-01', 'valor' => '13.9000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'Nacional', 'fecha' => '2015-12-01', 'valor' => '13.8000', 'fuente_nombre' => 'SEP'));
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
Resuelven problemas aritméticos con números naturales o decimales. Resuelven problemas de aplicación de perímetros. Lea el análisis [Competencias en Lenguaje y Matemáticas en los Estudiantes de la Comarca](http://www.trcimplan.gob.mx/blog/competencias-en-lenguaje-y-matematicas-en-los-estudiantes-de-la-comarca-parte-1.html). Consulta la [Base de Datos](http://planea.sep.gob.mx/ba/base_de_datos_2015/).
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadAlumnosConHabilidadesCientificasMatematicasPracticas

?>
