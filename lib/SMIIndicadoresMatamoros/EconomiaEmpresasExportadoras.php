<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros EconomiaEmpresasExportadoras
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
 * Clase EconomiaEmpresasExportadoras
 */
class EconomiaEmpresasExportadoras extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Empresas Exportadoras en Matamoros';
        $this->fecha       = '2014-12-05T11:28:10';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-empresas-exportadoras';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Empresas vigentes en uno o más programas de apoyo a exportadores de la Secretaría de Economía.';
        $this->claves      = 'IMPLAN, Matamoros, Empresas';
        // Para el Organizador
        $this->categorias  = array('Empresas');
        $this->fuentes     = array('Secretaría de Economía');
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
            array('fecha' => '2014-11-24', 'valor' => '5', 'fuente_nombre' => 'Secretaría de Economía'));
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
            array('region_nombre' => 'Torreón', 'fecha' => '2014-11-24', 'valor' => '113', 'fuente_nombre' => 'Secretaría de Economía'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2014-11-24', 'valor' => '55', 'fuente_nombre' => 'Secretaría de Economía'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2014-11-24', 'valor' => '11', 'fuente_nombre' => 'Secretaría de Economía'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2014-11-24', 'valor' => '5', 'fuente_nombre' => 'Secretaría de Economía'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2014-11-24', 'valor' => '184', 'fuente_nombre' => 'Secretaría de Economía'));
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
Datos obtenidos de [Secretaría de Economía](http://www.economia.gob.mx/comunidad-negocios/industria-y-comercio/instrumentos-de-comercio-exterior/directorios-y-discos-de-captura)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaEmpresasExportadoras

?>
