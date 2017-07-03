<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo SustentabilidadAccesoAVialidadesPavimentadas
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

namespace SMIIndicadoresLerdo;

/**
 * Clase SustentabilidadAccesoAVialidadesPavimentadas
 */
class SustentabilidadAccesoAVialidadesPavimentadas extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Acceso a Vialidades Pavimentadas en Lerdo';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-acceso-a-vialidades-pavimentadas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de manzanas que cuentan con acceso a vialidades pavimentadas.';
        $this->claves      = 'IMPLAN, Lerdo, Movilidad, Vialidad, Infraestructura';
        // Para el Organizador
        $this->categorias  = array('Movilidad', 'Vialidad', 'Infraestructura');
        $this->fuentes     = array('IMPLAN');
        $this->regiones    = array('Lerdo');
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
            array('fecha' => '2010-12-31', 'valor' => '72.0000', 'fuente_nombre' => 'IMPLAN'),
            array('fecha' => '2014-12-31', 'valor' => '74.0000', 'fuente_nombre' => 'IMPLAN'));
    } // datos

    /**
     * Otras Regiones Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones_estructura() {
        return array(
            'region_nombre' => array('enca' => 'Región', 'formato' => 'texto'),
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'porcentaje'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto'));
    } // otras_regiones_estructura

    /**
     * Otras regiones
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2014-12-31', 'valor' => '94.0000', 'fuente_nombre' => 'IMPLAN'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2014-12-31', 'valor' => '91.0000', 'fuente_nombre' => 'IMPLAN'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2014-12-31', 'valor' => '74.0000', 'fuente_nombre' => 'IMPLAN'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2014-12-31', 'valor' => '74.0000', 'fuente_nombre' => 'IMPLAN'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2014-12-31', 'valor' => '89.0000', 'fuente_nombre' => 'IMPLAN'));
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
Censo de Población y Vivienda 2010. Consulta las [Bases de Datos](http://www.inegi.org.mx/est/contenidos/proyectos/ccpv/cpv2010/tabulados_urbano.aspx)
Encuesta Intercensal 2015. Consulta la [Base de Datos](http://www.inegi.org.mx/est/contenidos/proyectos/encuestas/hogares/especiales/ei2015/default.aspx)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadAccesoAVialidadesPavimentadas

?>
