<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon EconomiaTotalDeImportaciones
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
 * Clase EconomiaTotalDeImportaciones
 */
class EconomiaTotalDeImportaciones extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Total de importaciones. en Torreón';
        $this->fecha       = '2018-07-10T13:16:56';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-total-de-importaciones';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Monto total de importaciones en pesos mexicanos.';
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
            array('fecha' => '2012-01-31', 'valor' => '7994068.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-02-29', 'valor' => '5592014.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-03-31', 'valor' => '5068901.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-04-30', 'valor' => '4841132.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-05-31', 'valor' => '5475953.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-06-30', 'valor' => '4234016.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-07-31', 'valor' => '3307763.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-08-31', 'valor' => '4522895.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-09-30', 'valor' => '2947809.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-10-31', 'valor' => '4916221.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-11-30', 'valor' => '5688709.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2012-12-31', 'valor' => '4875831.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-01-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-02-28', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-03-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-04-30', 'valor' => '5732822.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-05-31', 'valor' => '7548872.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-06-30', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-07-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-08-31', 'valor' => '884022.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-09-30', 'valor' => '277858.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-10-31', 'valor' => '745030.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-11-30', 'valor' => '126639.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2013-12-31', 'valor' => '450642.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-01-31', 'valor' => '9200.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-02-28', 'valor' => '555221.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-03-31', 'valor' => '649802.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-04-30', 'valor' => '322897.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-05-31', 'valor' => '1055232.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-06-30', 'valor' => '80455.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-07-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-08-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-09-30', 'valor' => '59848.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-10-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-11-30', 'valor' => '271339.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-12-31', 'valor' => '1659.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2014-12-31', 'valor' => '477695.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-01-31', 'valor' => '89210.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-02-28', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-03-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-04-30', 'valor' => '1037334.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-05-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-06-30', 'valor' => '56514.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-07-31', 'valor' => '391888.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-08-31', 'valor' => '205917.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-09-30', 'valor' => '20302.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-10-31', 'valor' => '336206.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-11-30', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2015-12-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-01-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-02-29', 'valor' => '602984.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-03-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-04-30', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-05-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-06-30', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-07-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-08-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-09-30', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-10-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-11-30', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2016-12-31', 'valor' => '11052999.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-01-31', 'valor' => '272266.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-02-28', 'valor' => '1839553.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-03-31', 'valor' => '6376382.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-04-30', 'valor' => '3677071.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-05-31', 'valor' => '600337.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-06-30', 'valor' => '1886817.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-07-31', 'valor' => '2277817.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-08-31', 'valor' => '342786.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-09-30', 'valor' => '292819.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-10-31', 'valor' => '1156373.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-11-30', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2017-12-31', 'valor' => '635675.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-01-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-02-28', 'valor' => '5239413.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-03-31', 'valor' => '3818417.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-04-30', 'valor' => '3668606.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-05-31', 'valor' => '4465062.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-06-30', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-07-31', 'valor' => '2997465.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-08-31', 'valor' => '790252.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-09-30', 'valor' => '914867.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-10-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-11-30', 'valor' => '2948325.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2018-12-31', 'valor' => '28937.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-01-31', 'valor' => '3740078.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-02-28', 'valor' => '1003102.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-03-31', 'valor' => '367550.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-04-30', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-05-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-06-30', 'valor' => '6797492.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-07-31', 'valor' => '330615.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-08-31', 'valor' => '42193.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-09-30', 'valor' => '8589233.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-10-31', 'valor' => '3619026.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-11-30', 'valor' => '90502.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2019-12-31', 'valor' => '137333.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-01-31', 'valor' => '0.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-02-29', 'valor' => '119373.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-03-31', 'valor' => '243183.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-04-30', 'valor' => '1371947797.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-05-31', 'valor' => '821000940.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-06-30', 'valor' => '1379031779.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-07-31', 'valor' => '1072675362.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-08-31', 'valor' => '1564605288.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-09-30', 'valor' => '1526296183.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.'),
            array('fecha' => '2020-10-31', 'valor' => '1970108216.00', 'fuente_nombre' => 'Servicio de Administración Tributaria.')); // formateado 0, valor 214, crudo 107
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

} // Clase EconomiaTotalDeImportaciones

?>
