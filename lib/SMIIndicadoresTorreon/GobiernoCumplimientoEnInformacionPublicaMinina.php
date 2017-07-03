<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon GobiernoCumplimientoEnInformacionPublicaMinina
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
 * Clase GobiernoCumplimientoEnInformacionPublicaMinina
 */
class GobiernoCumplimientoEnInformacionPublicaMinina extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Cumplimiento en Información Pública Mínina en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-cumplimiento-en-informacion-publica-minina';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Cumplimiento sobre total de obligaciones.';
        $this->claves      = 'IMPLAN, Torreón, Transparencia';
        // Para el Organizador
        $this->categorias  = array('Transparencia');
        $this->fuentes     = array('ICAI-IDAIP');
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
            array('fecha' => '2014-03-03', 'valor' => '100.0000', 'fuente_nombre' => 'ICAI-IDAIP'),
            array('fecha' => '2014-06-30', 'valor' => '98.7200', 'fuente_nombre' => 'ICAI-IDAIP'),
            array('fecha' => '2014-09-30', 'valor' => '96.0000', 'fuente_nombre' => 'ICAI-IDAIP'),
            array('fecha' => '2014-10-31', 'valor' => '72.0000', 'fuente_nombre' => 'ICAI-IDAIP'),
            array('fecha' => '2014-11-30', 'valor' => '83.0000', 'fuente_nombre' => 'ICAI-IDAIP'),
            array('fecha' => '2014-12-31', 'valor' => '82.6700', 'fuente_nombre' => 'ICAI-IDAIP'),
            array('fecha' => '2015-01-31', 'valor' => '82.6700', 'fuente_nombre' => 'ICAI-IDAIP'),
            array('fecha' => '2015-02-28', 'valor' => '89.3300', 'fuente_nombre' => 'ICAI-IDAIP'),
            array('fecha' => '2015-03-31', 'valor' => '89.3300', 'fuente_nombre' => 'ICAI-IDAIP'));
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

} // Clase GobiernoCumplimientoEnInformacionPublicaMinina

?>
