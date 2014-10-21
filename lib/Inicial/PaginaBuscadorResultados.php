<?php
/*
 * SMIbeta - Página Buscador Resultados
 *
 * Copyright (C) 2014 IMPLAN Torreón
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
 */

// Namespace
namespace Inicial;

/**
 * Clase PaginaBuscadorResultados
 */
class PaginaBuscadorResultados extends \Base\Plantilla {

    // public $sitio_titulo;
    // public $sitio_url;
    // public $rss;
    // public $favicon;
    // public $propio_css;
    // public $en_raiz;
    // public $para_compartir;
    // public $autor;
    // public $mensaje_oculto;
    // public $pie;
    // public $titulo;
    // public $descripcion;
    // public $claves;
    // public $directorio;
    // public $ruta;
    // public $imagen_previa;
    // public $navegacion;
    // public $contenido;
    // public $mapa_inferior;
    // public $javascript;
    // public $contenido_en_renglon;

    /**
     * Constructor
     */
    public function __construct() {
        $this->en_raiz       = true;
        $this->titulo        = 'Resultados de la búsqueda';
    //  $this->autor         = 'TrcIMPLAN';
        $this->descripcion   = 'Resultados de la búsqueda.';
        $this->claves        = 'IMPLAN, Torreon, Gomez Palacio, Lerdo, Matamoros, La Laguna';
        $this->directorio    = '.';
        $this->ruta          = "buscador-resultados.html";
        $this->imagen_previa = 'imagenes/implan.jpg';
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Indicar al padre que no queremos encerrar el contenido con row y cuerpo
        $this->contenido_en_renglon = false;
        // Navegacion
        $this->navegacion          = new \Base\Navegacion();
        $this->navegacion->en_raiz = true;
        // Resultados del Buscador de Google
        $this->contenido[] = <<<FINAL
    <div id="page-content">
        <div class='post-body entry-content'>
            <div id="cse" style="width: 100%;">
                <ul id="loadbar">
                    <li><div class="bar" id="layerFill1"></div></li>
                    <li><div class="bar" id="layerFill2"></div></li>
                    <li><div class="bar" id="layerFill3"></div></li>
                    <li><div class="bar" id="layerFill4"></div></li>
                    <li><div class="bar" id="layerFill5"></div></li>
                    <li><div class="bar" id="layerFill6"></div></li>
                    <li><div class="bar" id="layerFill7"></div></li>
                    <li><div class="bar" id="layerFill8"></div></li>
                    <li><div class="bar" id="layerFill9"></div></li>
                    <li><div class="bar" id="layerFill10"></div></li>
                </ul>
            </div>
        <script src="http://www.google.com/jsapi" type="text/javascript"></script>
        <div style='clear: both;'></div>
    </div>
FINAL;
        $this->javascript[] = <<<FINAL
    google.load('search', '1', {language : 'es', style : google.loader.themes.V2_DEFAULT});
    google.setOnLoadCallback(function() {
        var customSearchOptions = {};
        var orderByOptions = {};
        orderByOptions['keys']                = [{label: 'Relevance', key: ''},{label: 'Date', key: 'date'}];
        customSearchOptions['enableOrderBy']  = true;
        customSearchOptions['orderByOptions'] = orderByOptions;
        //
        var imageSearchOptions = {};
        imageSearchOptions['layout']              = google.search.ImageSearch.LAYOUT_COLUMN;
        customSearchOptions['enableImageSearch']  = false;
        customSearchOptions['imageSearchOptions'] = imageSearchOptions;
        //
        var googleAnalyticsOptions = {};
        googleAnalyticsOptions['queryParameter']      = 's';
        googleAnalyticsOptions['categoryParameter']   = '';
        customSearchOptions['googleAnalyticsOptions'] = googleAnalyticsOptions; var customSearchControl = new google.search.CustomSearchControl('015475140351266618625:04hulmghdys', customSearchOptions);
        customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
        //
        var options = new google.search.DrawOptions();
        options.setAutoComplete(true);
        options.enableSearchResultsOnly();
        customSearchControl.draw('cse', options);
        function parseParamsFromUrl() {
            var params = {};
            var parts = window.location.search.substr(1).split('\x26');
            for (var i = 0; i < parts.length; i++) {
                var keyValuePair = parts[i].split('=');
                var key = decodeURIComponent(keyValuePair[0]);
                params[key] = keyValuePair[1] ? decodeURIComponent(keyValuePair[1].replace(/\+/g, ' ')) : keyValuePair[1];
            }
            return params;
        }
        var urlParams = parseParamsFromUrl();
        var queryParamName = "s";
        if (urlParams[queryParamName]) {
            customSearchControl.execute(urlParams[queryParamName]);
        }
    }, true);
FINAL;
        // Entregar resultado del padre
        return parent::html();
    } // html

} // Clase PaginaBuscadorResultados

?>
