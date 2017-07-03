<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros SeguridadPersonasInvolucradasEnDelitosDelFueroFederal
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

namespace SMIIndicadoresMatamoros;

/**
 * Clase SeguridadPersonasInvolucradasEnDelitosDelFueroFederal
 */
class SeguridadPersonasInvolucradasEnDelitosDelFueroFederal extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Personas Involucradas en Delitos del Fuero Federal en Matamoros';
        $this->fecha       = '2015-04-29T15:10:39';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-personas-involucradas-en-delitos-del-fuero-federal';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = '';
        $this->claves      = 'IMPLAN, Matamoros, Seguridad, Delincuencia';
        // Para el Organizador
        $this->categorias  = array('Seguridad', 'Delincuencia');
        $this->fuentes     = array('INEGI');
        $this->regiones    = array('Matamoros');
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
            array('fecha' => '2012-12-31', 'valor' => '78', 'fuente_nombre' => 'INEGI', 'notas' => 'Fuente: [INEGI](http://www.inegi.org.mx/est/lista_cubos/consulta.aspx?p=gob&c=5)'));
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
Fuente: [INEGI](http://www.inegi.org.mx/est/lista_cubos/consulta.aspx?p=gob&c=5)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SeguridadPersonasInvolucradasEnDelitosDelFueroFederal

?>
