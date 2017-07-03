<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadIndiceDeMarginacion
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
 * Clase SociedadIndiceDeMarginacion
 */
class SociedadIndiceDeMarginacion extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Índice de Marginación en Torreón';
        $this->fecha       = '2016-06-10T13:47';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-indice-de-marginacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Indicador compuesto por los siguientes datos: 
Porcentaje de población de 15 años o más analfabeta 
Porcentaje de población de 15 años o más sin primaria completa 
Porcentaje de ocupantes en viviendas sin drenaje ni excusado
Porcentaje de ocupantes en viviendas sin energía eléctrica
Porcentaje de ocupantes en viviendas sin agua entubada
Porcentaje de viviendas con algún nivel de hacinamiento
Porcentaje de ocupantes en viviendas con piso de tierra
Porcentaje de población en localidades con menos de 5 000 habitantes
Porcentaje de población ocupada con ingresos de hasta 2 salarios mínimos';
        $this->claves      = 'IMPLAN, Torreón, Bienestar, Grupos Vulnerables';
        // Para el Organizador
        $this->categorias  = array('Bienestar', 'Grupos Vulnerables');
        $this->fuentes     = array('CONAPO');
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
            array('fecha' => '1990-12-31', 'valor' => '-1.9980', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '1995-12-31', 'valor' => '-1.7440', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2000-12-31', 'valor' => '-1.9830', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2005-12-31', 'valor' => '-1.8930', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2015-12-31', 'valor' => '-1.7220', 'fuente_nombre' => 'CONAPO'));
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
            'valor' => array('enca' => 'Dato', 'formato' => 'decimal'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2015-12-31', 'valor' => '-1.7220', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2015-12-31', 'valor' => '-1.4880', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2015-12-31', 'valor' => '-1.2150', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2015-12-31', 'valor' => '-1.0980', 'fuente_nombre' => 'CONAPO'));
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
Menos es menor grado de marginación
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadIndiceDeMarginacion

?>
