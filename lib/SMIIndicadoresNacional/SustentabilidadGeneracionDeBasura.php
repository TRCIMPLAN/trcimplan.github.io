<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresNacional SustentabilidadGeneracionDeBasura
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
 * Clase SustentabilidadGeneracionDeBasura
 */
class SustentabilidadGeneracionDeBasura extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Generación de Basura en Nacional';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-generacion-de-basura';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Se considera la basura generada que ha sido recolectada y que termina en los depósitos adecuados para el manejo de ésta, ya que existen otras formas que implican la incineración y los depósitos no controlados y/o no autorizados.';
        $this->claves      = 'IMPLAN, Nacional, Recursos Naturales';
        // Para el Organizador
        $this->categorias  = array('Recursos Naturales');
        $this->fuentes     = array('INEGI');
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
            array('fecha' => '2010-12-31', 'valor' => '7.6000', 'fuente_nombre' => 'INEGI'));
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
            array('region_nombre' => 'Torreón', 'fecha' => '2015-12-31', 'valor' => '7.7000', 'fuente_nombre' => 'Dirección General de Servicios Públicos Municipales', 'notas' => 'Consulta la Base de Datos : http://datostrc.gob.mx/datasets/ver/32931'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2010-12-31', 'valor' => '8.7000', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2010-12-31', 'valor' => '7.8000', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2010-12-31', 'valor' => '2.8000', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2010-12-31', 'valor' => '8.0300', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2010-12-31', 'valor' => '8.8000', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Durango', 'fecha' => '2010-12-31', 'valor' => '6.1000', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Nacional', 'fecha' => '2010-12-31', 'valor' => '7.6000', 'fuente_nombre' => 'INEGI'));
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
Consulta la [Base de Datos](http://www3.inegi.org.mx/sistemas/sisept/default.aspx?t=mamb1065&s=est&c=33986)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadGeneracionDeBasura

?>
