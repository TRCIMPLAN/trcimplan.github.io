<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon EconomiaTotalDeExportaciones
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
 * Clase EconomiaTotalDeExportaciones
 */
class EconomiaTotalDeExportaciones extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Total de exportaciones en Torreón';
        $this->fecha       = '2018-07-10T13:16:07';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-total-de-exportaciones';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Monto total de exportaciones en pesos mexicanos.';
        $this->claves      = 'IMPLAN, Torreón, Comercio.';
        // Para el Organizador
        $this->categorias  = array('Comercio.');
        $this->fuentes     = array('Servicio de Administración Tributaria.');
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
            array('fecha' => '2012-01-31', 'valor' => '103008591.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-02-29', 'valor' => '134592683.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-03-31', 'valor' => '97836398.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-04-30', 'valor' => '129860324.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-05-31', 'valor' => '95892327.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-06-30', 'valor' => '164086724.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-07-31', 'valor' => '189795189.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-08-31', 'valor' => '144997628.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-09-30', 'valor' => '119433800.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-10-31', 'valor' => '105825050.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-11-30', 'valor' => '120144681.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-12-31', 'valor' => '61929655.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-01-31', 'valor' => '78993347.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-02-28', 'valor' => '169261453.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-03-31', 'valor' => '120385804.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-04-30', 'valor' => '103247327.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-05-31', 'valor' => '115897279.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-06-30', 'valor' => '258956595.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-07-31', 'valor' => '177198461.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-08-31', 'valor' => '161554585.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-09-30', 'valor' => '118900612.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-10-31', 'valor' => '198211506.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-11-30', 'valor' => '183391439.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-12-31', 'valor' => '118038990.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-01-31', 'valor' => '93576071.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-02-28', 'valor' => '119563454.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-03-31', 'valor' => '93538127.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-04-30', 'valor' => '74202722.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-05-31', 'valor' => '55358623.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-06-30', 'valor' => '150097533.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-07-31', 'valor' => '106420778.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-08-31', 'valor' => '65920629.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-09-30', 'valor' => '60709268.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-10-31', 'valor' => '86258354.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-11-30', 'valor' => '61020102.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-12-31', 'valor' => '6131.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-12-31', 'valor' => '55345428.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-01-31', 'valor' => '46709235.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-02-28', 'valor' => '22594617.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-03-31', 'valor' => '36780533.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-04-30', 'valor' => '39764563.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-05-31', 'valor' => '30751979.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-06-30', 'valor' => '67684447.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-07-31', 'valor' => '57712108.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-08-31', 'valor' => '37612609.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-09-30', 'valor' => '20381401.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-10-31', 'valor' => '31870415.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-11-30', 'valor' => '40730010.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-12-31', 'valor' => '30475347.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-01-31', 'valor' => '33941574.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-02-29', 'valor' => '30561354.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-03-31', 'valor' => '38819823.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-04-30', 'valor' => '46556800.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-05-31', 'valor' => '37526067.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-06-30', 'valor' => '59424513.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-07-31', 'valor' => '57591132.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-08-31', 'valor' => '89170475.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-09-30', 'valor' => '107802411.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-10-31', 'valor' => '93002362.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-11-30', 'valor' => '38740419.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-12-31', 'valor' => '44625100.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-01-31', 'valor' => '28478429.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-02-28', 'valor' => '37370560.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-03-31', 'valor' => '54267140.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-04-30', 'valor' => '8118232.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-05-31', 'valor' => '39328211.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-06-30', 'valor' => '14378670.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-07-31', 'valor' => '2467705.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-08-31', 'valor' => '5840333.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-09-30', 'valor' => '9097662.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-10-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-11-30', 'valor' => '2140648.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-12-31', 'valor' => '6664637.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-01-31', 'valor' => '2347212.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-02-28', 'valor' => '10061851.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-03-31', 'valor' => '10668335.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-04-30', 'valor' => '10857534.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-05-31', 'valor' => '11818064.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-06-30', 'valor' => '20406969.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-07-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-08-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-09-30', 'valor' => '144309.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-10-31', 'valor' => '3327284.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-11-30', 'valor' => '86542.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-12-31', 'valor' => '1601622.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-01-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-02-28', 'valor' => '538423.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-03-31', 'valor' => '474596.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-04-30', 'valor' => '77197.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-05-31', 'valor' => '373045.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-06-30', 'valor' => '8362923.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-07-31', 'valor' => '700035.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-08-31', 'valor' => '165927.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-09-30', 'valor' => '13075664.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-10-31', 'valor' => '3558003.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-11-30', 'valor' => '26240.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-12-31', 'valor' => '115279.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-01-31', 'valor' => '71586.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-02-29', 'valor' => '619819.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-03-31', 'valor' => '96110122.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-04-30', 'valor' => '1465942549.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-05-31', 'valor' => '967116417.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-06-30', 'valor' => '1699811630.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.')); // formateado 0, valor 206, crudo 103
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
Fuente: SAT.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaTotalDeExportaciones

?>
