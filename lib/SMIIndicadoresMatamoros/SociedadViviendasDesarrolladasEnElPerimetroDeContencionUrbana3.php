<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros SociedadViviendasDesarrolladasEnElPerimetroDeContencionUrbana3
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
 * Clase SociedadViviendasDesarrolladasEnElPerimetroDeContencionUrbana3
 */
class SociedadViviendasDesarrolladasEnElPerimetroDeContencionUrbana3 extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Viviendas desarrolladas en el perímetro de contención urbana 3 en Matamoros';
        $this->fecha       = '2018-07-26T14:25:56';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-viviendas-desarrolladas-en-el-perimetro-de-contencion-urbana-3';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de viviendas nuevas desarrolladas en el perímetro de contención urbana 3, periferia';
        $this->claves      = 'IMPLAN, Matamoros, Vivienda, Bienestar, Movilidad';
        // Para el Organizador
        $this->categorias  = array('Vivienda', 'Bienestar', 'Movilidad');
        $this->fuentes     = array('SNIIV');
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
            array('fecha' => '2018-04-30', 'valor' => '77.3300', 'fuente_nombre' => 'SNIIV', 'notas' => 'Fuente: CONAVI, Sistema Nacional de Información e Indicadores de Vivienda (SNIIV)')); // formateado 0, valor 2, crudo 2
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
            array('region_nombre' => 'Torreón', 'fecha' => '2018-04-30', 'valor' => '62.9800', 'fuente_nombre' => 'SNIIV', 'notas' => 'Fuente: CONAVI, Sistema Nacional de Información e Indicadores de Vivienda (SNIIV)'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2018-04-30', 'valor' => '17.8600', 'fuente_nombre' => 'SNIIV', 'notas' => 'Fuente: CONAVI, Sistema Nacional de Información e Indicadores de Vivienda (SNIIV)'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2018-04-30', 'valor' => '77.3300', 'fuente_nombre' => 'SNIIV', 'notas' => 'Fuente: CONAVI, Sistema Nacional de Información e Indicadores de Vivienda (SNIIV)'));
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
Fuente: CONAVI
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadViviendasDesarrolladasEnElPerimetroDeContencionUrbana3

?>
