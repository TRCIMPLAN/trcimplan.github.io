<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon GobiernoMuertesPorInfeccionesInstestinales
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

namespace SMIIndicadoresTorreon;

/**
 * Clase GobiernoMuertesPorInfeccionesInstestinales
 */
class GobiernoMuertesPorInfeccionesInstestinales extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Muertes por Infecciones Instestinales en Torreón';
        $this->fecha       = '2015-07-14T15:45';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-muertes-por-infecciones-instestinales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide el número de muertes ocasionadas por infecciones intestinales por cada 100 mil habitantes. A falta de mediciones adecuadas de calidad del agua, este indicador capta los impactos de que una ciudad consuma agua relativamente sucia como resultado de un mal funcionamiento del organismo operador de agua local. El indicador asume una relación directa entre calidad del agua y enfermedades intestinales.';
        $this->claves      = 'IMPLAN, Torreón, Índice de Competitividad Urbana, Salud';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Salud');
        $this->fuentes     = array('IMCO');
        $this->regiones    = array('Torreón');
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
            array('fecha' => '2008-12-31', 'valor' => '4.2956', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '2.5081', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '2.4712', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '4.1097', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '3.7523', 'fuente_nombre' => 'IMCO'));
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

} // Clase GobiernoMuertesPorInfeccionesInstestinales

?>
