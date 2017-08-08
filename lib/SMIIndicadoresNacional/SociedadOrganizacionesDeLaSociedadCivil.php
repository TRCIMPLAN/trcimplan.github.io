<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresNacional SociedadOrganizacionesDeLaSociedadCivil
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
 * Clase SociedadOrganizacionesDeLaSociedadCivil
 */
class SociedadOrganizacionesDeLaSociedadCivil extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Organizaciones de la Sociedad Civil en Nacional';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-organizaciones-de-la-sociedad-civil';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Dentro del Índice de Competitividad Urbana del IMCO forma parte de subíndice de "Sistema Político Estable y Funcional". Este indicador busca captar la capacidad de la sociedad para organizarse y ejercer presión social sobre las autoridades. Se incluyen iglesias y organizaciones religiosas.';
        $this->claves      = 'IMPLAN, Nacional, Participación Ciudadana, Gobierno, Índice de Competitividad Urbana';
        // Para el Organizador
        $this->categorias  = array('Participación Ciudadana', 'Gobierno', 'Índice de Competitividad Urbana');
        $this->fuentes     = array('RFOSC');
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
            array('fecha' => '2016-11-25', 'valor' => '28.8400', 'fuente_nombre' => 'RFOSC'));
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-11-25', 'valor' => '55.0500', 'fuente_nombre' => 'RFOSC'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-11-25', 'valor' => '57.5500', 'fuente_nombre' => 'RFOSC'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-11-25', 'valor' => '31.3000', 'fuente_nombre' => 'RFOSC'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-11-25', 'valor' => '11.0100', 'fuente_nombre' => 'RFOSC'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2016-11-25', 'valor' => '49.1400', 'fuente_nombre' => 'RFOSC'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2016-11-25', 'valor' => '26.4300', 'fuente_nombre' => 'RFOSC'),
            array('region_nombre' => 'Durango', 'fecha' => '2016-11-25', 'valor' => '143.3800', 'fuente_nombre' => 'RFOSC'),
            array('region_nombre' => 'Nacional', 'fecha' => '2016-11-25', 'valor' => '28.8400', 'fuente_nombre' => 'RFOSC'));
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
Unidades: Organizaciones por cada 100 mil habitantes. Fuente: Secretaría de Gobernación (SEGOB), 2013. 
Registro Federal de Organizaciones de la Sociedad Civil. Consulta [Base de Datos](http://www.corresponsabilidad.gob.mx/)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadOrganizacionesDeLaSociedadCivil

?>
