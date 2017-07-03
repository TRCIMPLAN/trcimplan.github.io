<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon EconomiaTasaDeDesempleoAbierto
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
        $this->nombre      = 'Tasa de Desempleo Abierto en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-tasa-de-desempleo-abierto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Número total de desempleados entre la Población económicamente activa.';
        $this->claves      = 'IMPLAN, Torreón, Empleo';
        // Para el Organizador
        $this->categorias  = array('Empleo');
        $this->fuentes     = array('INEGI', 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'IMCO');
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
            array('fecha' => '1990-03-12', 'valor' => '2.6600', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2000-02-14', 'valor' => '1.0400', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2005-03-31', 'valor' => '5.0445', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2005-06-30', 'valor' => '4.1096', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2005-09-30', 'valor' => '2.5037', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2005-12-31', 'valor' => '2.6700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2006-03-31', 'valor' => '5.2239', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2006-06-30', 'valor' => '4.9787', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2006-09-30', 'valor' => '7.0667', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2006-12-31', 'valor' => '5.1200', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2007-03-31', 'valor' => '6.4917', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2007-06-30', 'valor' => '3.8748', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2007-09-30', 'valor' => '5.2555', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2007-12-31', 'valor' => '6.4900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2008-03-31', 'valor' => '5.8993', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2008-06-30', 'valor' => '5.7949', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2008-09-30', 'valor' => '5.5556', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2008-12-31', 'valor' => '4.0500', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2008-12-31', 'valor' => '3.9337', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-03-31', 'valor' => '7.4100', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2009-06-30', 'valor' => '6.1200', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2009-09-30', 'valor' => '9.4700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2009-12-31', 'valor' => '6.4600', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2009-12-31', 'valor' => '6.2896', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-03-31', 'valor' => '7.5800', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2010-06-25', 'valor' => '7.4600', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2010-06-30', 'valor' => '8.6200', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2010-09-30', 'valor' => '8.5600', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2010-12-31', 'valor' => '6.6800', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2010-12-31', 'valor' => '6.8149', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-03-31', 'valor' => '4.3600', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2011-06-30', 'valor' => '5.8500', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2011-09-30', 'valor' => '6.8000', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2011-12-31', 'valor' => '5.6400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2011-12-31', 'valor' => '5.9403', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-03-31', 'valor' => '4.5300', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2012-06-30', 'valor' => '5.5000', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2012-09-30', 'valor' => '5.5600', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2012-12-31', 'valor' => '4.7600', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2012-12-31', 'valor' => '4.7797', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2013-03-31', 'valor' => '4.7000', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2013-06-30', 'valor' => '5.6500', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2013-09-30', 'valor' => '5.2700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2013-12-31', 'valor' => '4.0600', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2014-03-31', 'valor' => '5.4400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2014-06-30', 'valor' => '5.1100', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2014-09-30', 'valor' => '4.5700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2014-12-31', 'valor' => '7.0900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2015-03-31', 'valor' => '6.2700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2015-06-30', 'valor' => '6.2834', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2015-08-31', 'valor' => '5.1100', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2015-09-30', 'valor' => '6.2500', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2015-12-31', 'valor' => '4.9333', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2016-03-31', 'valor' => '5.4775', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2016-06-30', 'valor' => '5.7800', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2016-09-30', 'valor' => '5.6900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2016-12-31', 'valor' => '4.0900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2017-03-31', 'valor' => '4.2900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'));
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
