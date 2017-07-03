<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadViviendasConDrenajeSoloConexionARedPublica
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
 * Clase SociedadViviendasConDrenajeSoloConexionARedPublica
 */
class SociedadViviendasConDrenajeSoloConexionARedPublica extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Viviendas con Drenaje (sólo conexión a red pública) en Torreón';
        $this->fecha       = '2015-07-14T15:23:56';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-viviendas-con-drenaje-solo-conexion-a-red-publica';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide las Viviendas con acceso a la red pública de drenaje.';
        $this->claves      = 'IMPLAN, Torreón, Índice de Competitividad Urbana, Vivienda';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Vivienda');
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
            array('fecha' => '2008-12-31', 'valor' => '89.2300', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '87.3200', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '85.4500', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '87.6600', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '89.9200', 'fuente_nombre' => 'IMCO'));
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
Fuente: Estimaciones de IMCO a partir del Módulo de Condiciones Socioeconómicas (MCS) del Consejo Nacional para la Evaluación de la Política de Desarrollo Social (CONEVAL). El SMI cuenta con el indicador "Viviendas con Drenaje" el cual está basado en datos del Censo de Población y Vivienda 2010 de INEGI.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadViviendasConDrenajeSoloConexionARedPublica

?>
