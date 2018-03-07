<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadNivelDosDeLenguajeYComunicacionDePlanea
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
 * Clase SociedadNivelDosDeLenguajeYComunicacionDePlanea
 */
class SociedadNivelDosDeLenguajeYComunicacionDePlanea extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Nivel dos de Lenguaje y Comunicación de PLANEA en Torreón';
        $this->fecha       = '2018-02-06T14:48:11';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-nivel-dos-de-lenguaje-y-comunicacion-de-planea';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de alumnos que pasaron el nivel 2 de PLANEA 2017. 
Nivel 2: Identifican las ideas principales que sustentan la propuesta de un artículo de opinión breve,
discriminan y relacionan información oportuna y confiable, y la organizan a partir de un propósito.';
        $this->claves      = 'IMPLAN, Torreón, Educación';
        // Para el Organizador
        $this->categorias  = array('Educación');
        $this->fuentes     = array('SEP');
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
            array('fecha' => '2017-12-31', 'valor' => '26.3200', 'fuente_nombre' => 'SEP')); // formateado 0, valor 2, crudo 1
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
            'valor' => array('enca' => 'Dato', 'formato' => 'porcentaje'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2017-12-31', 'valor' => '26.3200', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2017-12-31', 'valor' => '28.3700', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2017-12-31', 'valor' => '20.6000', 'fuente_nombre' => 'SEP'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2017-12-31', 'valor' => '30.6800', 'fuente_nombre' => 'SEP'));
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
Datos tomados de la [Prueba PLANEA 2017]("http://planea.sep.gob.mx/ms/base_de_datos_2017").
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadNivelDosDeLenguajeYComunicacionDePlanea

?>
