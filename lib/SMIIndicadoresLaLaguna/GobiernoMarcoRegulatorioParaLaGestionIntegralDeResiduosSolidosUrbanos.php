<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna GobiernoMarcoRegulatorioParaLaGestionIntegralDeResiduosSolidosUrbanos
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
 * Clase GobiernoMarcoRegulatorioParaLaGestionIntegralDeResiduosSolidosUrbanos
 */
class GobiernoMarcoRegulatorioParaLaGestionIntegralDeResiduosSolidosUrbanos extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Marco regulatorio para la gestión integral de residuos sólidos urbanos en La Laguna';
        $this->fecha       = '2019-02-08T12:55:53';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-marco-regulatorio-para-la-gestion-integral-de-residuos-solidos-urbanos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Revisa en puntos de 0 a 15 donde más es mejor, que los instrumentos legales municipales relacionados a la gestión de los RSU incorporen los trece principios estipulados en la Ley General para la Prevención y Gestión Integral de los Residuos (LGPGIR)';
        $this->claves      = 'IMPLAN, La Laguna, Gobierno';
        // Para el Organizador
        $this->categorias  = array('Gobierno');
        $this->fuentes     = array('IMCO');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'decimal'),
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
            array('fecha' => '2015-12-31', 'valor' => '2.5000', 'fuente_nombre' => 'IMCO')); // formateado 0, valor 2, crudo 1
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

} // Clase GobiernoMarcoRegulatorioParaLaGestionIntegralDeResiduosSolidosUrbanos

?>
