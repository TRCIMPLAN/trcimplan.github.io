<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadDelitosPorViolenciaFamiliar
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
 * Clase SociedadDelitosPorViolenciaFamiliar
 */
class SociedadDelitosPorViolenciaFamiliar extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Delitos por Violencia Familiar en Torreón';
        $this->fecha       = '2019-04-08T13:40:19';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-delitos-por-violencia-familiar';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Cantidad total de delitos por violencia familiar registrados anualmente';
        $this->claves      = 'IMPLAN, Torreón, Seguridad, Género';
        // Para el Organizador
        $this->categorias  = array('Seguridad', 'Género');
        $this->fuentes     = array('Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública');
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
            array('fecha' => '2016-12-31', 'valor' => '1940', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => 'Aparece en delitos del fuero común'),
            array('fecha' => '2017-12-31', 'valor' => '2406', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-12-31', 'valor' => '2631', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => 'Aparece en Delitos del Fuero Común')); // formateado 0, valor 6, crudo 5
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
Fuente: Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública (SESNSP)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadDelitosPorViolenciaFamiliar

?>
