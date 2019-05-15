<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo SociedadPoblacionConIngresosInferioresALaLineaDeBienestarMinimo
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

namespace SMIIndicadoresLerdo;

/**
 * Clase SociedadPoblacionConIngresosInferioresALaLineaDeBienestarMinimo
 */
class SociedadPoblacionConIngresosInferioresALaLineaDeBienestarMinimo extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Población con ingresos inferiores a la línea de bienestar mínimo en Lerdo';
        $this->fecha       = '2019-05-02T11:58:30';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-poblacion-con-ingresos-inferiores-a-la-linea-de-bienestar-minimo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de personas que perciben ingresos menores a lo que se considera como bienestar mínimo';
        $this->claves      = 'IMPLAN, Lerdo, Bienestar, Grupos Vulnerables';
        // Para el Organizador
        $this->categorias  = array('Bienestar', 'Grupos Vulnerables');
        $this->fuentes     = array('CONEVAL');
        $this->regiones    = array('Lerdo');
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
            array('fecha' => '2015-12-31', 'valor' => '11.4000', 'fuente_nombre' => 'CONEVAL', 'notas' => 'La línea de bienestar mínimo para diciembre de 2015 es de $1,315.06 por persona al mes en el medio urbano')); // formateado 0, valor 2, crudo 2
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
            array('region_nombre' => 'Torreón', 'fecha' => '2015-12-31', 'valor' => '10.9000', 'fuente_nombre' => 'CONEVAL', 'notas' => 'La línea de bienestar mínimo para diciembre de 2015 es de $1,315.06 por persona al mes en el medio urbano'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2015-12-31', 'valor' => '8.8000', 'fuente_nombre' => 'CONEVAL', 'notas' => 'La línea de bienestar mínimo para diciembre de 2015 es de $1,315.06 por persona al mes en el medio urbano'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2015-12-31', 'valor' => '11.4000', 'fuente_nombre' => 'CONEVAL', 'notas' => 'La línea de bienestar mínimo para diciembre de 2015 es de $1,315.06 por persona al mes en el medio urbano'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2015-12-31', 'valor' => '17.5000', 'fuente_nombre' => 'CONEVAL', 'notas' => 'La línea de bienestar mínimo para diciembre de 2015 es de $1,315.06 por persona al mes en el medio urbano'));
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
Fuente: CONEVAL
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadPoblacionConIngresosInferioresALaLineaDeBienestarMinimo

?>
