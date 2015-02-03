<?php
/*
 * SMIbeta - Navegación Configuración
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
            'Indicadores > Introducción'              => 'smi/introduccion.html',
            'Indicadores > Indicadores por Categoría' => 'indicadores-categorias/index.html',
            'Indicadores > Indicadores por Región'    => 'smi/por-region.html',
            'Indicadores > Georreferenciados'         => 'smi/georreferenciados.html'),
        'Información Geográfica' => array(
            'Información Geográfica > Introducción'            => 'sig/introduccion.html',
            'Información Geográfica > Abrir el SIG'            => 'sig/abrir-sig.html',
            'Información Geográfica > Alumbrado Público'       => 'sig/alumbrado-publico.html',
            'Información Geográfica > Crecimiento Histórico'   => 'sig/crecimiento-historico-torreon.html',
            'Información Geográfica > Zonificación Primaria'   => 'sig/zonificacion-primaria.html',
            'Información Geográfica > Zonificación Secundaria' => 'sig/zonificacion-secundaria.html'),
        'Plan Estratégico Metropolitano' => array(
            'Plan Estratégico Metropolitano > Conoce el Plan'              => 'plan-estrategico-metropolitano/introduccion.html',
            'Plan Estratégico Metropolitano > M1 Diagnóstico y Pronóstico' => 'plan-estrategico-metropolitano/mesa-1.html',
            'Plan Estratégico Metropolitano > M2 Visión y Objetivos'       => 'plan-estrategico-metropolitano/mesa-2.html',
            'Plan Estratégico Metropolitano > M3 Estrategias y Proyectos'  => 'plan-estrategico-metropolitano/mesa-3.html',
            'Plan Estratégico Metropolitano > Participación Ciudadana'     => 'http://trcimplan.mx/plan'),
        'Banco de Proyectos' => array(
            'Banco de Proyectos > Introducción' => 'proyectos/introduccion.html',
            'Banco de Proyectos > Plata Laguna' => 'proyectos/plata-laguna.html'),
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
            'Términos de Uso > De la información' => 'terminos/terminos-informacion.html',
            'Términos de Uso > Del sitio web'     => 'terminos/terminos-sitio.html'),
        'Contacto' => array(
            'Contacto > Medios de contacto'        => 'contacto/contacto.html',
            'Contacto > Comentarios y Sugerencias' => 'http://trcimplan.mx/comentariossugerencias'));
    public $iconos = array(
        'Introducción'                   => 'fa fa-file-text-o',
        'Análisis Publicados'            => 'fa fa-lightbulb-o',
        'Plan Estratégico Metropolitano' => 'fa fa-sun-o',
        'M1 Diagnóstico y Pronóstico'    => 'fa fa-calendar',
        'M2 Visión y Objetivos'          => 'fa fa-calendar',
        'M3 Estrategias y Proyectos'     => 'fa fa-calendar',
        'Participación Ciudadana'        => 'fa fa-external-link',
        'Indicadores'                    => 'fa fa-area-chart',
        'Indicadores por Región'         => 'fa fa-table',
        'Indicadores por Categoría'      => 'fa fa-th-list',
        'Georreferenciados'              => 'fa fa-map-marker',
        'Información Geográfica'         => 'fa fa-map-marker',
        'Alumbrado Público'              => 'fa fa-map-marker',
        'Crecimiento Histórico'          => 'fa fa-map-marker',
        'Zonificación Primaria'          => 'fa fa-map-marker',
        'Zonificación Secundaria'        => 'fa fa-map-marker',
        'Abrir el SIG'                   => 'fa fa-external-link',
        'Banco de Proyectos'             => 'fa fa-check-square',
        'Plata Laguna'                   => 'fa fa-certificate',
        'Institucional'                  => 'fa fa-building-o',
        'Transparencia'                  => 'fa fa-external-link',
        'Consejo Directivo'              => 'fa fa-users',
        'Comunicados'                    => 'fa fa-comments',
        'Eventos'                        => 'fa fa-folder-o',
        'Sala de Prensa'                 => 'fa fa-folder-o',
        'Términos de Uso'                => 'fa fa-files-o',
        'Contacto'                       => 'fa fa-phone',
        'Comentarios y Sugerencias'      => 'fa fa-external-link',
        'Preguntas Frecuentes'           => 'fa fa-question');
    protected $buscador_html = <<<FINAL
          <form method="get" id="searchform" id="searchbox_015475140351266618625:04hulmghdys" action="http://trcimplan.gob.mx/buscador-resultados.html">
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
