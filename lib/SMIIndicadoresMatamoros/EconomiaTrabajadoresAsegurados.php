<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros EconomiaTrabajadoresAsegurados
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

namespace SMIIndicadoresMatamoros;

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
        $this->nombre      = 'Trabajadores Asegurados en Matamoros';
        $this->fecha       = '2014-11-07T09:04:55';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-trabajadores-asegurados';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Total de trabajadores asegurados en el Instituto Mexicano del Seguro Social a nivel municipal';
        $this->claves      = 'IMPLAN, Matamoros, Empleo';
        // Para el Organizador
        $this->categorias  = array('Empleo');
        $this->fuentes     = array('Instituto Mexicano del Seguro Social (IMSS)');
        $this->regiones    = array('Matamoros');
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
            array('fecha' => '2013-11-30', 'valor' => '7638', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2013-12-31', 'valor' => '6798', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-01-31', 'valor' => '7000', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-02-28', 'valor' => '7024', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-03-31', 'valor' => '7060', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-04-30', 'valor' => '7118', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-05-31', 'valor' => '7176', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-06-30', 'valor' => '7363', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-07-31', 'valor' => '7542', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-08-31', 'valor' => '7875', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-09-30', 'valor' => '7763', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => 'La diferencia de trabajadores asegurados entre el 31 de Diciembre de 2013 y el 30 de Septiembre de 2014, es de 965 trabajadores más durante el presente año.'),
            array('fecha' => '2014-10-31', 'valor' => '7698', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-11-30', 'valor' => '7630', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-12-31', 'valor' => '7474', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-01-31', 'valor' => '7477', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-02-28', 'valor' => '7547', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-03-31', 'valor' => '7559', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-04-30', 'valor' => '7652', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-05-31', 'valor' => '7779', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-06-30', 'valor' => '8032', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-07-31', 'valor' => '8042', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-08-31', 'valor' => '8060', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-09-30', 'valor' => '7993', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-10-31', 'valor' => '8084', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-11-30', 'valor' => '8084', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-12-31', 'valor' => '7860', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-01-31', 'valor' => '7852', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-02-29', 'valor' => '8025', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-03-31', 'valor' => '8243', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-04-30', 'valor' => '8387', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-05-31', 'valor' => '8286', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-06-30', 'valor' => '8557', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-07-31', 'valor' => '8551', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-08-31', 'valor' => '8773', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-09-30', 'valor' => '8669', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-10-31', 'valor' => '8323', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-11-30', 'valor' => '8419', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-12-31', 'valor' => '8024', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-01-31', 'valor' => '7995', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-02-28', 'valor' => '8249', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-03-31', 'valor' => '8415', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'));
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
