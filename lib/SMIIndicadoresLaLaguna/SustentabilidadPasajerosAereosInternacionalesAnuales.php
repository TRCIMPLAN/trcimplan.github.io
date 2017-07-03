<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SustentabilidadPasajerosAereosInternacionalesAnuales
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
 * Clase SustentabilidadPasajerosAereosInternacionalesAnuales
 */
class SustentabilidadPasajerosAereosInternacionalesAnuales extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Pasajeros Aéreos Internacionales Anuales en La Laguna';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-pasajeros-aereos-internacionales-anuales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Total de pasajeros que llegan o salen del Aeropuerto Internacional Francisco Sarabia de Torreón, Coahuila.';
        $this->claves      = 'IMPLAN, La Laguna, Movilidad';
        // Para el Organizador
        $this->categorias  = array('Movilidad');
        $this->fuentes     = array('Operadora Mexicana de Aeropuertos (OMA)');
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
            array('fecha' => '2005-12-31', 'valor' => '64316', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2006-12-31', 'valor' => '73900', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2007-12-31', 'valor' => '80742', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2008-12-31', 'valor' => '77199', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2009-12-31', 'valor' => '53112', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2010-12-31', 'valor' => '51238', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2011-12-31', 'valor' => '51401', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-12-31', 'valor' => '61443', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-12-31', 'valor' => '55446', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-12-31', 'valor' => '54154', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-12-31', 'valor' => '54307', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'));
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
El flujo de pasajeros a nivel internacional es de:

- 2013 = 1,833,223
- 2012 = 1,825,145
- 2011 = 1,784,252
- 2010 = 1,927,529
- 2009 = 1,806,105
- 2008 = 2,327,839
- 2007 = 2,471,947
- 2006 = 2,525,279
- 2005 = 2,479,772

Se considera a nivel metropolitano. Consulta la [Base de Datos](http://www.oma.aero/es/aeropuertos/trfico-de-pasajeros/)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadPasajerosAereosInternacionalesAnuales

?>
