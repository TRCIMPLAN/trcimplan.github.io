<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SustentabilidadPasajerosAereosTotalesMensuales
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
 * Clase SustentabilidadPasajerosAereosTotalesMensuales
 */
class SustentabilidadPasajerosAereosTotalesMensuales extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Pasajeros Aéreos Totales Mensuales en Torreón';
        $this->fecha       = '2015-05-20T15:50:37';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-pasajeros-aereos-totales-mensuales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Flujo de pasajeros aéreos en el Aeropuerto Internacional Francisco Sarabia.';
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
            array('fecha' => '2012-01-31', 'valor' => '31198', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-02-29', 'valor' => '29353', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-03-31', 'valor' => '34010', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-04-30', 'valor' => '30685', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-05-31', 'valor' => '35988', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-07-31', 'valor' => '38722', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-08-31', 'valor' => '39255', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-09-30', 'valor' => '34182', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-10-31', 'valor' => '37614', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-11-30', 'valor' => '35856', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2012-12-31', 'valor' => '34398', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-01-31', 'valor' => '33338', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-02-28', 'valor' => '30032', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-03-31', 'valor' => '33574', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-04-30', 'valor' => '34288', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-05-31', 'valor' => '35548', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-06-30', 'valor' => '36960', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-07-31', 'valor' => '46259', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-08-31', 'valor' => '42396', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-09-30', 'valor' => '40305', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-10-31', 'valor' => '44357', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-11-30', 'valor' => '44446', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2013-12-31', 'valor' => '45895', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-01-31', 'valor' => '40735', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-02-28', 'valor' => '38383', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-03-31', 'valor' => '43883', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-04-30', 'valor' => '42197', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-05-31', 'valor' => '46761', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-06-30', 'valor' => '44214', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-07-31', 'valor' => '50483', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-08-31', 'valor' => '46847', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-09-30', 'valor' => '41393', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-10-31', 'valor' => '43946', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-11-30', 'valor' => '42264', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2014-12-31', 'valor' => '42677', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-01-31', 'valor' => '36810', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-02-28', 'valor' => '35740', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-03-31', 'valor' => '45201', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-04-30', 'valor' => '43676', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-05-31', 'valor' => '45529', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-06-30', 'valor' => '45626', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-07-31', 'valor' => '51813', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-08-31', 'valor' => '50115', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-09-30', 'valor' => '46698', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-10-31', 'valor' => '52057', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-11-30', 'valor' => '50786', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2015-12-31', 'valor' => '52398', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2016-01-31', 'valor' => '42204', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2016-02-29', 'valor' => '42939', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2016-03-30', 'valor' => '51846', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2016-04-30', 'valor' => '52300', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2016-05-30', 'valor' => '55215', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2016-06-30', 'valor' => '53902', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2016-07-31', 'valor' => '61928', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2016-08-31', 'valor' => '59501', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'),
            array('fecha' => '2016-09-30', 'valor' => '53258', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)'));
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

} // Clase SustentabilidadPasajerosAereosTotalesMensuales

?>
