<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon EconomiaEjecucionDeContratos
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
 * Clase EconomiaEjecucionDeContratos
 */
class EconomiaEjecucionDeContratos extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Ejecución de Contratos en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-ejecucion-de-contratos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo" Mide el número de días promedio requerido para la ejecución de contratos de negocios. Ésta es una variable a nivel estatal.';
        $this->claves      = 'IMPLAN, Torreón, Empresas, Doing Business, Índice de Competitividad Urbana';
        // Para el Organizador
        $this->categorias  = array('Empresas', 'Doing Business', 'Índice de Competitividad Urbana');
        $this->fuentes     = array('Doing Business', 'IMCO');
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
            array('fecha' => '2007-12-31', 'valor' => '386', 'fuente_nombre' => 'Doing Business', 'notas' => 'En el tema de apertura de negocio Doing Business califica otros dos aspectos. Los resultados de 2007 para Torreón son: 

- Índice de complejidad (1-100): 84 
- Costo (% de la deuda): 20
- Ranking en ejecución de contratos: 19'),
            array('fecha' => '2008-12-31', 'valor' => '386', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '270', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '270', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '270', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '270', 'fuente_nombre' => 'Doing Business', 'notas' => 'En el tema de apertura de negocio Doing Business califica otros dos aspectos. Los resultados de 2012 para Torreón son: 

- # de procedimientos: 37 
- Costo (% de cantidad demandada): 27.9 
- Ranking en ejecución de contratos: 7'),
            array('fecha' => '2012-12-31', 'valor' => '270', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2013-10-31', 'valor' => '270', 'fuente_nombre' => 'Doing Business', 'notas' => 'Dato obtenido del estudio elaborado por Doing Business de octubre de 2011 a octubre de 2013 y publicado en su reporte Doing Business en México 2014. 

Los Indicadores complementarios en ejecución de contratos fueron los siguientes para Torreón: 
Procedimientos (número) = 37 ; 
Costo (% de cantidad demandada) = 27,9'),
            array('fecha' => '2015-12-31', 'valor' => '200', 'fuente_nombre' => 'Doing Business'));
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
Fuente: Doing Business en México, 2007, 2009, 2012.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaEjecucionDeContratos

?>
