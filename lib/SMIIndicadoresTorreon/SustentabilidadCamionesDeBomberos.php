<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SustentabilidadCamionesDeBomberos
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
 * Clase SustentabilidadCamionesDeBomberos
 */
class SustentabilidadCamionesDeBomberos extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Camiones de bomberos en Torreón';
        $this->fecha       = '2018-04-27T12:36:03';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-camiones-de-bomberos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Cantidad total de vehículos que poseen las estaciones de bomberos de Torreón, tanto en servicio como en reparación.';
        $this->claves      = 'IMPLAN, Torreón, Servicios públicos';
        // Para el Organizador
        $this->categorias  = array('Servicios públicos');
        $this->fuentes     = array('Bomberos de Torreón');
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
            array('fecha' => '2018-01-31', 'valor' => '34', 'fuente_nombre' => 'Bomberos de Torreón')); // formateado 0, valor 2, crudo 1
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
Bomberos de Torreón.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadCamionesDeBomberos

?>
