<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna EconomiaPoblacionEconomicamenteActivaPea
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
 * Clase EconomiaPoblacionEconomicamenteActivaPea
 */
class EconomiaPoblacionEconomicamenteActivaPea extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Población Económicamente Activa (PEA) en La Laguna';
        $this->fecha       = '2018-07-27T11:34:40';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-poblacion-economicamente-activa-pea';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Población de 15 o más años de edad que durante el periodo de referencia realizó una actividad económica (población ocupada) o buscó activamente hacerlo (población desocupada en las últimas cuatro semanas), siempre y cuando haya estado dispuesta a trabajar en la semana de referencia.';
        $this->claves      = 'IMPLAN, La Laguna, Población';
        // Para el Organizador
        $this->categorias  = array('Población');
        $this->fuentes     = array('IMCO', 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos');
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
            array('fecha' => '2016-12-31', 'valor' => '613008', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2018-03-31', 'valor' => '524957', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2018-06-30', 'valor' => '531026', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2018-09-30', 'valor' => '530457', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2018-12-31', 'valor' => '528456', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2019-03-31', 'valor' => '535236', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2019-06-30', 'valor' => '551645', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2019-09-30', 'valor' => '554795', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2019-12-31', 'valor' => '542858', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2019-12-31', 'valor' => '542858', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2020-03-31', 'valor' => '536736', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2020-03-31', 'valor' => '536736', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2020-09-30', 'valor' => '523459', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2020-09-30', 'valor' => '523459', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2020-12-31', 'valor' => '546913', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2021-03-31', 'valor' => '548902', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2021-06-30', 'valor' => '574810', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos')); // formateado 0, valor 34, crudo 17
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '311815', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '165171', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '54779', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '81243', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2021-06-30', 'valor' => '574810', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2021-06-30', 'valor' => '1467284', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('region_nombre' => 'Durango', 'fecha' => '2021-06-30', 'valor' => '843167', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('region_nombre' => 'Nacional', 'fecha' => '2021-06-30', 'valor' => '57668254', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'));
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
Datos tomados de INEGI (ENOE)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaPoblacionEconomicamenteActivaPea

?>
