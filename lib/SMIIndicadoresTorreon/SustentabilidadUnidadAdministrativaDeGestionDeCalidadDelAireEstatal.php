<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SustentabilidadUnidadAdministrativaDeGestionDeCalidadDelAireEstatal
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
 * Clase SustentabilidadUnidadAdministrativaDeGestionDeCalidadDelAireEstatal
 */
class SustentabilidadUnidadAdministrativaDeGestionDeCalidadDelAireEstatal extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Unidad administrativa de gestión de calidad del aire estatal en Torreón';
        $this->fecha       = '2018-07-26T12:34:55';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-unidad-administrativa-de-gestion-de-calidad-del-aire-estatal';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Indica la existencia y el tipo de unidad administrativa de gestión de calidad del aire estatal, donde: 0= Sin Unidad; 1=Ejecutivo; 2=Coordinación; 3=Supervisión; 4= Gerencial.';
        $this->claves      = 'IMPLAN, Torreón, Medio Ambiente';
        // Para el Organizador
        $this->categorias  = array('Medio Ambiente');
        $this->fuentes     = array('Centro Mario Molina (CMM)');
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
            array('fecha' => '2015-12-31', 'valor' => '2', 'fuente_nombre' => 'Centro Mario Molina (CMM)')); // formateado 0, valor 2, crudo 1
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
Fuente: Centro Mario Molina (CMM)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadUnidadAdministrativaDeGestionDeCalidadDelAireEstatal

?>
