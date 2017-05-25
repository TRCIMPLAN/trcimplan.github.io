<?php
/**
 * TrcIMPLAN Sitio Web - Pagina Inicial Config
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
 * Clase PaginaInicialConfig
 */
class PaginaInicialConfig extends \Base\Plantilla {

    public $imprentas;                        // Arreglo con rutas a las clases de ImprentaPublicaciones, es usado en ultimas_publicaciones
    const   ULTIMAS_PUBLICACIONES_LIMITE = 4; // Cantidad límite de últimas publicaciones

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
        // Propiedades para la página inicial
        $this->en_raiz              = TRUE;
        $this->titulo               = 'IMPLAN Torreón';
        $this->autor                = 'IMPLAN Torreón';
        $this->descripcion          = 'Órgano técnico responsable de la planeación del desarrollo del municipio de Torreón cuyas propuestas de política tienen una orientación territorial.';
        $this->claves               = 'IMPLAN, Torreon, Gomez Palacio, Lerdo, Matamoros, La Laguna';
        $this->directorio           = '.';
        $this->archivo_ruta         = "index.html";
        $this->imagen_previa_ruta   = 'imagenes/imagen-previa.jpg';
        $this->contenido_en_renglon = FALSE;
        // Google Site Verification
        $this->google_site_verification = '<meta name="google-site-verification" content="Hz-cnyG17CBaAXopvSHn7J81Za2cmg4dvnRh1VJE7ks">';
    } // constructor

    /**
     * Organizacion
     */
    protected function organizacion() {
        // Encabezado
        $organizacion                 = new \PaginaInicial\Organizacion();
        $organizacion->name           = 'Instituto Municipal de Planeación y Competitividad de Torreón';
        $organizacion->description    = 'Órgano técnico responsable de la planeación del desarrollo del municipio de Torreón, Coahuila, México.';
        $organizacion->image          = 'imagenes/implan-logo.png';
        $organizacion->is_article     = FALSE;
        $organizacion->big_heading    = TRUE;
        $organizacion->headline_style = 'organizacion';
        // Acumular
        $this->contenido[] = '  <section id="organizacion">';
    //~ $this->contenido[] = '    <a href="consejo-directivo/convocatoria-2015.html"><img class="banner" src="consejo-directivo/convocatoria-2015/banner.jpg" alt="Banner"></a>';
        $this->contenido[] = '    <img class="banner" src="imagenes/banner-implan-2016-11.jpg" alt="TrcIMPLAN Plan Estrategico Torreon 2016-11">';
        $this->contenido[] = $organizacion->html();
        $this->contenido[] = '  </section>';
    } // organizacion

    /**
     * Servicios
     */
    protected function servicios() {
        // SMI
        $smi              = new \PaginaInicial\Destacado();
        $smi->name        = 'Sistema Metropolitano de Indicadores';
        $smi->description = 'Mantenemos al día indicadores en 5 grandes temas: Seguridad, Gobierno, Sustentabilidad, Economía y Sociedad para los municipios de la Laguna.';
        $smi->image       = 'servicio-smi';
        $smi->url         = 'indicadores-categorias/index.html';
        $smi->botones     = array(
            '<i class="fa fa-th-list"></i> Por Categoría'        => 'indicadores-categorias/index.html',
            '<i class="fa fa-table"></i> Por Región'             => 'smi/por-region.html',
            '<i class="fa fa-map-marker"></i> Georreferenciados' => 'smi-georreferenciados/index.html');
    //      '<i class="fa fa-puzzle-piece"></i> IBCTorreón'      => 'https://guivaloz.carto.com/viz/f0e6db7c-ac40-11e6-9146-0e3a376473ab/embed_map');
        // SIG
        $sig              = new \PaginaInicial\Destacado();
        $sig->name        = 'Sistema de Información Geográfica';
        $sig->description = 'La representación de datos de diversas fuentes sobre mapas georreferenciados para su fácil análisis constituye una excelente herramienta para todos.';
        $sig->image       = 'servicio-sig';
        $sig->url         = 'sig-mapas-torreon/index.html';
        $sig->botones     = array(
            '<i class="fa fa-server"></i> Planes'                      => 'sig-planes/index.html',
            '<i class="fa fa-map-marker"></i> S.I.G. de Torreón'       => 'sig-mapas-torreon/index.html',
            '<i class="fa fa-map-marker"></i> Zonificación Secundaria' => 'sig-mapas-torreon/zonificacion-secundaria.html');
        // PET
        $pet              = new \PaginaInicial\Destacado();
        $pet->name        = 'Plan Estratégico Torreón 2040';
        $pet->description = 'Súmate al esfuerzo de planeación participativa para atender la necesidad urgente de elevar el nivel de competitividad de La Laguna.';
        $pet->image       = 'servicio-pet';
        $pet->url         = 'pet/introduccion.html';
        $pet->botones     = array(
            '<i class="fa fa-list-ul"></i> Índice General'           => 'pet/indice.html',
            '<i class="fa fa fa-font"></i> Índice Alfabético'        => 'pet/index.html',
            '<i class="fa fa-download"></i> Descargar'               => 'plan-estrategico-torreon-enfoque-metropolitano-2040/index.html',
            '<i class="fa fa-external-link"></i> Comentar'           => 'https://docs.google.com/document/d/1V4nwGxAd8umhGQDuWCOAJD7pVu-ghVGqcIrJ1xNU5wM/edit?usp=sharing',
            '<i class="fa fa-calendar"></i> Descripción del Proceso' => 'plan-estrategico-metropolitano/descripcion-del-proceso.html',
            '<i class="fa fa-check-square"></i> Proyectos'           => 'proyectos/index.html');
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
        $this->contenido[]  = $pet->html();
        $this->contenido[]  = '      </div>';
        $this->contenido[]  = '    </div>';
        $this->contenido[]  = '  </section>';
    } // servicios

    /**
     * IBC
     */
    protected function ibc() {
        // Código HTML
        $this->contenido[]  = '  <section id="ibc">';
        $this->contenido[]  = '    <div id="IBCTorreonMapa" class="mapa"></div>';
        $this->contenido[]  = '  </section>';
        // Código Javascript
        $js   = array();
        $js[] = '  // Cargar mapa IBC Torreón cuando esté lista la página';
        $js[] = '  $(window).load(function() {';
        $js[] = sprintf('    cartodb.createVis(\'IBCTorreonMapa\', \'%s\', {', IBCTorreonConfig::LIMITES);
        $js[] = '      shareable: FALSE,';
        $js[] = '      title: TRUE,';
        $js[] = '      description: TRUE,';
        $js[] = '      search: FALSE,';
        $js[] = '      scrollwheel: FALSE,';
        $js[] = '      infowindow: TRUE,';
        $js[] = '      fullscreen: TRUE';
        $js[] = '    })';
        $js[] = '    .done(function(vis, layers) {';
        $js[] = '      // Capa colonias';
        $js[] = '      var colonias_capa = layers[1];';
        $js[] = '      colonias_capa.setInteraction(TRUE);';
        $js[] = '      // Ajustes en el mapa';
        $js[] = '      var map = vis.getNativeMap();';
        $js[] = '      map.setZoom(14);';
        $js[] = '    })';
        $js[] = '  });';
        $this->javascript[] = implode("\n", $js);
    } // ibc

    /**
     * Aviso
     */
    protected function aviso() {
        $this->contenido[]  = '  <section id="aviso">';
        $this->contenido[]  = '    <div class="panel panel-default">';
        $this->contenido[]  = '        <div class="panel-heading" style="background-color:#CACACA;padding:0px 15px;">';
        $this->contenido[]  = '            <h2 style="border-bottom:none">Suspensión de difusión y propaganda por periodo electoral</h2>';
        $this->contenido[]  = '        </div>';
        $this->contenido[]  = '        <div class="panel-body">';
        $this->contenido[]  = '            <p>A partir del primer minuto de este domingo 2 de abril y hasta las 24:00 horas del día 4 de junio, el Ayuntamiento de Torreón suspenderá toda su difusión promocional en todos los medios de comunicación en cumplimiento a las disposiciones del acuerdo emitido por el Consejo General del Instituto Nacional Electoral.</p>';
        $this->contenido[]  = '            <p>El IMPLAN Torreón acatará las disposiciones de este órgano federal electoral en cuanto a sus normas reglamentarias sobre la propaganda gubernamental para los procesos electorales 2016-2017 respecto al artículo 41, base III, apartado C de la Constitución Política de los Estados Unidos Mexicanos.</p>';
        $this->contenido[]  = '            <p>Ante estas disposiciones, se dejarán de emitir boletines de prensa y el Sistema Metropolitano de Indicadores (SMI) así como el Sistema de Información Geográfica (SIG) recibirán información que no sea considerada como propaganda gubernamental.</p>';
        $this->contenido[]  = '        </div>';
    //~ $this->contenido[]  = '        <a href="consejo-directivo/eleccion-de-consejeros-de-representacion-sectorial-2015.html">';
    //~ $this->contenido[]  = '            <div class="panel-footer" style="background-color:#CACACA">';
    //~ $this->contenido[]  = '                <span class="pull-left">Ir a la página</span>';
    //~ $this->contenido[]  = '                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>';
    //~ $this->contenido[]  = '                <div class="clearfix"></div>';
    //~ $this->contenido[]  = '            </div>';
    //~ $this->contenido[]  = '        </a>';
        $this->contenido[]  = '    </div>';
        $this->contenido[]  = '  </section>';
    } // aviso

    /**
     * Últimas publicaciones
     */
    protected function ultimas_publicaciones() {
        // Iniciar concentrador
        $concentrador          = new \Base\VinculosDetallados();
        $concentrador->en_raiz = TRUE;
        // Iniciar recolector
        $recolector = new \Base\Recolector();
        $recolector->iniciar_para_estado_publicar();
        $recolector->agregar_publicaciones_de_imprentas($this->imprentas);
        // Ordenar publicaciones por tiempo, de la más nueva a la más antigua
        $recolector->ordenar_por_tiempo_desc();
        // Bucle por las publicaciones
        foreach ($recolector->obtener_publicaciones(self::ULTIMAS_PUBLICACIONES_LIMITE) as $publicacion) {
            // Iniciar vínculo
            $vinculo          = new \Base\Vinculo();
            $vinculo->en_raiz = TRUE;
            $vinculo->en_otro = FALSE;
            $vinculo->definir_con_publicacion($publicacion);
            // Agregar
            $concentrador->agregar($vinculo);
        }
        // Acumular Últimas Publicaciones y Twitter Timeline
        $this->contenido[]  = '  <section id="ultimas-publicaciones">';
    //~ $this->contenido[]  = '    <div class="row">';
    //~ $this->contenido[]  = '      <div class="col-md-8">';
        $this->contenido[]  = '        <div class="ultimas">';
        $this->contenido[]  = '          <h2>Últimas publicaciones</h2>';
        $this->contenido[]  = $concentrador->html();
        $this->contenido[]  = '          <div class="text-center">';
        $this->contenido[]  = "            <a href=\"blog/index.html\" class=\"btn btn-default\" role=\"button\">Todos los Análisis Publicados</a>";
        $this->contenido[]  = '          </div>';
        $this->contenido[]  = '        </div>';
    //~ $this->contenido[]  = '      </div>';
    //~ $this->contenido[]  = '      <div class="col-md-4">';
    //~ $this->contenido[]  = '        <div class="red-social-twitter">';
    //~ $this->contenido[]  = '          <a class="twitter-timeline" height="720px" href="https://twitter.com/trcimplan" data-chrome="nofooter transparent" data-theme="dark" data-widget-id="455819492145127424">Tweets por @trcimplan</a>';
    //~ $this->contenido[]  = '        </div>';
    //~ $this->contenido[]  = '      </div>';
    //~ $this->contenido[]  = '    </div>';
        $this->contenido[]  = '  </section>';
        // Acumular javascipt del Twitter Timeline
    /*  $this->javascript[] = <<<FINAL
  // Twitter timeline
  !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
FINAL; */
    } // ultimas_publicaciones

    /**
     * Categorías
     */
    protected function categorias() {
        // Cargar configuración de las categorías
        $categorias_config = new CategoriasConfig();
        // Iniciar concentrador
        $concentrador = new \Base\VinculosCompactos();
        // Inicializar el recolector
        $recolector = new \Base\RecolectorCategorias();
        $recolector->agregar_publicaciones_de_imprentas($this->imprentas);
        // Bucle por todas las categorias
        foreach ($recolector->obtener_categorias() as $nombre) {
            // Obtener instancia de Categoria
            $categoria = $categorias_config->obtener($nombre);
            // Si está definido en \Configuracion\CategoriasConfig
            if ($categoria instanceof \Base\Categoria) {
                // Sí está definido
                $categoria->en_raiz = TRUE;
                $categoria->en_otro = FALSE;
                $vinculo            = new \Base\Vinculo($categoria->nombre, $categoria->url(), $categoria->icono, '', $categoria->descripcion);
                $vinculo->en_raiz   = TRUE;
                $vinculo->en_otro   = FALSE;
                $concentrador->agregar($vinculo);
            } elseif ($categorias_config->mostrar_no_definidos) {
                // No está definido
                $vinculo          = new \Base\Vinculo($nombre, sprintf('%s.html', \Base\Funciones::caracteres_para_web($nombre)), 'unknown', \Base\ImprentaCategorias::CATEGORIAS_DIR);
                $vinculo->en_raiz = TRUE;
                $vinculo->en_otro = FALSE;
                $concentrador->agregar($vinculo);
            }
        }
        // Poner
        $this->contenido[] = '  <section id="categorias">';
        $this->contenido[] = '    <h2>Categorías</h2>';
        $this->contenido[] = sprintf('    <p>Explore por medio de las categorías que clasifican las %s publicaciones en este sitio web.</p>', number_format($recolector->obtener_cantidad_de_publicaciones(), 0, ".", ","));
        $this->contenido[] = $concentrador->html();
        $this->contenido[] = '  </section>';
    } // categorias

    /**
     * Mapa
     */
    protected function mapa() {
        // Mapa
        $servicios     = new \PaginaInicial\Mapa('SERVICIOS', array(
            'Análisis Publicados'               => 'blog/index.html',
            'Indicadores'                       => 'indicadores-categorias/index.html',
    //      'Indicadores Básicos por Colonias'  => 'ibc-torreon/index.html',
            'Información Geográfica'            => 'sig-mapas-torreon/index.html',
            'Investigaciones'                   => 'investigaciones/index.html',
            'Plan Estratégico Torreón 2040'     => 'pet/introduccion.html'));
        $institucional = new \PaginaInicial\Mapa('INSTITUCIONAL', array(
            'Consejo Directivo'                 => 'consejo-directivo/integrantes.html',
            'Estructura Orgánica'               => 'institucional/estructura-organica.html',
            'Mensaje del Director'              => 'institucional/mensaje-director.html',
            'Modelo Operativo Universal'        => 'institucional/modelo-operativo-universal.html',
            'Quienes Somos'                     => 'autores/index.html',
            'Reglamentos'                       => 'institucional/reglamentos.html',
            'Visión / Misión'                   => 'institucional/vision-mision.html'));
        $interaccion   = new \PaginaInicial\Mapa('INTERACCION', array(
            'Contacto'                          => 'contacto/contacto.html',
            'Preguntas Frecuentes'              => 'preguntas-frecuentes/preguntas-frecuentes.html',
            'Quejas y Sugerencias'              => 'http://goo.gl/forms/1rdX4X128PpMOif73',
            'Sala de Prensa'                    => 'sala-prensa/index.html'));
        $legal         = new \PaginaInicial\Mapa('LEGAL', array(
            'Aviso de Privacidad'               => 'terminos/privacidad.html',
            'Términos de Uso de la Información' => 'terminos/terminos-informacion.html',
            'Términos de Uso del Sitio Web'     => 'terminos/terminos-sitio.html',
            'Transparencia'                     => 'http://www.icai.org.mx:8282/ipo/dependencia.php?dep=178'));
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
        $this->contenido[] = '        <img class="img-responsive logotipo" src="imagenes/implan-transparente-gris.png" alt="IMPLAN Torreón">';
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
        $this->aviso();
        $this->servicios();
    //~ $this->ibc();
        $this->ultimas_publicaciones();
        $this->categorias();
        $this->mapa();
        $this->redes();
        // Entregar resultado del método en el padre
        return parent::html();
    } // html

} // Clase PaginaInicialConfig

?>
