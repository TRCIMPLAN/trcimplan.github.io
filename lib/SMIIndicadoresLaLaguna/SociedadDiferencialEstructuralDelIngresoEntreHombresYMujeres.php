<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SociedadDiferencialEstructuralDelIngresoEntreHombresYMujeres
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

namespace SMIIndicadoresLaLaguna;

/**
 * Clase SociedadDiferencialEstructuralDelIngresoEntreHombresYMujeres
 */
class SociedadDiferencialEstructuralDelIngresoEntreHombresYMujeres extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Diferencial estructural del ingreso entre hombres y mujeres en La Laguna';
        $this->fecha       = '2019-04-09T12:27';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-diferencial-estructural-del-ingreso-entre-hombres-y-mujeres';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Diferencia en pesos entre los ingresos de hombres y mujeres en todos los niveles de salario.';
        $this->claves      = 'IMPLAN, La Laguna, Seguridad, Género, Empleo';
        // Para el Organizador
        $this->categorias  = array('Seguridad', 'Género', 'Empleo');
        $this->fuentes     = array('Diagnóstico Municipal sobre Violencia de Género contra la Mujer en Torreón (DMVGMT)');
        $this->regiones    = array('La Laguna');
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
            array('fecha' => '2018-12-31', 'valor' => '9.85', 'fuente_nombre' => 'Diagnóstico Municipal sobre Violencia de Género contra la Mujer en Torreón (DMVGMT)')); // formateado 0, valor 2, crudo 1
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
Fuente: DMVGMT
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadDiferencialEstructuralDelIngresoEntreHombresYMujeres

?>
