<?php
/**
 * TrcIMPLAN Sitio Web - Plantilla Config
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

namespace Configuracion;

/**
 * Clase PlantillaConfig
 */
class PlantillaConfig {

    public $sitio_titulo    = 'IMPLAN Torreón';              // Título del sitio
    public $sitio_url       = 'http://www.trcimplan.gob.mx'; // Sin diagonal al final
    public $rss             = 'rss.xml';                     // Archivo con la sindicalización (RSS Feed)
    public $favicon         = 'imagenes/favicon.png';        // Archivo favicon
    public $propio_css      = 'dist/css/trcimplan.css';      // CSS propio de este sitio web
    public $en_raiz         = FALSE;                         // Si es verdadero los vínculos serán para un archivo en la raíz del sitio
    public $para_compartir  = TRUE;                          // Si es verdadero pondrá los metas para tarjetas en Twitter/Facebook
    public $autor           = 'TrcIMPLAN Staff';             // Autor por defecto
    public $mensaje_oculto;
    public $pie;
    protected $google_analytics;
    protected $google_site_verification;
    public $favicons = array(
        array('ruta' => 'imagenes/apple-touch-icon.png',         'rel' => 'apple-touch-icon', 'size' => ''),
        array('ruta' => 'imagenes/apple-touch-icon-76x76.png',   'rel' => 'apple-touch-icon', 'size' => '76x76'),
        array('ruta' => 'imagenes/apple-touch-icon-120x120.png', 'rel' => 'apple-touch-icon', 'size' => '120x120'),
        array('ruta' => 'imagenes/apple-touch-icon-152x152.png', 'rel' => 'apple-touch-icon', 'size' => '152x152'),
        array('ruta' => 'imagenes/apple-touch-icon-180x180.png', 'rel' => 'apple-touch-icon', 'size' => '180x180'),
        array('ruta' => 'imagenes/icon-hires.png',               'rel' => 'icon',             'size' => '192x192'),
        array('ruta' => 'imagenes/icon-normal.png',              'rel' => 'icon',             'size' => '128x128'),
    );
    protected $vinculos_css;
    protected $vinculos_js;

    /**
     * Constructor
     */
    public function __construct() {
        // Vínculos CSS a archivos locales o URLs remotas
        $this->vinculos_css   = array();
        $this->vinculos_css[] = 'vendor/bootstrap/css/bootstrap.min.css';                             // Bootstap
        $this->vinculos_css[] = 'vendor/metisMenu/metisMenu.min.css';                                 // Metis Menu
        $this->vinculos_css[] = 'dist/css/sb-admin-2.min.css';                                        // SBadmin2
        $this->vinculos_css[] = 'vendor/datatables-plugins/dataTables.bootstrap.css';                 // DataTables
        $this->vinculos_css[] = 'vendor/morrisjs/morris.css';                                         // MorrisJS
        $this->vinculos_css[] = 'vendor/font-awesome/css/font-awesome.min.css';                       // Fontawesome
        $this->vinculos_css[] = 'dist/css/plataforma-de-conocimiento.css';                            // Plataforma del conocimiento
        $this->vinculos_css[] = 'https://fonts.googleapis.com/css?family=Droid+Sans:400,700';         // Google Fonts
        $this->vinculos_css[] = 'http://libs.cartocdn.com/cartodb.js/v3/3.15/themes/css/cartodb.css'; // Carto
        // Vínculos Javascript a archivos locales o URLs remotas
        $this->vinculos_js    = array();
        $this->vinculos_js[]  = 'vendor/jquery/jquery.min.js';                                        // jQuery
        $this->vinculos_js[]  = 'vendor/bootstrap/js/bootstrap.min.js';                               // Bootstrap
        $this->vinculos_js[]  = 'vendor/metisMenu/metisMenu.min.js';                                  // Metis menu
        $this->vinculos_js[]  = 'dist/js/sb-admin-2.min.js';                                          // SBadmin2
        $this->vinculos_js[]  = 'vendor/datatables/js/jquery.dataTables.min.js';                      // DataTables
        $this->vinculos_js[]  = 'vendor/datatables-plugins/dataTables.bootstrap.min.js';              // DataTables
        $this->vinculos_js[]  = 'vendor/datatables-responsive/dataTables.responsive.js';              // DataTables
        $this->vinculos_js[]  = 'vendor/raphael/raphael.min.js';                                      // MorrisJS
        $this->vinculos_js[]  = 'vendor/morrisjs/morris.min.js';                                      // MorrisJS
        $this->vinculos_js[]  = 'http://libs.cartocdn.com/cartodb.js/v3/3.15/cartodb.js';             // Carto
        // Mensaje oculto
        $this->mensaje_oculto = <<<FINAL
<!-- ===================================================================================================

        Instituto Municipal de Planeación y Competitividad (IMPLAN) de Torreón.

        3er. generación de la Plataforma del Conocimiento
        Desarrollado por Ing. Guillermo Valdés Lozano <guivaloz en movimientolibre.com>

        El software que lo construye está bajo la licencia GPL versión 3. © 2014, 2015, 2016, 2017.
        Una copia está contenida en el archivo LICENCE al bajar desde GitHub.

        Al usar, estudiar y copiar está aceptando los términos de uso de la información y del sitio web:
          http://www.trcimplan.gob.mx/terminos/terminos-informacion.html
          http://www.trcimplan.gob.mx/terminos/terminos-sitio.html

        Descargue, estudie y colabore bajando todo este sitio web:
          IMPLAN Torreón     https://github.com/TRCIMPLAN/trcimplan.github.io

        Agradecemos y compartimos las tecnologías abiertas y gratuitas sobre las que se basa:
          PHP                http://php.net
          Twitter Bootstrap  http://getbootstrap.com
          StartBootStrap     http://startbootstrap.com
          Morris.js          https://morrisjs.github.io/morris.js/
          Font Awesome       http://fontawesome.io
          DataTables         https://www.datatables.net
          Carto              https://carto.com
          GitHub             https://github.com

     =================================================================================================== -->
FINAL;
        // Google Analytics
        $this->google_analytics = <<<FINAL
<script>
  // Google Analytics
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-58290501-1', 'auto');ga('send', 'pageview');
</script>
FINAL;
    } // constructor

} // Clase PlantillaConfig

?>
