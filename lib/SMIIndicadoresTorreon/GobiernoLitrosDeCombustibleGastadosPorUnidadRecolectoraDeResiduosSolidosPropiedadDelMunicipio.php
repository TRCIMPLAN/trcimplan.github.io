<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon GobiernoLitrosDeCombustibleGastadosPorUnidadRecolectoraDeResiduosSolidosPropiedadDelMunicipio
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
 * Clase GobiernoLitrosDeCombustibleGastadosPorUnidadRecolectoraDeResiduosSolidosPropiedadDelMunicipio
 */
class GobiernoLitrosDeCombustibleGastadosPorUnidadRecolectoraDeResiduosSolidosPropiedadDelMunicipio extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Litros de Combustible Gastados por Unidad Recolectora de Residuos Sólidos Propiedad del Municipio en Torreón';
        $this->fecha       = '2015-07-14T18:44:49';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-litros-de-combustible-gastados-por-unidad-recolectora-de-residuos-solidos-propiedad-del-municipio';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Determina la relación de litros de combustible gastados por unidad recolectora de residuos sólidos del municipio.';
        $this->claves      = 'IMPLAN, Torreón, Sistema de Indicadores de Desempeño (SINDES), Recursos Naturales, Finanzas Públicas';
        // Para el Organizador
        $this->categorias  = array('Sistema de Indicadores de Desempeño (SINDES)', 'Recursos Naturales', 'Finanzas Públicas');
        $this->fuentes     = array('Ayuntamiento de Torreón');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'dinero'),
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
            array('fecha' => '2014-06-30', 'valor' => '21430.36', 'fuente_nombre' => 'Ayuntamiento de Torreón'));
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
Sistema de Indicadores de Desempeño (SINDES) con metodología de la Asociación de Administración de ciudades y condados (ICMA) http://www.icmaml.org/sindes/
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase GobiernoLitrosDeCombustibleGastadosPorUnidadRecolectoraDeResiduosSolidosPropiedadDelMunicipio

?>
