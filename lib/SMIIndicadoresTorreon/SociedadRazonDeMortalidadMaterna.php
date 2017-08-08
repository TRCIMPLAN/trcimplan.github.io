<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadRazonDeMortalidadMaterna
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
 * Clase SociedadRazonDeMortalidadMaterna
 */
class SociedadRazonDeMortalidadMaterna extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Razón de Mortalidad Materna en Torreón';
        $this->fecha       = '2015-01-13T16:19:50';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-razon-de-mortalidad-materna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'La razón de mortalidad materna es la medida de mortalidad materna más usada. Mide el riesgo obstétrico una vez que la mujer queda embarazada.';
        $this->claves      = 'IMPLAN, Torreón, Salud, Género, Bienestar, Objetivos del Milenio';
        // Para el Organizador
        $this->categorias  = array('Salud', 'Género', 'Bienestar', 'Objetivos del Milenio');
        $this->fuentes     = array('SINAIS (SSA)');
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
            array('fecha' => '2013-12-31', 'valor' => '33.0000', 'fuente_nombre' => 'SINAIS (SSA)'));
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
            array('region_nombre' => 'Torreón', 'fecha' => '2013-12-31', 'valor' => '33.0000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2013-12-31', 'valor' => '33.3000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2011-12-31', 'valor' => '55.3000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2013-12-31', 'valor' => '62.7000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2013-12-31', 'valor' => '26.9000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('region_nombre' => 'Durango', 'fecha' => '2013-12-31', 'valor' => '43.6000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('region_nombre' => 'Nacional', 'fecha' => '2013-12-31', 'valor' => '39.2000', 'fuente_nombre' => 'SINAIS (SSA)'));
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
Utilizado como uno de los indicadores para los Objetivos del Milenio (Mejorar la Salud Materna). Dirección General de Información en Salud (DGIS). Base de datos de muertes maternas, 2013. Sistema Nacional de Información en Salud (SINAIS). Secretaría de Salud. Consulta: 13 de enero 2015.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadRazonDeMortalidadMaterna

?>
