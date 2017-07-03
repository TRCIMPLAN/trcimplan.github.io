<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadViviendasConComputadora
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
 * Clase SociedadViviendasConComputadora
 */
class SociedadViviendasConComputadora extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Viviendas con Computadora en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-viviendas-con-computadora';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de viviendas habitadas con computadora.';
        $this->claves      = 'IMPLAN, Torreón, Índice de Competitividad Urbana, Vivienda';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Vivienda');
        $this->fuentes     = array('IMCO', 'INEGI');
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
            array('fecha' => '2008-12-31', 'valor' => '32.1100', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '35.1400', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '38.7400', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2010-12-31', 'valor' => '38.4500', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '40.9600', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '43.6400', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2015-12-31', 'valor' => '39.8100', 'fuente_nombre' => 'INEGI'));
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
        return <<<MAPAS_FINAL
<iframe width='100%' height='520' frameborder='0' src='https://implantorreon.cartodb.com/u/sigimplan/viz/0b2a1d1e-de25-11e4-91b0-0e4fddd5de28/embed_map' allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
MAPAS_FINAL;
    } // mapas

    /**
     * Observaciones
     *
     * @return string Markdown
     */
    public function observaciones() {
        return <<<OBSERVACIONES_FINAL
Consulta la [Base de Datos](http://www.inegi.org.mx/biinegi/). Los datos de 2015 son de la Encuesta Intercensal 2015 de INEGI y son estimaciones.

Enlace al [Sistema de Información Geográfica](http://201.159.104.45:8080/apps/implan2.html).
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadViviendasConComputadora

?>
