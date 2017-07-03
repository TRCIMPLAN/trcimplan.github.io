<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SustentabilidadPasajerosAereosInternacionalesMensuales
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
 * Clase SustentabilidadPasajerosAereosInternacionalesMensuales
 */
class SustentabilidadPasajerosAereosInternacionalesMensuales extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Pasajeros Aéreos Internacionales Mensuales en Torreón';
        $this->fecha       = '2015-05-20T16:23:28';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-pasajeros-aereos-internacionales-mensuales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Flujo de pasajeros que llegan del, o, se dirigen fuera de territorio nacional.';
        $this->claves      = 'IMPLAN, Torreón, Movilidad';
        // Para el Organizador
        $this->categorias  = array('Movilidad');
        $this->fuentes     = array('Operadora Mexicana de Aeropuertos (OMA)');
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
            array('fecha' => '2012-02-29', 'valor' => '3568', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-03-31', 'valor' => '4470', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-04-30', 'valor' => '5159', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-05-31', 'valor' => '5212', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-06-30', 'valor' => '4803', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-07-31', 'valor' => '6871', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-08-31', 'valor' => '6486', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-09-30', 'valor' => '4764', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-10-31', 'valor' => '4574', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-11-30', 'valor' => '4910', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-12-31', 'valor' => '6037', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-01-31', 'valor' => '5014', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-02-28', 'valor' => '3553', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-03-31', 'valor' => '5185', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-04-30', 'valor' => '4624', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-05-31', 'valor' => '4426', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-06-30', 'valor' => '4251', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-07-31', 'valor' => '5464', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-08-31', 'valor' => '4568', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-09-30', 'valor' => '4180', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-10-31', 'valor' => '3897', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-11-30', 'valor' => '4413', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-12-31', 'valor' => '5871', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-01-31', 'valor' => '4749', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-02-28', 'valor' => '4749', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-03-31', 'valor' => '4303', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-04-30', 'valor' => '4326', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-05-31', 'valor' => '4003', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-06-30', 'valor' => '4316', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-07-31', 'valor' => '5537', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-08-31', 'valor' => '4950', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-09-30', 'valor' => '4557', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-10-31', 'valor' => '4210', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-11-30', 'valor' => '4229', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-12-31', 'valor' => '5423', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-01-31', 'valor' => '4659', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-02-28', 'valor' => '3070', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-03-31', 'valor' => '3916', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-04-30', 'valor' => '4189', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-05-31', 'valor' => '4301', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-06-30', 'valor' => '4630', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-07-01', 'valor' => '5815', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-08-31', 'valor' => '5462', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-09-30', 'valor' => '4460', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-10-31', 'valor' => '4196', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-11-30', 'valor' => '4175', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-12-31', 'valor' => '5434', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2016-01-31', 'valor' => '4022', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2016-02-29', 'valor' => '3301', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2016-03-31', 'valor' => '5294', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2016-04-30', 'valor' => '4905', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2016-05-31', 'valor' => '5695', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2016-06-30', 'valor' => '4579', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2016-07-31', 'valor' => '4885', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2016-08-31', 'valor' => '4369', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2016-09-30', 'valor' => '4178', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'));
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
Toda referencia sobre volumen de pasajeros se refiere a pasajeros terminales, los cuales incluyen los pasajeros de los tres tipos de aviación (comercial, charter y aviación general), y excluye los pasajeros en tránsito.Se considera a nivel metropolitano. Consulta la [Base de Datos](http://www.oma.aero/es/aeropuertos/trfico-de-pasajeros/)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadPasajerosAereosInternacionalesMensuales

?>
