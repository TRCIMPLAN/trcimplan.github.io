<?php
/**
 * TrcIMPLAN SMIBase - PublicacionWeb
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

namespace SMIBase;

/**
 * Clase abstracta PublicacionWeb
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
    protected $lenguetas;                          // Instancia de LenguetasWeb
    const     LENGUETAS_ID = 'LenguetasIndicador'; // Identificador único para las lengüetas
    protected $preparado   = FALSE;                // Bandera

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Iniciar el contenido que será un SchemaArticle
        $this->contenido = new \Base\SchemaArticle();
    } // constructor

    /**
     * Preparar
     */
    public function preparar() {
        if (!$this->preparado) {
            // Extraer las fuentes para hacer una lengüeta/gráfica para cada una
            $fuentes = array();
            foreach ($this->datos() as $d) {
                if (isset($d['fuente_nombre']) && !in_array($d['fuente_nombre'], $fuentes)) {
                    $fuentes[] = $d['fuente_nombre'];
                }
            }
            sort($fuentes);
            // Elaborar lengüetas
            $this->lenguetas = new LenguetasWeb(self::LENGUETAS_ID);
            $this->lenguetas->agregar('Mapas', new SeccionMapasWeb($this));
            $this->lenguetas->agregar('Datos', new SeccionDatosWeb($this));
            if (count($fuentes) > 1) {
                // Van a ser dos o más gráficas
                $c = 0;
                foreach ($fuentes as $f) {
                    $c++;
                    $this->lenguetas->agregar("Gráfica $c", new SeccionGraficasWeb($this, $f));
                }
            } else {
                // Sólo una gráfica
                $this->lenguetas->agregar('Gráfica', new SeccionGraficasWeb($this));
            }
            $this->lenguetas->agregar('Otras regiones', new SeccionOtrasRegionesWeb($this));
            // Levantar la bandera
            $this->preparado = TRUE;
        }
    } // preparar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Validar y preparar
        $this->validar();
        $this->preparar();
        // Si hay observaciones, se preparan para colocarlas después de la lengüeta
        if ($this->observaciones() === NULL) {
            $observaciones_html = '';
        } else {
            $observaciones_html = "\n<h3>Observaciones</h3>\n".\Michelf\MarkdownExtra::defaultTransform($this->observaciones());
        }
        // Definir propiedades del contenido que es un SchemaArticle
        $this->contenido->big_heading   = TRUE;
        $this->contenido->headline      = $this->nombre;
        $this->contenido->description   = $this->descripcion;
        $this->contenido->author        = $this->autor;
        $this->contenido->datePublished = $this->fecha;
        $this->contenido->image         = $this->imagen;
        $this->contenido->image_show    = $this->poner_imagen_en_contenido;
        $this->contenido->articleBody   = $this->lenguetas->html().$observaciones_html;
        // Entregar
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // Validar y preparar
        $this->validar();
        $this->preparar();
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
        // Validar y preparar
        $this->validar();
        $this->preparar();
        // Elaborar redifusión
        $this->redifusion = "Debe haber algo aquí.";
        // Entregar
        return parent::redifusion_html();
    } // redifusion_html

    /**
     * Datos Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    abstract public function datos_estructura();

    /**
     * Datos
     *
     * @return array Arreglo con arreglos asociativos
     */
    abstract public function datos();

    /**
     * Otras Regiones Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    abstract public function otras_regiones_estructura();

    /**
     * Otras regiones
     *
     * @return array Arreglo con arreglos asociativos
     */
    abstract public function otras_regiones();

    /**
     * Mapas
     *
     * @return array Código HTML con el iframe de Carto
     */
    abstract public function mapas();

    /**
     * Observaciones
     *
     * @return string Markdown
     */
    abstract public function observaciones();

} // Clase abstracta PublicacionWeb

?>
