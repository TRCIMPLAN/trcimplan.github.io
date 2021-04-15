<?php
/**
 * TrcIMPLAN Sitio Web - Navegacion Config
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
 * Clase NavegacionConfig
 */
class NavegacionConfig {

    protected $sitio_titulo = 'IMPLAN Torreón';
    protected $logotipo     = 'imagenes/implan-barra-logo-chico-gris.png';
    protected $opciones     = array(
        //'Análisis Publicados' => 'trcimplan_sitioweb/index.html',    // ELIMINAR
        // 'Indicadores Básicos de Colonias > Mapa Completo'         => 'https://guivaloz.carto.com/viz/f0e6db7c-ac40-11e6-9146-0e3a376473ab/embed_map',
        //'Análisis Publicados'                                         => 'blog/index.html',
        'Análisis Publicados' => array(
            'Análisis Publicados > Últimos Análisis'                  => 'blog/index.html',
            'Análisis Publicados > Análisis por Autor'                => 'excolaboradores/index.html'),
        'Indicadores' => array(
            'Indicadores > Introducción al SMI'                       => 'smi/introduccion.html',
            'Indicadores > Indicadores por Categoría'                 => 'indicadores-categorias/index.html',
            'Indicadores > Indicadores por Región'                    => 'smi/por-region.html',
            //'Indicadores > Georreferenciados'                         => 'smi-georreferenciados/index.html',
            'Indicadores > Datos Abiertos'                            => 'smi/datos-abiertos.html',
            'Indicadores > Niveles Socioeconómicos'                   => 'smi/niveles-socioeconomicos.html',
            'Indicadores > Monitores'                                 => 'monitores/index.html'),
            //'Indicadores > Convocatorias'                             => 'convocatorias/index.html'),
        'Indicadores Básicos de Colonias' => array(
            'Indicadores Básicos de Colonias > Introducción al IBC'   => 'ibc/introduccion.html',
            'Indicadores Básicos de Colonias > Colonias de Torreón'   => 'ibc-colonias-torreon/index.html',
            'Indicadores Básicos de Colonias > Mapa Completo'         => 'https://implantorreon.carto.com/u/sigimplan/builder/907a6bc0-2c7e-451e-9668-b78d952e52ff/embed',
            //'Indicadores Básicos de Colonias > Mapa Completo'         => 'https://implantorreon.carto.com/u/sigimplan/builder/08e34126-9748-4d5f-8c1f-1d9ac194ee79/embed',
            'Indicadores Básicos de Colonias > Torreón Urbano'        => 'ibc/torreon-urbano.html',
            'Indicadores Básicos de Colonias > Catálogo de Conceptos' => 'ibc/catalogo-conceptos.html',
            'Indicadores Básicos de Colonias > Datos Abiertos'        => 'ibc/datos-abiertos.html'),
        //CAMBIOS VM
       // 'Información Geográfica' => array(

       //     'Información Geográfica > Introducción al SIG'            => 'sig/introduccion.html',
       //     'Información Geográfica > Planes'                         => 'sig-planes/index.html',
       //     'Información Geográfica > Mapas de Torreón'               => 'sig-mapas-torreon/index.html',
       //     'Información Geográfica > Zonificación Secundaria'        => 'sig-mapas-torreon/zonificacion-secundaria.html'),
        'Información Geográfica' => array(
            'Información Geográfica > Introducción al SIG'            => 'sig/introduccion.html',
         //   'Información Geográfica > Planes'                         => 'sig-planes/index.html',    VM
         //   'Información Geográfica > Mapas de Torreón'               => 'sig-mapas-torreon/index.html',
         //   'Información Geográfica > Zonificación Secundaria'        => 'sig-mapas-torreon/zonificacion-secundaria.html',
            'Información Geográfica > Mapas por Tema'                 => 'sig-mapas-torreon/temas-sig.html',
         //   'Información Geográfica > Mapas por Tema'                 => array(
                                                                            //'Información Geográfica > Mapas por Tema > Planes y Programas'      => 'sig-mapas-torreon/categoria-cultura.html',
         //                                                                   'Información Geográfica > Mapas por Tema > Planes y Programas'      => 'sig-mapas-torreon/temas-sig.html',
                                                                            //'Información Geográfica > Mapas por Tema > Indicadores Georreferenciados'      => 'sig-mapas-torreon/categoria-vivienda.html',
         //                                                                   'Información Geográfica > Mapas por Tema > Indicadores Georreferenciados'      => 'sig-mapas-torreon/categoria-poblacion.html',
         //                                                                   'Información Geográfica > Mapas por Tema > Inventario Urbano'       => 'sig-mapas-torreon/categoria-infraestructura.html',
         //                                                                   'Información Geográfica > Mapas por Tema > Movilidad'               => 'sig-mapas-torreon/categoria-movilidad.html',
         //                                                                   'Información Geográfica > Mapas por Tema > Medio Ambiente'          => 'sig-mapas-torreon/categoria-medio-ambiente.html'),
            //'Información Geográfica > Zonificación Secundaria'        => 'sig-mapas-torreon/zonificacion-secundaria.html',
            'Información Geográfica > Usos de Suelo'                  => 'sig-mapas-torreon/plan-director-desarrollo-urbano.html',
            'Información Geográfica > Datos Abiertos'                 => 'sig/datos-abiertos.html'),
        'Plan Estratégico Torreón 2040' => array(
            'Plan Estratégico Torreón 2040 > Índice General'          => 'pet/indice.html',
            'Plan Estratégico Torreón 2040 > Índice Alfabético'       => 'pet/index.html',
            'Plan Estratégico Torreón 2040 > Descargar'               => 'plan-estrategico-torreon-enfoque-metropolitano-2040/index.html',
            'Plan Estratégico Torreón 2040 > Descripción del proceso' => 'plan-estrategico-metropolitano/descripcion-del-proceso.html',
            'Plan Estratégico Torreón 2040 > Proyectos'               => 'proyectos/index.html',
            'Plan Estratégico Torreón 2040 > Visión de Ciudad desde IMPLAN' => 'vision-de-ciudad/vision-de-ciudad.html'),

//ÚLTIMOS CAMBIOS VM
        'Documentos'  => array(
            'Documentos > Planes y Programas'                         => 'sig-planes/index.html',
            'Documentos > Investigaciones'                            => 'investigaciones/index.html',
            'Documentos > Estudios'                                   => 'estudios/index.html',
            'Documentos > Leyes y Reglamentos'                        => 'institucional/reglamentos.html'),
// ÚLTIMOS CAMBIOS VM FIN
//        'Estudios'                                                    => 'estudios/index.html',
//        'Investigaciones'                                             => 'investigaciones/index.html',
        'Consejo Directivo'                                           => 'consejo-directivo/integrantes.html',
        'Sala de Prensa'                                              => 'sala-prensa/index.html',
        'Programas de Radio'                                          => 'programas-radio/index.html',
        'Consejo Visión Metrópoli' => array(
            'Consejo Visión Metrópoli > Consejo Juvenil'              => 'convocatorias/vision-metropoli.html',
            'Consejo Visión Metrópoli > Integrantes del Consejo'      => 'vision-metropoli/integrantes.html',
            'Consejo Visión Metrópoli > Sala de Prensa'               => 'vision-metropoli/index.html',
            'Consejo Visión Metrópoli > Reglamento'                   => 'vision-metropoli/reglamento-vision-metropoli-2020.pdf',
            'Consejo Visión Metrópoli > Informe 2019 - 2021'          => 'https://issuu.com/consejovisionmetropoli/docs/informe_visi_n_metr_poli_2019_-_2021'),
      //  'Visión Metrópoli'                                            => 'vision-metropoli/index.html',
        'Institucional' => array(
            'Institucional > Visión / Misión'                         => 'institucional/vision-mision.html',
            //'Institucional > Mensaje del Director'                    => 'institucional/mensaje-director.html',
            'Institucional > Mensaje del Director'                    => 'institucional/mensaje-director.html',
            'Institucional > Quienes Somos'                           => 'autores/index.html',
            'Institucional > Estructura Orgánica'                     => 'institucional/estructura-organica.html',
            'Institucional > Modelo Operativo Univ.'                  => 'institucional/modelo-operativo-universal.html',
            'Institucional > Reglamentos'                             => 'institucional/reglamentos.html'),
        'Transparencia'  => array(
             'Transparencia > Transparencia Estatal (ICAI)'           => 'http://www2.icai.org.mx/ipo/dependencia.php?dep=178#pageload',
             'Transparencia > Plataforma Nacional de Transparencia'   => 'https://consultapublicamx.inai.org.mx/vut-web/faces/view/consultaPublica.xhtml#inicio',
             'Transparencia > Documentos'                             => 'transparencia/index.html'),
        'Términos de Uso' => array(
            'Términos de Uso > De la información'                     => 'terminos/terminos-informacion.html',
            'Términos de Uso > Del sitio web'                         => 'terminos/terminos-sitio.html',
            'Términos de Uso > Aviso de Privacidad'                   => 'terminos/privacidad.html'),
        'Contacto' => array(
            'Contacto > Medios de contacto'                           => 'contacto/contacto.html',
            'Contacto > Preguntas Frecuentes'                         => 'preguntas-frecuentes/preguntas-frecuentes.html',
            'Contacto > Comentarios y Sugerencias'                    => 'http://goo.gl/forms/1rdX4X128PpMOif73'),
        'Convocatorias'                                               => 'convocatorias/index.html',
        'Oficina Virtual de Información Económica (OVIE)'             => 'http://177.244.42.17/ovie-torreon/#!',
        'Atlas Municipal de Riesgos de Torreón'                       => 'https://arcg.is/0vySSr');
      //  'Visión Metrópoli'                                            => 'vision-metropoli/index.html');
     //   'Valores Catastrales'                                         => 'valores-catastrales/index.html');
      //  'Convocatoria Visión Metrópoli 2018'                          => 'https://drive.google.com/file/d/17x9_UkY-i-f4W-TI6ImYKmyZs8QUWOq3/view?usp=sharing');
    static public $iconos = array(
        'Análisis Publicados'              => 'fa fa-lightbulb-o',
        'Indicadores'                      => 'fa fa-area-chart',
            'Introducción al SMI'          => 'fa fa-file-text-o',
            'Indicadores por Categoría'    => 'fa fa-th-list',
            'Indicadores por Región'       => 'fa fa-table',
            'Georreferenciados'            => 'fa fa-map-marker',
            'Datos Abiertos'               => 'fa fa-download',
            'Niveles Socioeconómicos'      => 'fa fa-bar-chart',
            'Monitores'                    => 'fa fa-file-text-o',
            'Convocatorias'                => 'fa fa-file-text-o',
        'Indicadores Básicos de Colonias'  => 'fa fa-puzzle-piece',
            'Introducción al IBC'          => 'fa fa-file-text-o',
            'Colonias de Torreón'          => 'fa fa-font',
            'Mapa Completo'                => 'fa fa-external-link',
            'Torreón Urbano'               => 'fa fa-table',
            'Catálogo de Conceptos'        => 'fa fa-list-ul',
        'Información Geográfica'           => 'fa fa-map-marker',
            'Introducción al SIG'          => 'fa fa-file-text-o',
            'Planes'                       => 'fa fa-file-pdf-o',
            //'Mapas de Torreón'             => 'fa fa-map-marker',
            //'Zonificación Secundaria'      => 'fa fa-map-marker',
            'Mapas por Tema'               => 'fa fa-map-o',

            'Indicadores Georreferenciados'=> 'fa fa-map-marker',
            'Planes y Programas'           => 'fa fa-map-marker',
            'Inventario Urbano'            => 'fa fa-map-marker',
            'Movilidad'                    => 'fa fa-map-marker',
            'Medio Ambiente'               => 'fa fa-map-marker',
            'Usos de Suelo'                => 'fa fa-map-marker',
        'Plan Estratégico Torreón 2040'    => 'fa fa-book',
            'Índice General'               => 'fa fa-list-ul',
            'Índice Alfabético'            => 'fa fa-font',
            'Descargar'                    => 'fa fa-download',
            'Descripción del proceso'      => 'fa fa-calendar',
            'Proyectos'                    => 'fa fa-check-square',
        //'Investigaciones'                  => 'fa fa-briefcase',

        'Documentos'                       => 'fa fa-briefcase',
            'Planes y Programas'           => 'fa fa-book',
            'Estudios e Investigaciones'   => 'fa fa-book',
            'Leyes y Reglamentos'          => 'fa fa-book',

        'Consejo Directivo'                => 'fa fa-users',
        'Sala de Prensa'                   => 'fa fa-newspaper-o',
        'Programas de Radio'               => 'fa fa-microphone',
        'Visión Metrópoli'                 => 'fa fa-university',
            'Reglamento'                   => 'fa fa-file-text-o',
        'Institucional'                    => 'fa fa-building-o',
            'Visión / Misión'              => 'fa fa-trophy',
            'Mensaje del Director'         => 'fa fa-comment',
            'Quienes Somos'                => 'fa fa-user',
            'Estructura Orgánica'          => 'fa fa-sitemap',
            'Modelo Operativo Univ.'       => 'fa fa-slideshare',
            'Reglamentos'                  => 'fa fa-gavel',
            'Información Financiera'       => 'fa fa-check',
            //,'Transparencia'                => 'fa fa-external-link'
            //'Consejo Directivo'                => 'fa fa-users',
        'Transparencia'                    => 'fa fa-external-link',
        'Términos de Uso'                  => 'fa fa-share-alt',
            'De la información'            => 'fa fa-cubes',
            'Del sitio web'                => 'fa fa-globe',
            'Aviso de Privacidad'          => 'fa fa-lock',
        'Contacto'                         => 'fa fa-phone',
            'Medios de contacto'           => 'fa fa-phone',
            'Preguntas Frecuentes'         => 'fa fa-question',
            'Comentarios y Sugerencias'    => 'fa fa-external-link',
        'Convocatorias'                    => 'fa fa-file-text-o',
        'Oficina Virtual de Información Económica (OVIE)' => 'fa fa-map-marker',
        'Atlas Municipal de Riesgos de Torreón'  => 'fa fa-globe');

//<i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i><i class="fas fa-map-marked-alt"></i><i class="fas fa-map-marked"></i>
    protected $buscador_html = <<<FINAL
          <form method="get" action="http://www.trcimplan.gob.mx/buscador-resultados.html">
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" placeholder="Google buscar..." value="" name="q">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
FINAL;
    protected $buscador_js = "";

} // Clase NavegacionConfig

?>
