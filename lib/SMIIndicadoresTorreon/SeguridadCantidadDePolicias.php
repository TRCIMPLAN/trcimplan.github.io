<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SeguridadCantidadDePolicias
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
 * Clase SeguridadCantidadDePolicias
 */
class SeguridadCantidadDePolicias extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Cantidad de Policías en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-cantidad-de-policias';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Cantidad total de policías en el municipio.';
        $this->claves      = 'IMPLAN, Torreón, Seguridad';
        // Para el Organizador
        $this->categorias  = array('Seguridad');
        $this->fuentes     = array('Ayuntamiento de Torreón, Portal de Transparencia');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'texto'),
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
            array('fecha' => '2014-01-31', 'valor' => 'No disponible', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2014-02-28', 'valor' => 'No disponible', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2014-03-31', 'valor' => 'No disponible', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2014-04-30', 'valor' => 'No disponible', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2014-05-31', 'valor' => 'No disponible', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2014-06-30', 'valor' => 'No disponible', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2014-07-31', 'valor' => 'No disponible', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2014-08-31', 'valor' => 'No disponible', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2014-09-30', 'valor' => 'No disponible', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2014-10-31', 'valor' => '664', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2014-11-30', 'valor' => '668', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2014-12-31', 'valor' => '750', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2015-01-31', 'valor' => '704', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2015-02-28', 'valor' => '700', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2015-03-31', 'valor' => '674', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2015-04-30', 'valor' => '712', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2015-05-31', 'valor' => '704', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2015-06-30', 'valor' => '700', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2015-07-31', 'valor' => '700', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2015-08-31', 'valor' => '695', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2015-09-30', 'valor' => '706', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2015-10-31', 'valor' => '704', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2015-11-30', 'valor' => '708', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2015-12-31', 'valor' => '708', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2016-01-31', 'valor' => '700', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2016-02-29', 'valor' => '695', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2016-03-31', 'valor' => '701', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2016-04-30', 'valor' => '700', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2016-05-31', 'valor' => '710', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2016-06-30', 'valor' => '691', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2016-07-31', 'valor' => '700', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2016-08-31', 'valor' => '700', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2016-09-30', 'valor' => '700', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2016-10-31', 'valor' => 'No disponible', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2016-11-30', 'valor' => 'No disponible', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2016-12-31', 'valor' => 'No disponible', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2017-01-31', 'valor' => 'No disponible', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2017-02-28', 'valor' => 'No disponible', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2017-03-31', 'valor' => 'No disponible', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2017-04-30', 'valor' => 'No disponible', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2017-05-31', 'valor' => 'No disponible', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2017-06-30', 'valor' => 'No disponible', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2017-07-31', 'valor' => 'No disponible', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2017-08-31', 'valor' => 'No disponible', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia'),
            array('fecha' => '2017-09-30', 'valor' => 'No disponible', 'fuente_nombre' => 'Ayuntamiento de Torreón, Portal de Transparencia')); // formateado 21, valor 69, crudo 45
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
Fuente: [Portal de Transparencia](http://www.torreon.gob.mx/transparencia) - [Índice de Seguridad Pública](http://www.torreon.gob.mx/transparencia/info.cfm?e=53&t=19). Cuando el archivo **NO** tiene el dato "Policía Preventiva / Estado de Fuerza / Elementos" el dato es "No disponible".
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SeguridadCantidadDePolicias

?>
