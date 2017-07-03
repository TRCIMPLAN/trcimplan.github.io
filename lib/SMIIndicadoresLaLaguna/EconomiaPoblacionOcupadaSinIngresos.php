<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna EconomiaPoblacionOcupadaSinIngresos
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
 * Clase EconomiaPoblacionOcupadaSinIngresos
 */
class EconomiaPoblacionOcupadaSinIngresos extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Población Ocupada Sin Ingresos en La Laguna';
        $this->fecha       = '2015-07-14T14:39:39';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-poblacion-ocupada-sin-ingresos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice de "Mercado Laboral". Mide la población que actualmente está empleada, pero que no recibe remuneración por su trabajo. Una parte importante de este indicador son trabajadores familiares sin pago. Algunos de estos casos podrían corresponder a situaciones cercanas a la esclavitud moderna o situaciones especiales en las que los trabajadores no cobran por los servicios que desempeñan.';
        $this->claves      = 'IMPLAN, La Laguna, Índice de Competitividad Urbana, Empleo';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Empleo');
        $this->fuentes     = array('IMCO');
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
            array('fecha' => '2008-12-31', 'valor' => '11.5400', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '9.5300', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '8.5900', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '9.8000', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '9.1700', 'fuente_nombre' => 'IMCO'));
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
Porcentaje de la población ocupada
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaPoblacionOcupadaSinIngresos

?>
