<?php
/**
 * TrcIMPLAN Sitio Web - Página Inicial Config
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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
namespace Configuracion;

/**
 * Clase PaginaInicialConfig
 */
class PaginaInicialConfig extends \Base\Plantilla {

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
    // public $archivo_ruta;
    // public $imagen_previa_ruta;
    // public $icono;
    // public $navegacion;
    // public $contenido;
    // public $mapa_inferior;
    // public $javascript;
    // public $contenido_en_renglon;
    // public $google_site_verification;
    public $mapa_servicios     = array(
        'Análisis Publicados'               => 'blog/index.html',
        'Indicadores'                       => 'indicadores-categorias/index.html',
        'Información Geográfica'            => 'sig-mapas-torreon/index.html',
        'Plan Estratégico Metropolitano'    => 'plan-estrategico-metropolitano/index.html',
        'Proyectos Estratégicos'            => 'proyectos/index.html');
    public $mapa_institucional = array(
        'Visión / Misión'                   => 'institucional/vision-mision.html',
        'Mensaje del Director'              => 'institucional/mensaje-director.html',
        'Quienes Somos'                     => 'institucional/quienes-somos.html',
        'Estructura Orgánica'               => 'institucional/estructura-organica.html',
        'Reglamentos'                       => 'institucional/reglamentos.html',
        'Información Financiera'            => 'institucional/informacion-financiera.html',
        'Consejo Directivo'                 => 'consejo-directivo/integrantes.html'); //
    public $mapa_interaccion   = array(
        'Contacto'                          => 'contacto/contacto.html',
        'Preguntas Frecuentes'              => 'preguntas-frecuentes/preguntas-frecuentes.html',
        'Eventos'                           => 'eventos/index.html',
        'Sala de Prensa'                    => 'sala-prensa/index.html',
        'Quejas y Sugerencias'              => 'http://trcimplan.mx/comentariossugerencias');
    public $mapa_legal         = array(
        'Transparencia'                     => 'http://www.icai.org.mx:8282/ipo/dependencia.php?dep=178',
        'Términos de Uso de la Información' => 'terminos/terminos-informacion.html',
        'Términos de Uso del Sitio Web'     => 'terminos/terminos-sitio.html',
        'Aviso de Privacidad'               => 'terminos/privacidad.html');

    /**
     * Constructor
     */
    public function __construct() {
        // Propiedades para la página inicial
        $this->en_raiz                  = true;
        $this->titulo                   = 'IMPLAN Torreón';
        $this->autor                    = 'IMPLAN Torreón';
        $this->descripcion              = 'Órgano técnico responsable de la planeación del desarrollo del municipio de Torreón cuyas propuestas de política tienen una orientación territorial.';
        $this->claves                   = 'IMPLAN, Torreon, Gomez Palacio, Lerdo, Matamoros, La Laguna';
        $this->directorio               = '.';
        $this->archivo_ruta             = "index.html";
        $this->imagen_previa_ruta       = 'imagenes/imagen-previa.jpg';
        $this->contenido_en_renglon     = false;
        $this->google_site_verification = '  <meta name="google-site-verification" content="Hz-cnyG17CBaAXopvSHn7J81Za2cmg4dvnRh1VJE7ks">';
        // Navegación
        $this->navegacion          = new \Base\Navegacion();
        $this->navegacion->en_raiz = true;
    } // constructor

    /**
     * Organizacion
     */
    protected function organizacion() {
        // Encabezado
        $organizacion              = new \Inicial\Organizacion();
        $organizacion->name        = 'Instituto Municipal de Planeación y Competitividad de Torreón';
        $organizacion->description = 'Órgano técnico responsable de la planeación del desarrollo del municipio de Torreón, Coahuila, México.';
        $organizacion->image       = 'imagenes/implan-logo.png';
        // Acumular
        $this->contenido[] = '  <section id="organizacion">';
    //~ $this->contenido[] = '    <a href="consejo-directivo/convocatoria-2015.html"><img class="banner" src="consejo-directivo/convocatoria-2015/banner.jpg" alt="Banner"></a>';
        $this->contenido[] = '    <img class="banner" src="imagenes/banner-implan.jpg" alt="Banner">';
        $this->contenido[] = $organizacion->html();
        $this->contenido[] = '  </section>';
    } // organizacion

    /**
     * Destacado
     */
    protected function destacado() {
        // SMI
        $smi              = new \Inicial\Destacado();
        $smi->name        = 'Sistema Metropolitano de Indicadores';
        $smi->description = 'Mantenemos al día indicadores en 5 grandes temas: Seguridad, Gobierno, Sustentabilidad, Economía y Sociedad para los municipios de la Laguna.';
        $smi->image       = 'servicio-smi';
        $smi->url         = 'indicadores-categorias/index.html';
        $smi->botones     = array(
            '<i class="fa fa-th-list"></i> Por Categoría'        => 'indicadores-categorias/index.html',
            '<i class="fa fa-table"></i> Por Región'             => 'smi/por-region.html',
            '<i class="fa fa-map-marker"></i> Georreferenciados' => 'smi-georreferenciados/index.html');
        // SIG
        $sig              = new \Inicial\Destacado();
        $sig->name        = 'Sistema de Información Geográfica';
        $sig->description = 'La representación de datos de diversas fuentes sobre mapas georreferenciados para su fácil análisis constituye una excelente herramienta para todos.';
        $sig->image       = 'servicio-sig';
        $sig->url         = 'sig-mapas-torreon/index.html';
        $sig->botones     = array(
            '<i class="fa fa-server"></i> Planes'                      => 'sig-planes/index.html',
            '<i class="fa fa-map-marker"></i> S.I.G. de Torreón'       => 'sig-mapas-torreon/index.html',
            '<i class="fa fa-map-marker"></i> Zonificación Secundaria' => 'sig-mapas-torreon/zonificacion-secundaria.html');
        // PEM
        $pem              = new \Inicial\Destacado();
        $pem->name        = 'Plan Estratégico Metropolitano';
        $pem->description = 'Súmate al esfuerzo de planeación participativa para atender la necesidad urgente de elevar el nivel de competitividad de La Laguna.';
        $pem->image       = 'servicio-pem';
        $pem->url         = 'plan-estrategico-metropolitano/index.html';
        $pem->botones     = array(
            '<i class="fa fa-file-text-o"></i> Conoce el Plan' => 'plan-estrategico-metropolitano/introduccion.html',
            '<i class="fa fa-calendar"></i> Todas las Mesas'   => 'plan-estrategico-metropolitano/index.html');
        // Acumular sección destacado
        $this->contenido[]  = '  <section id="destacado">';
        $this->contenido[]  = '    <div class="row">';
        $this->contenido[]  = '      <div class="col-sm-6 col-md-4">';
        $this->contenido[]  = $smi->html();
        $this->contenido[]  = '      </div>';
        $this->contenido[]  = '      <div class="col-sm-6 col-md-4">';
        $this->contenido[]  = $sig->html();
        $this->contenido[]  = '      </div>';
        $this->contenido[]  = '      <div class="col-sm-6 col-md-4">';
        $this->contenido[]  = $pem->html();
        $this->contenido[]  = '      </div>';
        $this->contenido[]  = '    </div>';
        $this->contenido[]  = '  </section>';
    } // destacado

    /**
     * Aviso
     */
    protected function aviso() {
        $this->contenido[] = '    <div class="panel" style="margin:4px;border:2px solid #FF3300;">';
        $this->contenido[] = '        <div class="panel-heading" style="background-color:#FFFFFF">';
        $this->contenido[] = '            <h2><a href="investigaciones/cidac-profesionistas-torreon.html">Profesionistas Torreón</a></h2>';
        $this->contenido[] = '            <a class="pull-left" href="investigaciones/cidac-profesionistas-torreon.html"><img class="media-object" src="investigaciones/cidac-profesionistas-torreon/imagen-previa.png"></a>';
        $this->contenido[] = '            <p>Nos adentramos al ámbito local para analizar y contestar la pregunta: ¿existe o no una brecha de talento y competencias en Torreón?.</p> <p>Colaboraron el <b>Centro de Investigación para el Desarrollo, A.C. (CIDAC)</b> y  el <b>Instituto Municipal de Planeación y Competitividad de Torreón (IMPLAN)</b> para conocer las dinámicas económicas y de capital humano de la ciudad.</p>';
        $this->contenido[] = '        </div>';
        $this->contenido[] = '        <a href="investigaciones/cidac-profesionistas-torreon.html">';
        $this->contenido[] = '            <div class="panel-footer" style="background-color:#CACACA">';
        $this->contenido[] = '                <span class="pull-left">Leer la investigación</span>';
        $this->contenido[] = '                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>';
        $this->contenido[] = '                <div class="clearfix"></div>';
        $this->contenido[] = '            </div>';
        $this->contenido[] = '        </a>';
        $this->contenido[] = '    </div>';
    } // aviso

    /**
     * Promociones
     */
    protected function promociones() {
        $this->contenido[] = '    <div class="panel" style="margin:4px;border:2px solid #FF3300;">';
        $this->contenido[] = '        <div class="panel-heading" style="background-color:#FFFFFF">';
        $this->contenido[] = '            <h2><a href="http://bit.ly/29FAT1u" target="_blank">Nueva Gobernanza: Construyendo normas con los habitantes de la ciudad</a></h2>';
        $this->contenido[] = '            <a href="http://bit.ly/29FAT1u" target="_blank"><img class="img-responsive" src="imagenes/seminario-online-nueva-gobernanza-2016.jpg" alt="Nueva Gobernanza: Construyendo normas con los habitantes de la ciudad"></a>';
        $this->contenido[] = '            <h2><a href="http://bit.ly/29FAT1u" target="_blank">Regístrate al seminario en línea</a></h2>';
        $this->contenido[] = '            <p>La gobernanza abierta es un modelo de hacer política más transparente y participativa. La <b>Alianza para el Gobierno Abierto</b> es un espacio de diálogo e intercambio de ideas que permite, en colaboración con la sociedad civil, promover que los gobiernos asuman compromisos con el potencial de transformar la calidad de vida de las personas.</p>';
        $this->contenido[] = '            <p>En esta segunda edición del <b>#SeminariOnline de OpeningCities,</b> las ciudades de <b>Torreón y Aguascalientes</b> compartirán su experiencia de inclusión de la ciudadanía en un proceso completo de construcción de normatividad. Analizaremos juntos cuáles mecanismos han sido desarrollados, cuáles han sido los retos y cómo esta práctica ha impactado en la relación de la administración con la ciudadanía.</p>';
        $this->contenido[] = '            <p>Organizan <a href="http://www.embarqmexico.org" target="_blank">CTS EMBARQ México</a> quienes forman parte de <a href="http://www.wri.org" target="_blank">World Resources Institute</a>. Sus objetivos son catalizar la implementación de proyectos y políticas públicas en materia de movilidad, transporte público, desarrollo urbano, cambio climático y calidad del aire.</p>';
        $this->contenido[] = '            <p>Después del registro, recibirás la confirmación por correo con la información para el acceso al seminario, en inglés.</p>';
        $this->contenido[] = '        </div>';
        $this->contenido[] = '    </div>';
    } // promociones

    /**
     * Novedades
     */
    protected function novedades() {
        // Obtener los tres últimos análisis
        $analisis                   = new \Blog\Imprenta();
        $resumenes                  = $analisis->elaborar_resumenes(); // Entrega una instancia de \Base\Resumenes
        $resumenes->en_raiz         = true;
        $resumenes->cantidad_maxima = 3;
        // Obtener el último de Sala de Prensa
        $sala_prensa                            = new \SalaPrensa\Imprenta();
        $resumenes_sala_prensa                  = $sala_prensa->elaborar_resumenes(); // Entrega una instancia de \Base\Resumenes
        $resumenes_sala_prensa->en_raiz         = true;
        $resumenes_sala_prensa->cantidad_maxima = 1;
        // Acumular sección novedades
        $this->contenido[]  = '  <section id="novedades">';
        $this->contenido[]  = '    <div class="row">';
        $this->contenido[]  = '      <div class="col-md-8">';
        // Análisis publicados
        $this->contenido[]  = '        <div class="analisis-publicados">';
        $this->contenido[]  = $resumenes->html();
        $this->contenido[]  = '          <div class="text-center">';
        $this->contenido[]  = "            <a href=\"blog/index.html\" class=\"btn btn-default\" role=\"button\">Todos los Análisis Publicados</a>";
        $this->contenido[]  = '          </div>';
        $this->contenido[]  = $resumenes_sala_prensa->html();
        $this->contenido[]  = '        </div>';
        // Análisis publicados termina
        $this->contenido[]  = '      </div>';
        $this->contenido[]  = '      <div class="col-md-4">';
        // Twitter Timeline Inicia
        $this->contenido[]  = '        <div class="red-social-twitter">';
        $this->contenido[]  = '          <a class="twitter-timeline" height="720px" href="https://twitter.com/trcimplan" data-chrome="nofooter transparent" data-theme="dark" data-widget-id="455819492145127424">Tweets por @trcimplan</a>';
        $this->contenido[]  = '        </div>';
        $this->javascript[] = '!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");';
        // Twitter Timeline Termina
        $this->contenido[]  = '      </div>';
        $this->contenido[]  = '    </div>';
        $this->contenido[]  = '  </section>';
    } // novedades

    /**
     * Mapa
     */
    protected function mapa() {
        // Mapa
        $servicios         = new \Inicial\Mapa('SERVICIOS',     $this->mapa_servicios);
        $institucional     = new \Inicial\Mapa('INSTITUCIONAL', $this->mapa_institucional);
        $interaccion       = new \Inicial\Mapa('INTERACCION',   $this->mapa_interaccion);
        $legal             = new \Inicial\Mapa('LEGAL',         $this->mapa_legal);
        // Mapa grande
        $this->contenido[] = '  <section id="mapa">';
        $this->contenido[] = '    <div class="row">';
        $this->contenido[] = '      <div class="col-sm-6 col-md-3">';
        $this->contenido[] = $servicios->grande_html();
        $this->contenido[] = '      </div>';
        $this->contenido[] = '      <div class="col-sm-6 col-md-3">';
        $this->contenido[] = $institucional->grande_html();
        $this->contenido[] = '      </div>';
        $this->contenido[] = '      <div class="col-sm-6 col-md-3">';
        $this->contenido[] = $interaccion->grande_html();
        $this->contenido[] = '      </div>';
        $this->contenido[] = '      <div class="col-sm-6 col-md-3">';
        $this->contenido[] = $legal->grande_html();
        $this->contenido[] = '      </div>';
        $this->contenido[] = '    </div>';
        $this->contenido[] = '  </section>';
        // Mapa chico
        $this->contenido[] = '  <section id="mapa-chico">';
        $this->contenido[] = $servicios->chico_html();
        $this->contenido[] = $institucional->chico_html();
        $this->contenido[] = $interaccion->chico_html();
        $this->contenido[] = $legal->chico_html();
        $this->contenido[] = '  </section>';
    } // mapa

    /**
     * Redes
     */
    protected function redes() {
        $this->contenido[] = '  <section id="redes">';
        $this->contenido[] = '    <div class="row">';
        $this->contenido[] = '      <div class="col-md-8">';
        $this->contenido[] = '        <a href="index.html"><img class="img-responsive logotipo" src="imagenes/implan-transparente-gris.png" alt="IMPLAN Torreón"></a>';
        $this->contenido[] = '      </div>';
        $this->contenido[] = '      <div class="col-md-4">';
        $this->contenido[] = '        <div class="pull-right redes-sociales">';
        $this->contenido[] = '          <a class="fa fa-twitter-square" href="http://www.twitter.com/trcimplan" target="_blank"></a>';
        $this->contenido[] = '          <a class="fa fa-facebook-square" href="https://facebook.com/trcimplan" target="_blank"></a>';
        $this->contenido[] = '          <a class="fa fa-google-plus-square" href="https://plus.google.com/106220426241750550649" target="_blank"></a>';
        $this->contenido[] = '          <a class="fa fa-github-square" href="https://github.com/TRCIMPLAN" target="_blank"></a>';
        $this->contenido[] = '          <a class="fa fa-rss-square" href="rss.xml"></a>';
        $this->contenido[] = '        </div>';
        $this->contenido[] = '      </div>';
        $this->contenido[] = '    </div>';
        $this->contenido[] = '  </section>';
    } // redes

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Elaborar secciones
        $this->organizacion();
        $this->destacado();
        $this->promociones();
        $this->aviso();
        $this->novedades();
        $this->mapa();
        $this->redes();
        // Entregar resultado del método en el padre
        return parent::html();
    } // html

} // Clase PaginaInicialConfig

?>
