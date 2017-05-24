<?php
/**
 * TrcIMPLAN IBCBase - PublicacionWeb
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
 * @package PlataformaDeConocimiento
 */

namespace IBCBase;

/**
 * Clase PublicacionWeb
 */
abstract class PublicacionWeb extends \Base\Publicacion implements SalidaWeb {

    // public $sitio_url;
    // public $fecha;
    // public $autor;
    // public $aparece_en_pagina_inicial;
    // public $para_compartir;
    // public $imagen;
    // public $imagen_previa;
    // public $imagen_id;
    // public $icono;
    // public $region_nivel;
    // public $estado;
    // public $poner_imagen_en_contenido;
    // public $include_extra_directorio;
    // public $nombre;
    // public $nombre_menu;
    // public $directorio;
    // public $archivo;
    // public $descripcion;
    // public $claves;
    // public $encabezado;
    // public $encabezado_color;
    // public $url;
    // public $url_etiqueta;
    // public $en_raiz;
    // public $en_otro;
    // public $archivo_url;
    // public $archivo_target;
    // public $boton_url;
    // public $boton_target;
    // public $contenido_archivo_html;
    // public $contenido_archivo_markdown;
    // public $categorias;
    // public $fuentes;
    // public $regiones;
    // public $imprenta_titulo;
    // protected $contenido;
    // protected $javascript;
    // protected $redifusion;
    // protected $validado;
    protected $lenguetas;                         // Instancia de LenguetasWeb
    const LENGUETAS_ID = 'LenguetasConglomerado'; // Texto único que sirve de id para las lengüetas

    abstract public function datos();

    /**
     * Validar
     */
    public function validar() {
        // Si ya fue validado, no se hace nada
        if ($this->validado) {
            return;
        }
        // Ejecutar método en el padre
        parent::validar();
        // Elaborar lengüetas
        $this->lenguetas = new LenguetasWeb(self::LENGUETAS_ID);
        $this->lenguetas->agregar('Mapas',    new SeccionMapasWeb($this), TRUE); // Lengüeta activa
        $this->lenguetas->agregar('Datos',    new SeccionDatosWeb($this));
        $this->lenguetas->agregar('Gráficas', new SeccionGraficasWeb($this));
        $this->lenguetas->agregar('Reseña',   new SeccionResenaWeb($this));
        // Crear contenido con una instancia de SchemaDataset
        $this->contenido = new \Base\SchemaDataset();
    } // validar

    /**
     * HTML
     *
     * El contenido es un SchemaDataset, complementado con un SchemaPlace y SchemaGeoCoordinates
     *
     * @return string Código HTML
     */
    public function html() {
        // Validar
        $this->validar();
        // Consultar mapas
        if (method_exists($this, 'mapas')) {
            $mapas = $this->mapas();
            // Si hay coordenadas
            if (isset($mapas['Centro latitud']) && isset($mapas['Centro longitud'])) {
                // Crear esquema GeoCoordinates
                $s_geo            = new \Base\SchemaGeoCoordinates();
                $s_geo->latitude  = $mapas['Centro latitud'];
                $s_geo->longitude = $mapas['Centro longitud'];
            } else {
                $s_geo = NULL;
            }
        } else {
            $s_geo = NULL;
        }
        // Crear esquema Place
        $s_place                  = new \Base\SchemaPlace();
        $s_place->name            = $this->nombre;
        $s_place->description     = $this->descripcion;
        $s_place->geo             = $s_geo;
        $s_place->is_visible      = FALSE;
        // Crear esquema DataDownload
    //  $s_datadownload           = ;
        // Definir propiedades de SchemaDataset, previamente iniciado en validar
        $this->contenido->big_heading   = TRUE;
        $this->contenido->headline      = $this->nombre;
        $this->contenido->description   = $this->descripcion;
        $this->contenido->author        = $this->autor;
        $this->contenido->spatial       = $s_place;
        $this->contenido->datePublished = '2010-01-01';
    //  $this->contenido->distribution  = ; // URL a JSON con http://schema.org/DataDownload
        $this->contenido->content       = $this->lenguetas->html();
        // Entregar
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // Validar
        $this->validar();
        // Google Charts necesita este activado sólo una vez en la página
        $this->javascript[] = "  // Google Charts\n  google.charts.load('current', {'packages':['corechart']});";
        // Bandera para evitar que se carguen los mapas más de una vez
        $this->javascript[] = "  // Carto mapas\n  var mapa_limites_cargado = false;";
        // Acumular Javascript de las lengüetas
        $this->javascript[] = $this->lenguetas->javascript();
        // Entregar
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Elaborar redifusión
        $this->redifusion = "Debe haber algo aquí";
        // Entregar
        return parent::redifusion_html();
    } // redifusion_html

} // Clase PublicacionWeb

?>
