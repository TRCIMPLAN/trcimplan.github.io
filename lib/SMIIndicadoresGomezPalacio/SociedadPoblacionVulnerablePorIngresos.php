<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio SociedadPoblacionVulnerablePorIngresos
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

namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadPoblacionVulnerablePorIngresos
 */
class SociedadPoblacionVulnerablePorIngresos extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Población vulnerable por ingresos en Gómez Palacio';
        $this->fecha       = '2018-02-06T11:51:45';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-poblacion-vulnerable-por-ingresos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de la población vulnerable por la cantidad de ingresos';
        $this->claves      = 'IMPLAN, Gómez Palacio, Bienestar';
        // Para el Organizador
        $this->categorias  = array('Bienestar');
        $this->fuentes     = array('CONEVAL');
        $this->regiones    = array('Gómez Palacio');
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
            array('fecha' => '2010-12-31', 'valor' => '15.8000', 'fuente_nombre' => 'CONEVAL'),
            array('fecha' => '2010-12-31', 'valor' => '8.8000', 'fuente_nombre' => 'CONEVAL'),
            array('fecha' => '2015-12-31', 'valor' => '14.6000', 'fuente_nombre' => 'CONEVAL')); // formateado 0, valor 6, crudo 3
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
            array('region_nombre' => 'Torreón', 'fecha' => '2015-12-31', 'valor' => '13.8000', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2015-12-31', 'valor' => '14.6000', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2015-12-31', 'valor' => '13.7000', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2015-12-31', 'valor' => '17.1000', 'fuente_nombre' => 'CONEVAL'));
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
Datos tomados del [CONEVAL]("https://www.coneval.org.mx/Medicion/Paginas/consulta_pobreza_municipal.aspx")
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadPoblacionVulnerablePorIngresos

?>
