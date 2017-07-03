<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SociedadEmpresasSocialmenteResponsables
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
 * Clase SociedadEmpresasSocialmenteResponsables
 */
class SociedadEmpresasSocialmenteResponsables extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Empresas Socialmente Responsables en La Laguna';
        $this->fecha       = '2015-07-14T14:42:02';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-empresas-socialmente-responsables';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el número de empresas certificadas como Empresa Socialmente Responsable. Únicamente se consideró la ubicación geográfica de la matriz de la empresa.';
        $this->claves      = 'IMPLAN, La Laguna, Índice de Competitividad Urbana, Empresas';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Empresas');
        $this->fuentes     = array('IMCO', 'Centro Mexicano para la Filantropía (Cemefi)');
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
            array('fecha' => '2008-12-31', 'valor' => '0.8000', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '0.8053', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '0.8091', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '0.8167', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '2.4596', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2016-05-24', 'valor' => '0.0241', 'fuente_nombre' => 'Centro Mexicano para la Filantropía (Cemefi)'));
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
Fuente: Centro Mexicano para la Filantropía (CEMEFI).
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadEmpresasSocialmenteResponsables

?>
