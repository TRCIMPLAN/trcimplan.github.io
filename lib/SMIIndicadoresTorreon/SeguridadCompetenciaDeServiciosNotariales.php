<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SeguridadCompetenciaDeServiciosNotariales
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
 * Clase SeguridadCompetenciaDeServiciosNotariales
 */
class SeguridadCompetenciaDeServiciosNotariales extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Competencia de Servicios Notariales en Torreón';
        $this->fecha       = '2015-07-14T11:22:19';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-competencia-de-servicios-notariales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el número de notarios en cada ciudad. Unidades: Notarios por cada 100 mil personas económicamente activas (PEA).';
        $this->claves      = 'IMPLAN, Torreón, Índice de Competitividad Urbana, Gobierno';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Gobierno');
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
            array('fecha' => '2008-12-31', 'valor' => '22.4632', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '22.1946', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '21.5186', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '19.7976', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '19.9267', 'fuente_nombre' => 'IMCO'));
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
        return <<<OBSERVACIONES_FINAL
Fuente: Secretaría de Gobernación (Directorio de Notarios), 2013.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SeguridadCompetenciaDeServiciosNotariales

?>
