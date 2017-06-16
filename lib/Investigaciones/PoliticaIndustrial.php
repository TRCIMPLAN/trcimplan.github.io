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
 * Clase PoliticaIndustrial
 */
class PoliticaIndustrial extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre        = 'Política Industrial';
        $this->autor         = 'Lic. Alicia Valdez Ibarra';
        $this->fecha         = '2017-05-26T12:00';
        // El nombre del archivo a crear
        $this->archivo       = 'politica-industrial';
        $this->imagen        = 'politica-industrial/imagen.jpg';
        $this->imagen_previa = 'politica-industrial/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Estudio sobre Política Industrial para Torreón, Coahuila de Zaragoza, México.';
        $this->claves        = 'IMPLAN, Torreon, Politica, Industrial';
        // Para el Organizador
        $this->categorias    = array('Empresas', 'Empleo', 'Macroeconomía');
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
            $this->cargar_archivo('lib/Investigaciones/PoliticaIndustrialPresentacion.html').
            $this->cargar_archivo_markdown('lib/Investigaciones/PoliticaIndustrial.md');
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
        $this->javascript = $this->cargar_archivo('lib/Investigaciones/PoliticaIndustrialPresentacion.js');
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
        $this->redifusion = 'Descargue la <a href="politica-industrial/presentacion-politica-industrial-2017-05-25.pdf">presentación Política Industrial</a> como archivo PDF de 7.3 MB.';
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase PoliticaIndustrial

?>
