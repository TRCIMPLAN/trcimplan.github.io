<?php
/**
 * TrcIMPLAN Sitio Web - SectorAutomotriz
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
 * Clase SectorAutomotriz
 */
class SectorAutomotriz extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                    = 'Sector Automotriz';
        $this->autor                     = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                     = '2017-11-15T13:20';
        // El nombre del archivo a crear
        $this->archivo                   = 'sector-automotriz';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'En la zona metropolitana de La Laguna, las empresas dedicadas al sector automotriz generan 22% del valor agregado en la industria manufacturera y ocupa 30% del personal ocupado total en la industria manufacturera.';
        $this->claves                    = 'IMPLAN, Torreon, Sector Automotriz';
        // Ruta al archivo markdown con el contenido
        // $this->contenido_archivo_markdown = 'lib/Investigaciones/SectorAutomotriz.md';
        // Banderas
        $this->aparece_en_pagina_inicial = FALSE;
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = FALSE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array('Empresas', 'Empleo', 'Sector Automotriz');
        $this->fuentes                   = array();
        $this->regiones                  = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Cargar en el Schema el archivo HTML seguido del archivo Markdown
        $this->contenido->articleBody =
            $this->cargar_archivo('lib/Investigaciones/SectorAutomotrizPresentacion.html').
            $this->cargar_archivo_markdown('lib/Investigaciones/SectorAutomotriz.md');
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
        $this->javascript = $this->cargar_archivo('lib/Investigaciones/SectorAutomotrizPresentacion.js');
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
        $this->redifusion = $this->descripcion;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SectorAutomotriz

?>
