<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio EconomiaBalanzaComercial
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

namespace SMIIndicadoresGomezPalacio;

/**
 * Clase EconomiaBalanzaComercial
 */
class EconomiaBalanzaComercial extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Balanza comercial. en Gómez Palacio';
        $this->fecha       = '2018-07-10T13:17:54';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-balanza-comercial';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Diferencia de exportaciones e imprtaciones, en millones de dólares.';
        $this->claves      = 'IMPLAN, Gómez Palacio, Comercio.';
        // Para el Organizador
        $this->categorias  = array('Comercio.');
        $this->fuentes     = array('Servicio de Administración Tributaria.');
        $this->regiones    = array('Gómez Palacio');
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
            array('fecha' => '2012-01-31', 'valor' => '95014523.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-02-29', 'valor' => '129000669.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-03-31', 'valor' => '92767497.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-04-30', 'valor' => '125019192.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-05-31', 'valor' => '90416374.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-06-30', 'valor' => '159852708.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-07-31', 'valor' => '186487426.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-08-31', 'valor' => '140474733.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-09-30', 'valor' => '116485991.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-10-31', 'valor' => '100908829.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-11-30', 'valor' => '114455972.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-12-31', 'valor' => '57053824.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-01-31', 'valor' => '78993347.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-02-28', 'valor' => '169261453.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-03-31', 'valor' => '120385804.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-04-30', 'valor' => '97514505.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-05-31', 'valor' => '108348407.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-06-30', 'valor' => '258956595.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-07-31', 'valor' => '177198461.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-08-31', 'valor' => '160670563.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-09-30', 'valor' => '118622754.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-10-31', 'valor' => '197466476.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-11-30', 'valor' => '183264800.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-12-31', 'valor' => '117588348.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-01-31', 'valor' => '93566871.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-02-28', 'valor' => '119008233.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-03-31', 'valor' => '92888325.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-04-30', 'valor' => '73879825.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-05-31', 'valor' => '54303391.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-06-30', 'valor' => '150017078.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-07-31', 'valor' => '106420778.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-08-31', 'valor' => '65920629.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-09-30', 'valor' => '60649420.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-10-31', 'valor' => '86258354.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-11-30', 'valor' => '60748763.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-12-31', 'valor' => '54867733.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-01-31', 'valor' => '46620025.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-02-28', 'valor' => '22594617.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-03-31', 'valor' => '36780533.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-04-30', 'valor' => '38727229.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-05-31', 'valor' => '30751979.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-06-30', 'valor' => '67627933.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-07-31', 'valor' => '57320220.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-08-31', 'valor' => '37406692.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-09-30', 'valor' => '20361099.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-10-31', 'valor' => '31534209.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-11-30', 'valor' => '40730010.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-12-31', 'valor' => '30475347.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-01-31', 'valor' => '33941574.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-02-29', 'valor' => '29958370.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-03-31', 'valor' => '38819823.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-04-30', 'valor' => '46556800.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-05-31', 'valor' => '37526067.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-06-30', 'valor' => '59424513.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-07-31', 'valor' => '57591132.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-08-31', 'valor' => '89170475.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-09-30', 'valor' => '107802411.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-10-31', 'valor' => '93002362.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-11-30', 'valor' => '38740419.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-12-31', 'valor' => '33572101.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-01-31', 'valor' => '28206163.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-02-28', 'valor' => '35531007.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-03-31', 'valor' => '47890758.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-04-30', 'valor' => '4441161.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-05-31', 'valor' => '38727874.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-06-30', 'valor' => '12491853.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-07-31', 'valor' => '189888.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-08-31', 'valor' => '5497547.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-09-30', 'valor' => '8804843.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-10-31', 'valor' => '-1156373.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-11-30', 'valor' => '2140648.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-12-31', 'valor' => '6028962.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-01-31', 'valor' => '2347212.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-02-28', 'valor' => '4822438.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-03-31', 'valor' => '6849918.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-04-30', 'valor' => '7188928.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-05-31', 'valor' => '7353002.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-06-30', 'valor' => '20406969.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-07-31', 'valor' => '-2997465.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-08-31', 'valor' => '-790252.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-09-30', 'valor' => '-770558.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-10-31', 'valor' => '3327284.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-11-30', 'valor' => '-2861783.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-12-31', 'valor' => '1572685.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-01-31', 'valor' => '-3740078.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-02-28', 'valor' => '-464679.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-03-31', 'valor' => '107046.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-04-30', 'valor' => '77197.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-05-31', 'valor' => '373045.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-06-30', 'valor' => '1565431.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-07-31', 'valor' => '369420.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-08-31', 'valor' => '123734.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-09-30', 'valor' => '4486431.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-10-31', 'valor' => '-61023.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-11-30', 'valor' => '-64262.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-12-31', 'valor' => '-22054.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-01-31', 'valor' => '71586.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-02-29', 'valor' => '500446.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-03-31', 'valor' => '95866939.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-04-30', 'valor' => '93994752.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-05-31', 'valor' => '146115477.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-06-30', 'valor' => '320779851.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.')); // formateado 0, valor 204, crudo 102
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
            'valor' => array('enca' => 'Dato', 'formato' => 'dinero'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2014-12-31', 'valor' => '4472.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2020-06-30', 'valor' => '320779851.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'));
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

} // Clase EconomiaBalanzaComercial

?>
