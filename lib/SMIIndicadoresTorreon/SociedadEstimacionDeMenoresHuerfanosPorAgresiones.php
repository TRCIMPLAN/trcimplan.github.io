<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadEstimacionDeMenoresHuerfanosPorAgresiones
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
 * Clase SociedadEstimacionDeMenoresHuerfanosPorAgresiones
 */
class SociedadEstimacionDeMenoresHuerfanosPorAgresiones extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Estimación de Menores Huérfanos por Agresiones en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-estimacion-de-menores-huerfanos-por-agresiones';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Menores de edad que han perdido a padre o madre a causa de agresión (homicidio).';
        $this->claves      = 'IMPLAN, Torreón, Grupos Vulnerables, Delincuencia';
        // Para el Organizador
        $this->categorias  = array('Grupos Vulnerables', 'Delincuencia');
        $this->fuentes     = array('IMPLAN');
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
            array('fecha' => '2008-12-31', 'valor' => '544', 'fuente_nombre' => 'IMPLAN'),
            array('fecha' => '2009-12-31', 'valor' => '597', 'fuente_nombre' => 'IMPLAN'),
            array('fecha' => '2010-12-31', 'valor' => '753', 'fuente_nombre' => 'IMPLAN'),
            array('fecha' => '2011-12-31', 'valor' => '858', 'fuente_nombre' => 'IMPLAN'),
            array('fecha' => '2012-12-31', 'valor' => '1253', 'fuente_nombre' => 'IMPLAN')); // formateado 0, valor 10, crudo 5
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
Elaboración propia en base a las defunciones registradas en [SINAIS](http://www.sinais.salud.gob.mx)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadEstimacionDeMenoresHuerfanosPorAgresiones

?>
