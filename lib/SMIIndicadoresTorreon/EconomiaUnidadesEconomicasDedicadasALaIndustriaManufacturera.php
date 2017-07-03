<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera
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
 * Clase EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera
 */
class EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Unidades Económicas Dedicadas a la Industria Manufacturera en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-unidades-economicas-dedicadas-a-la-industria-manufacturera';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.';
        $this->claves      = 'IMPLAN, Torreón, Empresas, Mercados';
        // Para el Organizador
        $this->categorias  = array('Empresas', 'Mercados');
        $this->fuentes     = array('INEGI');
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
            array('fecha' => '1998-12-31', 'valor' => '10.9600', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2003-12-31', 'valor' => '9.3300', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2008-12-31', 'valor' => '9.2400', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2013-10-31', 'valor' => '8.5500', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2014-12-31', 'valor' => '7.1935', 'fuente_nombre' => 'INEGI'));
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
Datos obtenidos de [INEGI. Censos económicos](http://www3.inegi.org.mx/sistemas/saic/)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera

?>
