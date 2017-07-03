<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon GobiernoRelacionDeIngresosPropiosYTotales
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
 * Clase GobiernoRelacionDeIngresosPropiosYTotales
 */
class GobiernoRelacionDeIngresosPropiosYTotales extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Relación de Ingresos Propios y Totales en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-relacion-de-ingresos-propios-y-totales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de Ingresos propios el municipio con respecto a sus ingresos totales.';
        $this->claves      = 'IMPLAN, Torreón, Finanzas Públicas';
        // Para el Organizador
        $this->categorias  = array('Finanzas Públicas');
        $this->fuentes     = array('Elaboración propia con datos obtenidos del INEGI');
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
            array('fecha' => '2007-12-31', 'valor' => '41.2400', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2008-12-31', 'valor' => '35.6300', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2009-12-31', 'valor' => '38.5200', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2010-12-31', 'valor' => '32.5400', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2011-12-31', 'valor' => '30.2600', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2012-12-31', 'valor' => '43.0500', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2013-12-31', 'valor' => '43.9900', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2013-12-31', 'valor' => '44.1087', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2014-12-31', 'valor' => '38.3748', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'));
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
El promedio de la relación entre ingresos propios y totales de los municipios es:

- 2012 = 20.91%
- 2011 = 18.92%
- 2010 = 19.84%
- 2009 = 19.23%
- 2008 = 20.49%
- 2007 = 22.78%

Datos obtenidos de [INEGI. Estadística de finanzas públicas estatales y municipales](http://www.inegi.org.mx/sistemas/olap/Proyectos/bd/continuas/finanzaspublicas/FPMun.asp?s=est&c=11289&proy=efipem_fmun)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase GobiernoRelacionDeIngresosPropiosYTotales

?>
