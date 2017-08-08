<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresCoahuila EconomiaMedianasEmpresas
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

namespace SMIIndicadoresCoahuila;

/**
 * Clase EconomiaMedianasEmpresas
 */
class EconomiaMedianasEmpresas extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Medianas Empresas en Coahuila';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-medianas-empresas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje del total de empresas que emplean de 51 a 250 personas.';
        $this->claves      = 'IMPLAN, Coahuila, Empresas';
        // Para el Organizador
        $this->categorias  = array('Empresas');
        $this->fuentes     = array('Sistema de Información Empresarial Mexicano (SIEM)');
        $this->regiones    = array('Coahuila');
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
            array('fecha' => '2013-12-31', 'valor' => '1.9500', 'fuente_nombre' => 'Sistema de Información Empresarial Mexicano (SIEM)'),
            array('fecha' => '2014-07-31', 'valor' => '1.6500', 'fuente_nombre' => 'Sistema de Información Empresarial Mexicano (SIEM)'));
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
            'valor' => array('enca' => 'Dato', 'formato' => 'porcentaje'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2014-07-31', 'valor' => '1.5700', 'fuente_nombre' => 'Sistema de Información Empresarial Mexicano (SIEM)'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2014-07-31', 'valor' => '2.3600', 'fuente_nombre' => 'Sistema de Información Empresarial Mexicano (SIEM)'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2014-07-31', 'valor' => '1.6900', 'fuente_nombre' => 'Sistema de Información Empresarial Mexicano (SIEM)'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2014-07-31', 'valor' => '1.7300', 'fuente_nombre' => 'Sistema de Información Empresarial Mexicano (SIEM)'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2014-07-31', 'valor' => '1.7400', 'fuente_nombre' => 'Sistema de Información Empresarial Mexicano (SIEM)'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2014-07-31', 'valor' => '1.6500', 'fuente_nombre' => 'Sistema de Información Empresarial Mexicano (SIEM)'),
            array('region_nombre' => 'Durango', 'fecha' => '2014-07-31', 'valor' => '1.6300', 'fuente_nombre' => 'Sistema de Información Empresarial Mexicano (SIEM)'),
            array('region_nombre' => 'Nacional', 'fecha' => '2014-07-31', 'valor' => '1.1900', 'fuente_nombre' => 'Sistema de Información Empresarial Mexicano (SIEM)'));
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
A nivel nacional el 1.29% de las empresas son medianas.

Datos obtenidos de [SIEM](http://www.siem.gob.mx/siem/estadisticas/EstadoTamanoPublico.asp?p=1)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaMedianasEmpresas

?>
