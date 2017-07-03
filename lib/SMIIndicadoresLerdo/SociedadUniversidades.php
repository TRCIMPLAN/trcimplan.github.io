<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo SociedadUniversidades
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

namespace SMIIndicadoresLerdo;

/**
 * Clase SociedadUniversidades
 */
class SociedadUniversidades extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Universidades en Lerdo';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-universidades';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Planteles de Instituciones de Educación Superior.';
        $this->claves      = 'IMPLAN, Lerdo, Educación';
        // Para el Organizador
        $this->categorias  = array('Educación');
        $this->fuentes     = array('CIESLAG-FOMEC');
        $this->regiones    = array('Lerdo');
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
            array('fecha' => '2014-03-31', 'valor' => '3', 'fuente_nombre' => 'CIESLAG-FOMEC'));
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
            array('region_nombre' => 'Torreón', 'fecha' => '2014-03-31', 'valor' => '18', 'fuente_nombre' => 'CIESLAG-FOMEC'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2014-03-31', 'valor' => '9', 'fuente_nombre' => 'CIESLAG-FOMEC'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2014-03-31', 'valor' => '3', 'fuente_nombre' => 'CIESLAG-FOMEC'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2014-03-31', 'valor' => '1', 'fuente_nombre' => 'CIESLAG-FOMEC'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2014-03-31', 'valor' => '31', 'fuente_nombre' => 'CIESLAG-FOMEC'));
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
Las escuelas y facultades de la UAdeC son contabilizadas en una unidad. Únicamente se contabilizan los planteles ubicados en Matamoros, Torreón, Gómez Palacio y Lerdo.

* Escuela Normal de la Laguna
* Escuela Normal de Torreón
* Instituto 18 de Marzo
* Instituto Superior Francisco Gonzalez de la Vega
* Instituto Tecnológico de Torreón (ITA 10)
* Instituto Tecnológico y de Estudios Superiores de Monterrey Campus Laguna
* Instituto Tecnológico de la Laguna
* Instituto Tecnológico Superior de Lerdo
* Universidad Autónoma Agraria Antonio Narro
* Universidad Autónoma de Coahuila
* Universidad Autónoma de la Laguna
* Universidad Autónoma del Noreste
* Universidad Iberoamericana
* Universidad Juárez del Estado de Durango
* Universidad La Salle
* Universidad Pedagógica Nacional
* Universidad del Valle de México
* Universidad Tec Milenio
* Universidad Interamericana para el Desarrollo
* Universidad Politécnica de Gómez Palacio
* Universidad del Desarrollo Profesional
* National Institute of Information Technologies
* Universidad Tecnológica de Torreón
* Instituto Estatal de Desarrollo Docente e investigación Educativa Unidad Matamoros
* Instituto Estatal de Desarrollo Docente e investigación Educativa Unidad Torreón
* Universidad Autónoma de Durango Campus Gómez Palacio
* Universidad Autónoma de Durango Campus Torreón
* Instituto Ma Esther Zuno de Echeverría
* Instituto de Estudios Superiores y Educación Normal Gral. Lázaro Cárdenas
* Universidad Tecnológica de La Laguna Durango
* Universidad Pedagógica de Durango-UGP
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadUniversidades

?>
