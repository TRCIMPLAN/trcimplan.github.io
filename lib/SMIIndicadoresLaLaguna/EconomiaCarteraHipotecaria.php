<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna EconomiaCarteraHipotecaria
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
 * Clase EconomiaCarteraHipotecaria
 */
class EconomiaCarteraHipotecaria extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Cartera Hipotecaria en La Laguna';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-cartera-hipotecaria';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Monto total de créditos otorgados hasta la fecha indicada.';
        $this->claves      = 'IMPLAN, La Laguna, Mercados';
        // Para el Organizador
        $this->categorias  = array('Mercados');
        $this->fuentes     = array('Comisión Nacional Bancaria y de Valores (CNBV)');
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
            array('fecha' => '2010-12-31', 'valor' => '4205870657.00', 'fuente_nombre' => 'Comisión Nacional Bancaria y de Valores (CNBV)'),
            array('fecha' => '2011-12-31', 'valor' => '4528969820.00', 'fuente_nombre' => 'Comisión Nacional Bancaria y de Valores (CNBV)'),
            array('fecha' => '2012-12-31', 'valor' => '4896553645.00', 'fuente_nombre' => 'Comisión Nacional Bancaria y de Valores (CNBV)'),
            array('fecha' => '2013-12-31', 'valor' => '5442162894.00', 'fuente_nombre' => 'Comisión Nacional Bancaria y de Valores (CNBV)'),
            array('fecha' => '2014-03-31', 'valor' => '5671976037.00', 'fuente_nombre' => 'Comisión Nacional Bancaria y de Valores (CNBV)', 'notas' => 'Dato trimestral'));
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
La cartera hipotecaria de La Laguna representa el 1.69% de la cartera nacional. 

Datos obtenidos de [CNBV](http://portafoliodeinformacion.cnbv.gob.mx/bm1/Paginas/carteravivienda.aspx)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaCarteraHipotecaria

?>
