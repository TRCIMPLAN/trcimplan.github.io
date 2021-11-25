<?php
/**
 * TrcIMPLAN Sitio Web - CLASE
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

namespace Monitores;

/**
 * Clase Monitor de educacion
 */
class MonitorEducacionSuperior extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Monitor de Educación Superior';
        $this->autor                      = 'Lic. Olga Alejandra Noriega Aranda'; // Puede ser un arreglo de textos  array(' ',' ')
        $this->fecha                      = '2021-11-25T13:40';
        // El nombre del archivo a crear
        $this->archivo                    = 'monitor-de-educacion'; // En minúsculas, sin espacios, use guiones, letras y números
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Monitor de Educación para la Zona Metropolitana de La Laguna.';
        $this->claves                     = 'IMPLAN, Torreon, Educacion, La Laguna';
        // Ruta al archivo markdown con el contenido
    //~$this->contenido_archivo_markdown = 'lib/Monitores/monitor-de-negocios.md';
        // Ruta al archivo HTML con el contenido
    //~ $this->contenido_archivo_html     = 'lib/Monitores/MonitorDeNegocios.html';
        // Banderas
        $this->aparece_en_pagina_inicial  = FALSE;
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = FALSE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                     = 'publicar';
        // Para el Organizador
        $this->categorias                 = array('Competitividad','Educación','Empresas','Población');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón','La Laguna');
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Cargar en el Schema el archivo HTML seguido del archivo Markdown
        $this->contenido->articleBody =
            $this->cargar_archivo('lib/Monitores/MonitorEducacionSuperior.html').
            $this->cargar_archivo_markdown_extra('lib/Monitores/MonitorEducacionSuperior.md');
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
        $this->javascript = $this->cargar_archivo('lib/Monitores/MonitorEducacionSuperior.js');
        // Entregar resultado del padre
        return parent::javascript();
    } // javascript

    //**
    /* Redifusion HTML
    /*
    /* @return string Código HTML
    /*/
    public function redifusion_html() {
       // Código HTML para redifusión
        $this->redifusion = $this->descripcion;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase Prueba

?>
