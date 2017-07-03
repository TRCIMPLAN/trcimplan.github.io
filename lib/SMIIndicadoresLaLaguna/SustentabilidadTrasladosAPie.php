<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SustentabilidadTrasladosAPie
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
 * Clase SustentabilidadTrasladosAPie
 */
class SustentabilidadTrasladosAPie extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Traslados a Pie en La Laguna';
        $this->fecha       = '2014-11-10T10:29:50';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-traslados-a-pie';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Distribución porcentual del total de viajes cotidianos realizados por modalidad.';
        $this->claves      = 'IMPLAN, La Laguna, Movilidad, Vialidad';
        // Para el Organizador
        $this->categorias  = array('Movilidad', 'Vialidad');
        $this->fuentes     = array('Logit');
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
            array('fecha' => '2011-12-31', 'valor' => '19.0000', 'fuente_nombre' => 'Logit', 'notas' => 'Viajes completos realizados a pie. No incluyen los viajes para tomar el transporte público.'));
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
Estudio realizado por Logit en 2011. Contempla los viajes de los municipios de Torreón y Matamoros.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadTrasladosAPie

?>
