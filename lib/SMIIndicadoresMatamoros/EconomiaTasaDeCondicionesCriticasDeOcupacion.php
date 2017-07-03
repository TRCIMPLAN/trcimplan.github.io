<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros EconomiaTasaDeCondicionesCriticasDeOcupacion
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
 * Clase EconomiaTasaDeCondicionesCriticasDeOcupacion
 */
class EconomiaTasaDeCondicionesCriticasDeOcupacion extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Tasa de Condiciones Críticas de Ocupación en Matamoros';
        $this->fecha       = '2016-07-04T13:01:06';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-tasa-de-condiciones-criticas-de-ocupacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de la población ocupada en alguna de las siguientes situaciones: 1) trabaja menos de 35 horas a la semana por razones de mercado, 2) trabaja más de 35 horas con ingresos inferiores al salario mínimo o 3) labora más de 48 horas con una percepción de hasta dos salarios mínimos.';
        $this->claves      = 'IMPLAN, Matamoros, Empleo';
        // Para el Organizador
        $this->categorias  = array('Empleo');
        $this->fuentes     = array('Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos');
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
            array('fecha' => '2016-03-31', 'valor' => '18.4500', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2016-09-30', 'valor' => '16.6700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2016-12-31', 'valor' => '10.5000', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2017-03-31', 'valor' => '14.2900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'));
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

} // Clase EconomiaTasaDeCondicionesCriticasDeOcupacion

?>
