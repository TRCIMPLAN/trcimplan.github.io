<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros SustentabilidadPoblacionQueTrabajaEnOtroMunicipio
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
 * Clase SustentabilidadPoblacionQueTrabajaEnOtroMunicipio
 */
class SustentabilidadPoblacionQueTrabajaEnOtroMunicipio extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Población que Trabaja en OTRO Municipio en Matamoros';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-poblacion-que-trabaja-en-otro-municipio';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de la población que trabaja en un municipio diferente al que reside dentro de la Zona Metropolitana de La Laguna.';
        $this->claves      = 'IMPLAN, Matamoros, Movilidad';
        // Para el Organizador
        $this->categorias  = array('Movilidad');
        $this->fuentes     = array('CONAPO-INEGI');
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
            array('fecha' => '2010-12-31', 'valor' => '20.0000', 'fuente_nombre' => 'CONAPO-INEGI'),
            array('fecha' => '2015-12-31', 'valor' => '30.3000', 'fuente_nombre' => 'CONAPO-INEGI'));
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
Para los datos de 2010 consulta la [Base de Datos](http://www.conapo.gob.mx/en/CONAPO/Catalogo_Sistema_Urbano_Nacional_2012). Para la fuente 2015 consulta la [Base de Datos](http://www3.inegi.org.mx/sistemas/microdatos/formato.aspx?c=34537)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadPoblacionQueTrabajaEnOtroMunicipio

?>
