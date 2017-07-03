<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros EconomiaTasaDeDesempleoAbierto
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
 * Clase EconomiaTasaDeDesempleoAbierto
 */
class EconomiaTasaDeDesempleoAbierto extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Tasa de Desempleo Abierto en Matamoros';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-tasa-de-desempleo-abierto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Número total de desempleados entre la Población económicamente activa.';
        $this->claves      = 'IMPLAN, Matamoros, Empleo';
        // Para el Organizador
        $this->categorias  = array('Empleo');
        $this->fuentes     = array('INEGI', 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'IMCO');
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
            array('fecha' => '1990-03-12', 'valor' => '3.3200', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2000-02-14', 'valor' => '1.1800', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2005-03-31', 'valor' => '6.0606', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2005-06-30', 'valor' => '1.5873', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2005-09-30', 'valor' => '2.1277', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2005-12-31', 'valor' => '2.6490', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2006-03-31', 'valor' => '3.0675', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2006-06-30', 'valor' => '2.2727', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2006-09-30', 'valor' => '3.0864', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2006-12-30', 'valor' => '1.9737', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2007-03-31', 'valor' => '5.2980', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2007-06-30', 'valor' => '5.8442', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2007-09-30', 'valor' => '2.6846', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2007-12-31', 'valor' => '1.2579', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2008-03-31', 'valor' => '3.9216', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2008-06-30', 'valor' => '1.2048', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2008-09-30', 'valor' => '3.8961', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2008-12-31', 'valor' => '6.9049', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2008-12-31', 'valor' => '6.5789', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2009-03-31', 'valor' => '7.5342', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2009-06-30', 'valor' => '8.0645', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2009-09-30', 'valor' => '9.0226', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2009-12-31', 'valor' => '7.3692', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '9.0226', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2010-03-31', 'valor' => '11.7647', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2010-06-25', 'valor' => '6.0700', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2010-06-30', 'valor' => '5.2980', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2010-09-30', 'valor' => '5.6410', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2010-12-31', 'valor' => '8.2500', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '8.5227', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2011-03-31', 'valor' => '8.4700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2011-06-30', 'valor' => '6.5700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2011-09-30', 'valor' => '6.3800', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2011-12-31', 'valor' => '7.5821', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '7.4500', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2012-03-31', 'valor' => '9.1400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2012-06-30', 'valor' => '4.6400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2012-09-30', 'valor' => '6.2800', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2012-12-31', 'valor' => '6.1880', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '7.6900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2013-03-31', 'valor' => '9.8400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2013-06-30', 'valor' => '13.7900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2013-09-30', 'valor' => '9.0200', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2013-12-31', 'valor' => '5.3400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2014-03-31', 'valor' => '6.9000', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2014-06-30', 'valor' => '3.8100', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2014-09-30', 'valor' => '5.3100', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2014-12-31', 'valor' => '7.1400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2015-03-31', 'valor' => '3.1300', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2015-06-30', 'valor' => '2.9851', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2015-08-31', 'valor' => '3.6100', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2015-09-30', 'valor' => '2.8169', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2015-12-31', 'valor' => '3.7383', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2016-03-31', 'valor' => '1.9048', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2016-06-30', 'valor' => '4.0900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2016-09-30', 'valor' => '2.1700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2016-12-31', 'valor' => '5.7300', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2017-03-31', 'valor' => '5.6700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'));
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
Media nacional del indicador:

- 2010 = 3.72
- 2010 = 0.98%
- 1990 = 2.32%

Datos obtenidos de [INEGI. Censos de población y vivienda](http://www.inegi.org.mx/sistemas/consulta_resultados/iter2010.aspx?c=27329&s=est)

Media Nacional 2014:
1er. Trimestre: 4.80 %
2do. Trimestre: 4.90 %
3er. Trimestre: 5.20 %
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaTasaDeDesempleoAbierto

?>
