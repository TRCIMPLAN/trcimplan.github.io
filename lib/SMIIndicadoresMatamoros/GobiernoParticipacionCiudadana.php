<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros GobiernoParticipacionCiudadana
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
 * Clase GobiernoParticipacionCiudadana
 */
class GobiernoParticipacionCiudadana extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Participación Ciudadana en Matamoros';
        $this->fecha       = '2015-07-14T14:35:57';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-participacion-ciudadana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de la lista nominal de elecciones federales. Forma parte de subíndice de "Sistema Político Estable y Funcional". Mide la población que participó en las últimas elecciones federales.';
        $this->claves      = 'IMPLAN, Matamoros, Índice de Competitividad Urbana, Participación Ciudadana';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Participación Ciudadana');
        $this->fuentes     = array('IMCO');
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
            array('fecha' => '2008-12-31', 'valor' => '49.2100', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '49.2100', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '49.2100', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '66.2900', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '66.2900', 'fuente_nombre' => 'IMCO'));
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
Para los años 2008, 2009 y 2010 se consideraron los datos de las elecciones de 2009, mientras que para los años 2011 y 2012 se tomaron datos de las elecciones de 2012. Unidades: Porcentaje de la lista nominal. Fuente: Instituto Federal Electoral (IFE), 2009 y 2012.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase GobiernoParticipacionCiudadana

?>
