<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresDurango GobiernoIndiceDeInformacionPresupuestal
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

namespace SMIIndicadoresDurango;

/**
 * Clase GobiernoIndiceDeInformacionPresupuestal
 */
class GobiernoIndiceDeInformacionPresupuestal extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Índice de Información Presupuestal en Durango';
        $this->fecha       = '2015-07-14T10:00:19';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-indice-de-informacion-presupuestal';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide la calidad de la información tanto de los presupuestos de egresos como de las leyes de ingresos de las ciudades.';
        $this->claves      = 'IMPLAN, Durango, Índice de Competitividad Urbana, Transparencia';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Transparencia');
        $this->fuentes     = array('IMCO');
        $this->regiones    = array('Durango');
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
            array('fecha' => '2015-12-01', 'valor' => '72.0000', 'fuente_nombre' => 'IMCO'));
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
            'valor' => array('enca' => 'Dato', 'formato' => 'decimal'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2015-12-08', 'valor' => '100.0000', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2015-12-08', 'valor' => '30.0000', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2015-12-08', 'valor' => '33.0000', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2015-12-08', 'valor' => '100.0000', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2015-12-08', 'valor' => '65.7500', 'fuente_nombre' => 'IMCO', 'notas' => 'Promedio de las calificaciones de los cuatro municipios metropolitanos.'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2015-12-01', 'valor' => '100.0000', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Durango', 'fecha' => '2015-12-01', 'valor' => '72.0000', 'fuente_nombre' => 'IMCO'));
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

} // Clase GobiernoIndiceDeInformacionPresupuestal

?>
