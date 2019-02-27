<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadViviendasDondeSeparanEnOrganicoEInorganicoLosResiduos
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
 * Clase SociedadViviendasDondeSeparanEnOrganicoEInorganicoLosResiduos
 */
class SociedadViviendasDondeSeparanEnOrganicoEInorganicoLosResiduos extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Viviendas donde separan en Orgánico e Inorgánico los Residuos en Torreón';
        $this->fecha       = '2018-07-26T14:18:46';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-viviendas-donde-separan-en-organico-e-inorganico-los-residuos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de viviendas en donde se separan residuos orgánicos e inorgánicos';
        $this->claves      = 'IMPLAN, Torreón, Vivienda, Medio Ambiente';
        // Para el Organizador
        $this->categorias  = array('Vivienda', 'Medio Ambiente');
        $this->fuentes     = array('Dirección General de Medio Ambiente', 'IMCO');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'texto'),
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
            array('fecha' => '2015-12-31', 'valor' => '43.0000', 'fuente_nombre' => 'Dirección General de Medio Ambiente', 'notas' => 'Fuente: INEGI'),
            array('fecha' => '2016-12-31', 'valor' => '80479', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad"')); // formateado 0, valor 4, crudo 4
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
            'valor' => array('enca' => 'Dato', 'formato' => 'texto'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '80479', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad"'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '35132', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad"'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '14424', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad"'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '9584', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad"'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2015-12-31', 'valor' => '43.9000', 'fuente_nombre' => 'IMCO'));
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
Fuente: INEGI
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadViviendasDondeSeparanEnOrganicoEInorganicoLosResiduos

?>
