<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresDurango SociedadPoblacionEstimada
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
 * Clase SociedadPoblacionEstimada
 */
class SociedadPoblacionEstimada extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Población Estimada en Durango';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-poblacion-estimada';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Población estimada a mitad de año.';
        $this->claves      = 'IMPLAN, Durango, Población';
        // Para el Organizador
        $this->categorias  = array('Población');
        $this->fuentes     = array('CONAPO');
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
            array('fecha' => '2011-06-30', 'valor' => '1690418', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2012-06-30', 'valor' => '1709741', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2013-06-30', 'valor' => '1728429', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2014-06-30', 'valor' => '1746809', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2015-06-30', 'valor' => '1764726', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2016-06-30', 'valor' => '1782205', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2017-06-30', 'valor' => '1799320', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2018-06-30', 'valor' => '1815966', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2019-06-30', 'valor' => '1832043', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2020-06-30', 'valor' => '1847547', 'fuente_nombre' => 'CONAPO'));
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
            array('region_nombre' => 'Torreón', 'fecha' => '2017-06-30', 'valor' => '708755', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2017-06-30', 'valor' => '361144', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2017-06-30', 'valor' => '156161', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2017-06-30', 'valor' => '116078', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2017-06-30', 'valor' => '1342139', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2017-06-30', 'valor' => '3029740', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'Durango', 'fecha' => '2017-06-30', 'valor' => '1799320', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'Nacional', 'fecha' => '2017-06-30', 'valor' => '123518270', 'fuente_nombre' => 'CONAPO'));
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
Estimaciones de CONAPO en base a INEGI. Consulta la [Base de Datos](http://www.conapo.gob.mx/es/CONAPO/Proyecciones_Datos)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadPoblacionEstimada

?>
