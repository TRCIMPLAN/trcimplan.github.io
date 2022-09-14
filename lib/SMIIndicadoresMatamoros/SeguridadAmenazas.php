<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros SeguridadAmenazas
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
 * Clase SeguridadAmenazas
 */
class SeguridadAmenazas extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Amenazas en Matamoros';
        $this->fecha       = '2018-07-25T13:55:26';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-amenazas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Cantidad de delitos por amenazas al año';
        $this->claves      = 'IMPLAN, Matamoros, Seguridad, Delincuencia';
        // Para el Organizador
        $this->categorias  = array('Seguridad', 'Delincuencia');
        $this->fuentes     = array('Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública');
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
            array('fecha' => '2015-12-31', 'valor' => '36', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2016-12-31', 'valor' => '61', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-12-31', 'valor' => '66', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-12-31', 'valor' => '69', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2022-01-31', 'valor' => '22', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2022-02-28', 'valor' => '52', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2022-03-31', 'valor' => '43', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2022-04-30', 'valor' => '33', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2022-05-31', 'valor' => '32', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública')); // formateado 0, valor 18, crudo 9
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
            array('region_nombre' => 'Torreón', 'fecha' => '2022-05-31', 'valor' => '250', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2022-05-31', 'valor' => '25', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2022-05-31', 'valor' => '3', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2022-05-31', 'valor' => '32', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2022-05-31', 'valor' => '319', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2022-04-30', 'valor' => '469', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'Durango', 'fecha' => '2022-04-30', 'valor' => '86', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'Nacional', 'fecha' => '2022-04-30', 'valor' => '9205', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'));
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
Descarga la [Base de Datos] (http://secretariadoejecutivo.gob.mx/incidencia-delictiva/incidencia-delictiva-fuero-comun.php)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SeguridadAmenazas

?>
