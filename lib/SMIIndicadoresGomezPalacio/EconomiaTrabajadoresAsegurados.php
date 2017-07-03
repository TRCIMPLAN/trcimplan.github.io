<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio EconomiaTrabajadoresAsegurados
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
 * Clase EconomiaTrabajadoresAsegurados
 */
class EconomiaTrabajadoresAsegurados extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Trabajadores Asegurados en Gómez Palacio';
        $this->fecha       = '2014-11-07T09:04:55';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-trabajadores-asegurados';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Total de trabajadores asegurados en el Instituto Mexicano del Seguro Social a nivel municipal';
        $this->claves      = 'IMPLAN, Gómez Palacio, Empleo';
        // Para el Organizador
        $this->categorias  = array('Empleo');
        $this->fuentes     = array('Instituto Mexicano del Seguro Social (IMSS)');
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
            array('fecha' => '2013-11-30', 'valor' => '72687', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2013-12-31', 'valor' => '71209', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-01-31', 'valor' => '72154', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-02-28', 'valor' => '72228', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-03-31', 'valor' => '72852', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-04-30', 'valor' => '73102', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-05-31', 'valor' => '73102', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-06-30', 'valor' => '73542', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-07-31', 'valor' => '73320', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-08-31', 'valor' => '73899', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-09-30', 'valor' => '74974', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => 'La diferencia de trabajadores asegurados entre el 31 de Diciembre de 2013 y el 30 de Septiembre de 2014, es de 3,765 trabajadores más durante el presente año.'),
            array('fecha' => '2014-10-31', 'valor' => '75410', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-11-30', 'valor' => '75673', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-12-31', 'valor' => '75458', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-01-31', 'valor' => '75552', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-02-28', 'valor' => '74991', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-03-31', 'valor' => '75673', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-04-30', 'valor' => '76556', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-05-31', 'valor' => '75489', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-06-30', 'valor' => '75526', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-07-31', 'valor' => '75788', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-08-31', 'valor' => '76240', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-09-30', 'valor' => '75868', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-10-31', 'valor' => '75622', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-11-30', 'valor' => '75613', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-12-31', 'valor' => '74514', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-01-31', 'valor' => '75077', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-02-29', 'valor' => '75898', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-03-31', 'valor' => '75262', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-04-30', 'valor' => '75604', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-05-31', 'valor' => '75643', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-06-30', 'valor' => '76248', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-07-31', 'valor' => '76152', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-08-31', 'valor' => '76340', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-09-30', 'valor' => '76824', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-10-31', 'valor' => '77803', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-11-30', 'valor' => '77966', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-12-31', 'valor' => '76569', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-01-31', 'valor' => '76953', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-02-28', 'valor' => '76309', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-03-31', 'valor' => '76145', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'));
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
Datos obtenidos de [IMSS](http://datos.imss.gob.mx/dataset)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaTrabajadoresAsegurados

?>
