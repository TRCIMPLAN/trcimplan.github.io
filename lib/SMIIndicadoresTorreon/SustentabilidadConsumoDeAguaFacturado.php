<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SustentabilidadConsumoDeAguaFacturado
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
 * Clase SustentabilidadConsumoDeAguaFacturado
 */
class SustentabilidadConsumoDeAguaFacturado extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Consumo de Agua Facturado en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-consumo-de-agua-facturado';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Consumo anual de agua por persona expresado en metros cúbicos.';
        $this->claves      = 'IMPLAN, Torreón, Recursos Naturales, Objetivos del Milenio';
        // Para el Organizador
        $this->categorias  = array('Recursos Naturales', 'Objetivos del Milenio');
        $this->fuentes     = array('SIMAS');
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
            array('fecha' => '2010-12-31', 'valor' => '47.7700', 'fuente_nombre' => 'SIMAS', 'notas' => 'Consumo anual'),
            array('fecha' => '2011-12-31', 'valor' => '46.7500', 'fuente_nombre' => 'SIMAS', 'notas' => 'Consumo anual'),
            array('fecha' => '2012-12-31', 'valor' => '44.5700', 'fuente_nombre' => 'SIMAS', 'notas' => 'Consumo anual'),
            array('fecha' => '2013-12-31', 'valor' => '41.9900', 'fuente_nombre' => 'SIMAS', 'notas' => 'Consumo anual'),
            array('fecha' => '2015-12-31', 'valor' => '41.2000', 'fuente_nombre' => 'SIMAS', 'notas' => 'Consumo anual. Consulta la Base de Datos en http://datostrc.gob.mx/datasets/ver/33190.'));
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
Total facturado dividido entre la población.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadConsumoDeAguaFacturado

?>
