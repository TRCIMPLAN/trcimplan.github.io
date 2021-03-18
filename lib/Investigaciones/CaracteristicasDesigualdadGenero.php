<?php
/**
 * TrcIMPLAN Sitio Web - PoliticaIndustrial
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

namespace Investigaciones;

/**
 * Clase CaracteristicasDesigualdadGenero
 */
class CaracteristicasDesigualdadGenero extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre        = 'Características de la Desigualdad de Género en la Zona Metropolitana de La Laguna';
        $this->autor         = array('Dirección de Investigación Estratégica','Dirección de Proyectos Estratégicos');
        $this->fecha         = '2021-03-18T12:00';
        // El nombre del archivo a crear
        $this->archivo       = 'desigualdad-de-genero';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Análisis de los temas sociodemográficos y económicos con perspectiva de género; sobre empleo, educación, salud, seguridad, entre otros.';
        $this->claves        = 'IMPLAN, Torreon, sociodemografico, genero, empleo, educacion, salud, seguridad';
        // Para el Organizador
        $this->categorias    = array('Género', 'Empleo');
        $this->fuentes       = array();
        $this->regiones      = array('Torreón');
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Cargar en el Schema el archivo HTML seguido del archivo Markdown
        $this->contenido->articleBody =
            /**$this->cargar_archivo('lib/Investigaciones/CaracteristicasDesigualdadGeneroPresentacion.html').   */
            $this->cargar_archivo_markdown('lib/Investigaciones/CaracteristicasDesigualdadGenero.md');
        // Ejecutar este método en el padre
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        // Cargar archivo externo
        $this->javascript = $this->cargar_archivo('lib/Investigaciones/CaracteristicasDesigualdadGenero.js');
        // Entregar resultado del padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Código HTML para redifusión
        $this->redifusion = 'Descargue la <a href="desigualdad-de-genero/características-de-la-desigualdad-de-genero-en-la-ZML.pdf">desigualdad de género</a> como archivo PDF de 449 KB.';
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase CaracteristicasDesigualdadGenero

?>
