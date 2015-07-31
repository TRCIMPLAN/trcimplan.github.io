<?php
/*
 * TrcIMPLAN Sitio Web - Navegación Configuración
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
namespace Configuracion;

/**
 * Clase NavegacionConfig
 */
class NavegacionConfig {

    protected $sitio_titulo = 'IMPLAN Torreón';
    protected $logotipo     = 'imagenes/implan-barra-logo-chico-gris.png';
    protected $opciones     = array(
        'Análisis Publicados' => 'blog/index.html',
        'Indicadores' => array(
            'Indicadores > Introducción al S.M.I.'    => 'smi/introduccion.html',
            'Indicadores > Indicadores por Categoría' => 'indicadores-categorias/index.html',
            'Indicadores > Indicadores por Región'    => 'smi/por-region.html',
            'Indicadores > Georreferenciados'         => 'smi-georreferenciados/index.html'),
        'Información Geográfica' => array(
            'Información Geográfica > Introducción al S.I.G.'  => 'sig/introduccion.html',
            'Información Geográfica > Planes'                  => 'sig-planes/index.html',
            'Información Geográfica > S.I.G. de Torreón'       => 'sig-mapas-torreon/index.html',
            'Información Geográfica > Zonificación Secundaria' => 'sig-mapas-torreon/zonificacion-secundaria.html'),
        'Plan Estratégico Metropolitano' => array(
            'Plan Estratégico Metropolitano > Conoce el Plan'              => 'plan-estrategico-metropolitano/introduccion.html',
            'Plan Estratégico Metropolitano > M1 Diagnóstico y Pronóstico' => 'plan-estrategico-metropolitano/mesa-1.html',
            'Plan Estratégico Metropolitano > M2 Visión y Objetivos'       => 'plan-estrategico-metropolitano/mesa-2.html',
            'Plan Estratégico Metropolitano > M3 Estrategias y Proyectos'  => 'plan-estrategico-metropolitano/mesa-3.html',
            'Plan Estratégico Metropolitano > M4 Gestión de Proyectos'     => 'plan-estrategico-metropolitano/mesa-4.html',
            'Plan Estratégico Metropolitano > Fotogalería'                 => 'plan-estrategico-metropolitano/fotogaleria.html',
            'Plan Estratégico Metropolitano > Participación Ciudadana'     => 'http://trcimplan.mx/plan'),
        'Proyectos Estratégicos' => array(
            'Proyectos Estratégicos > Banco de Proyectos' => 'proyectos/banco-municipal-proyectos-inversion.html',
            'Proyectos Estratégicos > Calle Completa'     => 'proyectos/calle-completa.html',
            'Proyectos Estratégicos > Plata Laguna'       => 'proyectos/plata-laguna.html',
            'Proyectos Estratégicos > Plan Centro Laguna' => 'proyectos/plan-centro-laguna.html',
            'Proyectos Estratégicos > Salud Laguna'       => 'proyectos/salud-laguna.html'),
        'Institucional' => array(
            'Institucional > Visión / Misión'        => 'institucional/vision-mision.html',
            'Institucional > Mensaje del Director'   => 'institucional/mensaje-director.html',
            'Institucional > Quienes Somos'          => 'institucional/quienes-somos.html',
            'Institucional > Estructura Orgánica'    => 'institucional/estructura-organica.html',
            'Institucional > Reglamentos'            => 'institucional/reglamentos.html',
            'Institucional > Información Financiera' => 'institucional/informacion-financiera.html',
            'Institucional > Transparencia'          => 'http://www.icai.org.mx/ipmn/dependencias/impyc'),
        'Consejo Directivo' => 'consejo-directivo/integrantes.html',
        'Comunicados' => array(
            'Comunicados > Eventos'        => 'eventos/index.html',
            'Comunicados > Sala de Prensa' => 'sala-prensa/index.html'),
        'Preguntas Frecuentes' => 'preguntas-frecuentes/preguntas-frecuentes.html',
        'Términos de Uso' => array(
            'Términos de Uso > De la información'   => 'terminos/terminos-informacion.html',
            'Términos de Uso > Del sitio web'       => 'terminos/terminos-sitio.html',
            'Términos de Uso > Aviso de Privacidad' => 'terminos/privacidad.html'),
        'Contacto' => array(
            'Contacto > Medios de contacto'        => 'contacto/contacto.html',
            'Contacto > Comentarios y Sugerencias' => 'http://trcimplan.mx/comentariossugerencias'));
    static public $iconos = array(
        'Análisis Publicados'             => 'fa fa-lightbulb-o',
        'Indicadores'                     => 'fa fa-area-chart',
            'Introducción al S.M.I.'      => 'fa fa-file-text-o',
            'Indicadores por Categoría'   => 'fa fa-th-list',
            'Indicadores por Región'      => 'fa fa-table',
            'Georreferenciados'           => 'fa fa-map-marker',
        'Información Geográfica'          => 'fa fa-map-marker',
            'Introducción al S.I.G.'      => 'fa fa-file-text-o',
            'Planes'                      => 'fa fa-server',
            'S.I.G. de Torreón'           => 'fa fa-map-marker',
            'Zonificación Secundaria'     => 'fa fa-map-marker',
        'Plan Estratégico Metropolitano'  => 'fa fa-sun-o',
            'Conoce el Plan'              => 'fa fa-file-text-o',
            'M1 Diagnóstico y Pronóstico' => 'fa fa-calendar',
            'M2 Visión y Objetivos'       => 'fa fa-calendar',
            'M3 Estrategias y Proyectos'  => 'fa fa-calendar',
            'M4 Gestión de Proyectos'     => 'fa fa-calendar',
            'Fotogalería'                 => 'fa fa-camera',
            'Participación Ciudadana'     => 'fa fa-external-link',
        'Proyectos Estratégicos'          => 'fa fa-check-square',
            'Banco de Proyectos'                        => 'fa fa-check-square',
            'Banco Municipal de Proyectos de Inversión' => 'fa fa-check-square',
            'Calle Completa'                            => 'fa fa-road',
            'Programa Calle Completa'                   => 'fa fa-road',
            'Plata Laguna'                              => 'fa fa-certificate',
            'Salud Laguna'                              => 'fa fa-share-alt-square',
        'Institucional'                   => 'fa fa-building-o',
            'Transparencia'               => 'fa fa-external-link',
        'Consejo Directivo'               => 'fa fa-users',
        'Comunicados'                     => 'fa fa-comments',
            'Eventos'                     => 'fa fa-folder-o',
            'Sala de Prensa'              => 'fa fa-folder-o',
        'Términos de Uso'                 => 'fa fa-files-o',
        'Contacto'                        => 'fa fa-phone',
            'Comentarios y Sugerencias'   => 'fa fa-external-link',
            'Preguntas Frecuentes'        => 'fa fa-question');
    protected $buscador_html = <<<FINAL
          <form method="get" id="searchbox_015475140351266618625:04hulmghdys" action="http://www.trcimplan.gob.mx/buscador-resultados.html">
            <input type="hidden" value="015475140351266618625:04hulmghdys" name="cx">
            <input type="hidden" value="FORID:11" name="cof">
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" placeholder="Buscar..." value="" name="s" id="s">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
FINAL;
    protected $buscador_js = "";

} // Clase NavegacionConfig

?>
