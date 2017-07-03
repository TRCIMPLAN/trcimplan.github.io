<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon EconomiaNuevasEmpresas
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
 * Clase EconomiaNuevasEmpresas
 */
class EconomiaNuevasEmpresas extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Nuevas Empresas en Torreón';
        $this->fecha       = '2015-02-09T08:43:29';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-nuevas-empresas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Número de nuevas empresas registradas en ventanilla universal en el periodo señalado.';
        $this->claves      = 'IMPLAN, Torreón, Empresas';
        // Para el Organizador
        $this->categorias  = array('Empresas');
        $this->fuentes     = array('Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón');
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
            array('fecha' => '2009-01-31', 'valor' => '71', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2009-02-28', 'valor' => '77', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2009-03-31', 'valor' => '95', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2009-04-30', 'valor' => '66', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2009-05-31', 'valor' => '60', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2009-06-30', 'valor' => '99', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2009-07-31', 'valor' => '93', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2009-08-31', 'valor' => '93', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2009-09-30', 'valor' => '139', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2009-10-31', 'valor' => '87', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2009-11-30', 'valor' => '73', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2009-12-31', 'valor' => '25', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2010-01-31', 'valor' => '58', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2010-02-28', 'valor' => '137', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2010-03-31', 'valor' => '144', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2010-04-30', 'valor' => '126', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2010-05-31', 'valor' => '111', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2010-06-30', 'valor' => '77', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2010-07-31', 'valor' => '91', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2010-08-31', 'valor' => '113', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2010-09-30', 'valor' => '77', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2010-10-31', 'valor' => '86', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2010-11-30', 'valor' => '73', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2010-12-31', 'valor' => '52', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2011-01-31', 'valor' => '88', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2011-02-28', 'valor' => '152', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2011-03-31', 'valor' => '127', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2011-04-30', 'valor' => '98', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2011-05-31', 'valor' => '128', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2011-06-30', 'valor' => '136', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2011-07-31', 'valor' => '85', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2011-08-31', 'valor' => '108', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2011-09-30', 'valor' => '129', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2011-10-31', 'valor' => '188', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2011-11-30', 'valor' => '165', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2011-12-31', 'valor' => '90', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2012-01-31', 'valor' => '89', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2012-02-29', 'valor' => '135', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2012-03-31', 'valor' => '206', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2012-04-30', 'valor' => '187', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2012-05-31', 'valor' => '182', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2012-06-30', 'valor' => '161', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2012-07-31', 'valor' => '122', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2012-08-31', 'valor' => '96', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2012-09-30', 'valor' => '74', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2012-10-31', 'valor' => '113', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2012-11-30', 'valor' => '99', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2012-12-31', 'valor' => '36', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2013-01-31', 'valor' => '71', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2013-02-28', 'valor' => '117', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2013-03-31', 'valor' => '121', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2013-04-30', 'valor' => '122', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2013-05-31', 'valor' => '147', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2013-06-30', 'valor' => '112', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2013-07-31', 'valor' => '121', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2013-08-31', 'valor' => '146', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2013-09-30', 'valor' => '165', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2013-10-31', 'valor' => '132', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2013-11-30', 'valor' => '92', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2013-12-31', 'valor' => '37', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2014-01-31', 'valor' => '53', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2014-02-28', 'valor' => '101', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2014-03-31', 'valor' => '112', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2014-04-30', 'valor' => '98', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2014-05-31', 'valor' => '121', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2014-06-30', 'valor' => '94', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2014-07-31', 'valor' => '327', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2014-08-31', 'valor' => '362', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2014-09-30', 'valor' => '334', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2014-10-31', 'valor' => '297', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2014-11-30', 'valor' => '230', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2014-12-31', 'valor' => '102', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2015-01-31', 'valor' => '123', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2015-02-28', 'valor' => '152', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2015-03-31', 'valor' => '269', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2015-04-30', 'valor' => '203', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2015-05-31', 'valor' => '196', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2015-06-30', 'valor' => '204', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2015-07-31', 'valor' => '252', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2015-08-31', 'valor' => '204', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2015-09-30', 'valor' => '218', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2015-10-31', 'valor' => '234', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2015-11-30', 'valor' => '184', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2015-12-31', 'valor' => '84', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2016-01-31', 'valor' => '127', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2016-02-29', 'valor' => '223', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2016-03-31', 'valor' => '210', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2016-04-30', 'valor' => '233', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2016-05-31', 'valor' => '221', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2016-06-30', 'valor' => '208', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2016-07-31', 'valor' => '166', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2016-08-31', 'valor' => '183', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'),
            array('fecha' => '2016-09-30', 'valor' => '165', 'fuente_nombre' => 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón'));
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
        return NULL;
    } // observaciones

} // Clase EconomiaNuevasEmpresas

?>
