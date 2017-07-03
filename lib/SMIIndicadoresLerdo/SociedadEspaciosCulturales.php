<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo SociedadEspaciosCulturales
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
 * Clase SociedadEspaciosCulturales
 */
class SociedadEspaciosCulturales extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Espacios Culturales en Lerdo';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-espacios-culturales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Espacios culturales físicamente delimitados.';
        $this->claves      = 'IMPLAN, Lerdo, Educación, Cultura';
        // Para el Organizador
        $this->categorias  = array('Educación', 'Cultura');
        $this->fuentes     = array('CONACULTA-IMPLAN');
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
            array('fecha' => '2014-03-31', 'valor' => '13', 'fuente_nombre' => 'CONACULTA-IMPLAN'));
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
Se realizó un filtrado básico de la totalidad de los espacios culturales considerados por CONACULTA, ya que ellos consideran programas, fondos y proyectos a sus estadísticas totales, así como eventos que fueron realizados en una ocasión y datan de hace más de 5 años. Consulta la [Base de Datos completa](http://www.sic.gob.mx)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadEspaciosCulturales

?>
