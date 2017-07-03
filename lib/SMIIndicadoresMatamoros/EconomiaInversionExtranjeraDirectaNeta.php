<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros EconomiaInversionExtranjeraDirectaNeta
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
 * Clase EconomiaInversionExtranjeraDirectaNeta
 */
class EconomiaInversionExtranjeraDirectaNeta extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Inversión Extranjera Directa (Neta) en Matamoros';
        $this->fecha       = '2015-07-14T15:08:55';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-inversion-extranjera-directa-neta';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice de "Aprovechamiento de las Relaciones Internacionales". Mide el promedio móvil de tres años de la inversión extranjera directa neta que recibe cada ciudad. Este indicador se calcula a nivel municipal a partir de la cifra estatal, la cual se prorratea con el porcentaje que aporta cada municipio al PIB estatal.';
        $this->claves      = 'IMPLAN, Matamoros, Índice de Competitividad Urbana, Empresas';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Empresas');
        $this->fuentes     = array('IMCO');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'dinero'),
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
            array('fecha' => '2008-12-31', 'valor' => '16.12', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '14.41', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '14.48', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '4.85', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '4.99', 'fuente_nombre' => 'IMCO'));
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
Dólares per cápita (promedio móvil tres años).
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaInversionExtranjeraDirectaNeta

?>
