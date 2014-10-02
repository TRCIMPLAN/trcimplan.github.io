<?php
/*
 * SMIbeta - Mapa Inferior
 *
 * Copyright (C) 2014 Guillermo Valdés Lozano
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
namespace Base;

/**
 * Clase MapaInferior
 */
class MapaInferior extends \Configuracion\MapaInferiorConfig {

    // public $sitio_titulo;
    // public $logotipo;
    // public $opciones;
    public $en_raiz = false; // Si es verdadero los vínculos serán para un archivo en la raíz del sitio

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // En este arreglo acumularemos la entrega
        $a = array();
        // Acumular
        $a[] = '    <div class="row mapa-inferior">';
        $a[] = '      <div class="col-md-8">';
        if ($this->en_raiz) {
            $a[] = "          <a href=\"index.html\"><img class=\"img-responsive mapa-inferior-logo\" src=\"{$this->logotipo}\" alt=\"{$this->sitio_titulo}\"></a>";
        } else {
            $a[] = "          <a href=\"../index.html\"><img class=\"img-responsive mapa-inferior-logo\" src=\"../{$this->logotipo}\" alt=\"{$this->sitio_titulo}\"></a>";
        }
        $a[] = '      </div>'; // col-md-8
        $a[] = '      <div class="col-md-4">';
        $a[] = '        <div class="pull-right mapa-inferior-redes-sociales">';
        $a[] = '          <a class="fa fa-twitter-square" href="http://www.twitter.com/trcimplan" target="_blank"></a>';
        $a[] = '          <a class="fa fa-facebook-square" href="https://facebook.com/trcimplan" target="_blank"></a>';
        $a[] = '          <a class="fa fa-github-square" href="https://github.com/TRCIMPLAN" target="_blank"></a>';
        if ($this->en_raiz) {
            $a[] = '          <a class="fa fa-rss-square" href="rss.xml"></a>';
        } else {
            $a[] = '          <a class="fa fa-rss-square" href="../rss.xml"></a>';
        }
        $a[] = '        </div>';
        $a[] = '      </div>'; // col-md-4
        $a[] = '    </div>'; // row
        // Entregar
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código javascript
     */
    public function javascript() {
        return '';
    } // javascript

} // Clase MapaInferior

/*
<!-- INFERIOR INICIA -->
<div id="inferior">
    <div class="container">
        <div class="row">

            <!-- MAPA DEL SITIO INICIA -->
            <div class="col-md-9">
                <a href="http://trcimplan.mx/"><img class="inferior-logo" src="http://trcimplan.mx/wp-content/themes/implan/img/implan-barra-mediano.png" alt="IMPLAN"></a></br>
                <div class="row">
                    <div class="col-md-3 inferior-mapa">
                      INSTITUCIONAL
                      <ul>
                        <li><a href="http://trcimplan.mx/institucional/vision-mision/">VISIÓN / MISIÓN</a></li>
                        <li><a href="http://trcimplan.mx/institucional/mensaje-del-director/">MENSAJE DEL DIRECTOR</a></li>
                        <li><a href="http://trcimplan.mx/institucional/quienes-somos/">QUIENES SOMOS</a></li>
                        <li><a href="http://trcimplan.mx/institucional/estructura-organica/">ESTRUCTURA ORGÁNICA</a></li>
                        <li><a href="http://www.icai.org.mx/ipmn/dependencias/impyc" target="_blank">TRANSPARENCIA</a></li>
                      </ul>
                    </div>
                    <div class="col-md-3 inferior-mapa">
                      SERVICIOS
                      <ul>
                        <li><a href="http://trcimplan.mx/servicios/reglamentos/">REGLAMENTOS</a></li>
                        <li><a href="http://trcimplan.mx/servicios/indicadores/">INDICADORES</a></li>
                        <li><a href="http://trcimplan.mx/servicios/sig/">SISTEMA DE INFORMACIÓN GEOGRÁFICA</a></li>
                        <li><a href="http://trcimplan.mx/servicios/banco-de-proyectos/">BANCO MUNICIPAL DE PROYECTOS DE INVERSIÓN</a></li>
                        <li><a href="http://trcimplan.mx/servicios/sesp/">SISTEMA DE EVALUACIÓN Y SEGUIMIENTO DE PROYECTOS</a></li>
                        <li><a href="http://trcimplan.mx/category/proyectos/">PROYECTOS</a></li>
                      </ul>
                    </div>
                    <div class="col-md-2 inferior-mapa">
                      INTERACCIÓN
                      <ul>
                        <li><a href="http://trcimplan.mx/category/blog/">BLOG</a></li>
                        <li><a href="http://trcimplan.mx/category/eventos/">EVENTOS</a></li>
                      </ul>
                    </div>
                    <div class="col-md-2 inferior-mapa">
                      <a href="http://trcimplan.mx/consejo/">CONSEJO DIRECTIVO</a>
                      <a href="http://trcimplan.mx/consejo/agenda-consejo-directivo/">AGENDA CONSEJO DIRECTIVO</a>
                      <a href="http://trcimplan.mx/consejo/agenda-comites-tecnicos/">AGENDA COMITÉS TÉCNICOS</a>
                    </div>
                    <div class="col-md-2 inferior-mapa inferior-mapa-ultimo">
                      <a href="http://trcimplan.mx/contacto/">CONTACTO</a>
                      <br>
                      <a href="http://trcimplan.mx/category/prensa/">SALA DE PRENSA</a>
                    </div>
                </div>
            </div>
            <!-- MAPA DEL SITIO TERMINA -->

            <!-- TWITTER INICIA -->
            <div class="col-md-3">
                <a class="twitter-timeline" height="340px" href="https://twitter.com/trcimplan" data-chrome="nofooter" data-widget-id="455819492145127424">Tweets por @trcimplan</a>
            </div>
            <!-- TWITTER TERMINA -->

        </div>
    </div>
</div>
<!-- INFERIOR TERMINA -->
*/

/* JAVASCRIPT
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
 */

?>
